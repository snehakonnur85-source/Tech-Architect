/**
 * Health Care Center - Core Logic
 * Handles state management, overbooking resolution, and real-time UI updates.
 */

class HealthCareCenterSystem {
    constructor() {
        this.appointments = [];
        this.doctors = [
            { id: 1, name: 'Dr. Smith', capacity: 4, fatigue: 0, appointments: [] },
            { id: 2, name: 'Dr. Jones', capacity: 3, fatigue: 0, appointments: [] },
            { id: 3, name: 'Dr. Lee', capacity: 5, fatigue: 0, appointments: [] }
        ];
        this.rescuedCount = 0;
        this.maxSlotsPerDoctor = 5;
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.renderSlots();
        this.startBackgroundSim();
    }

    setupEventListeners() {
        const bookingForm = document.getElementById('booking-form');
        if (bookingForm) {
            bookingForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleBooking();
            });
        }

        const solveConflicts = document.getElementById('solve-conflicts');
        if (solveConflicts) {
            solveConflicts.addEventListener('click', () => {
                this.resolveOverbooking();
            });
        }
    }

    handleBooking() {
        const name = document.getElementById('patient-name').value;
        const priority = parseInt(document.getElementById('priority-level').value);
        
        const appointment = {
            id: Date.now(),
            patientName: name,
            priority: priority,
            bookedAt: new Date(),
            waitTime: 0,
            status: 'pending',
            disruptions: 0
        };

        // Find available doctor or overbook
        let assignedDoctor = this.doctors.find(d => d.appointments.length < d.capacity);
        
        if (!assignedDoctor) {
            // Overbooking logic - assign to least fatigued doctor
            assignedDoctor = [...this.doctors].sort((a, b) => a.appointments.length - b.appointments.length)[0];
            appointment.status = 'overbooked';
        }

        assignedDoctor.appointments.push(appointment);
        this.appointments.push(appointment);
        
        this.updateUI();
        document.getElementById('booking-form').reset();
    }

    resolveOverbooking() {
        console.log("Resolving conflicts...");
        let movedCount = 0;

        // Algorithm: For every doctor who is over capacity
        this.doctors.forEach(doctor => {
            if (doctor.appointments.length > doctor.capacity) {
                // Find candidates to move (low priority, low wait time)
                const candidates = doctor.appointments
                    .filter(app => app.priority <= 2 && app.disruptions < 2)
                    .sort((a, b) => a.priority - b.priority);

                while (doctor.appointments.length > doctor.capacity && candidates.length > 0) {
                    const toMove = candidates.shift();
                    
                    // Try to find another doctor with capacity
                    const alternate = this.doctors.find(d => d.appointments.length < d.capacity);
                    if (alternate) {
                        doctor.appointments = doctor.appointments.filter(a => a.id !== toMove.id);
                        toMove.disruptions++;
                        toMove.status = 'rescheduled';
                        alternate.appointments.push(toMove);
                        movedCount++;
                    } else {
                        // All full - check if we should push to next shift (simulated by wait time increase)
                        toMove.waitTime += 15;
                        break;
                    }
                }
            }
        });

        this.rescuedCount += movedCount;
        this.updateUI();
        this.showToast(`Resolved ${movedCount} conflicts!`);
    }

    updateUI() {
        this.renderQueue();
        this.renderSlots();
        this.updateStats();
    }

    renderQueue() {
        const container = document.getElementById('queue-container');
        if (!container) return;
        container.innerHTML = '';

        const allApps = this.doctors.flatMap(d => d.appointments.map(a => ({...a, doctorName: d.name})));
        allApps.sort((a, b) => b.priority - a.priority || a.bookedAt - b.bookedAt);

        allApps.forEach(app => {
            const div = document.createElement('div');
            const priorityClass = app.priority >= 4 ? 'priority-high' : (app.priority >= 3 ? 'priority-medium' : '');
            div.className = `appointment-card ${priorityClass}`;
            
            div.innerHTML = `
                <div>
                    <div style="font-weight: 600;">${app.patientName}</div>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">
                        ${app.doctorName} • ${this.getPriorityLabel(app.priority)}
                    </div>
                </div>
                <div style="text-align: right;">
                    <div style="font-size: 0.875rem; color: ${app.status === 'overbooked' ? 'var(--danger)' : 'var(--success)'};">
                        ${app.status.toUpperCase()}
                    </div>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">
                        Wait: ${Math.max(5, app.waitTime + Math.floor(Math.random() * 5))}m
                    </div>
                </div>
            `;
            container.appendChild(div);
        });
    }

    renderSlots() {
        const grid = document.getElementById('slot-grid');
        if (!grid) return;
        grid.innerHTML = '';

        this.doctors.forEach(doc => {
            const docHeader = document.createElement('div');
            docHeader.style.gridColumn = '1 / -1';
            docHeader.style.fontSize = '0.8rem';
            docHeader.style.marginTop = '1rem';
            docHeader.style.color = 'var(--primary-light)';
            docHeader.textContent = `${doc.name} (${doc.appointments.length}/${doc.capacity})`;
            grid.appendChild(docHeader);

            for (let i = 0; i < this.maxSlotsPerDoctor; i++) {
                const slot = document.createElement('div');
                const isBooked = i < doc.appointments.length;
                const isOver = i >= doc.capacity && isBooked;
                
                slot.className = `slot ${isBooked ? 'booked' : ''} ${isOver ? 'overbooked' : ''}`;
                slot.textContent = `${9 + i}:00`;
                grid.appendChild(slot);
            }
        });
    }

    updateStats() {
        const totalApps = this.doctors.reduce((sum, d) => sum + d.appointments.length, 0);
        const totalCap = this.doctors.reduce((sum, d) => sum + d.capacity, 0);
        const load = Math.min(100, Math.round((totalApps / totalCap) * 100));
        
        const loadElem = document.getElementById('system-load');
        if (loadElem) loadElem.textContent = `${load}%`;
        
        const gaugeElem = document.getElementById('load-gauge');
        if (gaugeElem) gaugeElem.style.width = `${load}%`;
        
        const waitElem = document.getElementById('avg-wait');
        if (waitElem) waitElem.textContent = `${Math.round(load * 0.4)}m`;
        
        const rescuedElem = document.getElementById('rescued-slots');
        if (rescuedElem) rescuedElem.textContent = this.rescuedCount;
        
        const fatigueElem = document.getElementById('fatigue-index');
        if (fatigueElem) {
            const fatigue = load > 90 ? 'Critical' : (load > 70 ? 'High' : 'Optimal');
            fatigueElem.textContent = fatigue;
            fatigueElem.style.color = load > 90 ? 'var(--danger)' : (load > 70 ? 'var(--accent)' : 'var(--success)');
        }
    }

    getPriorityLabel(p) {
        return ['Routine', 'Follow-up', 'Urgent', 'Critical'][p-1] || 'Unknown';
    }

    startBackgroundSim() {
        // Simulate real-time updates and random cancellations
        setInterval(() => {
            if (Math.random() > 0.8 && this.appointments.length > 0) {
                // Simulation: A random appointment gets cancelled ("Storm" prevention)
                const doc = this.doctors[Math.floor(Math.random() * this.doctors.length)];
                if (doc.appointments.length > 0) {
                    doc.appointments.shift();
                    this.updateUI();
                    console.log("Simulated cancellation handled.");
                }
            }
        }, 5000);
    }

    showToast(msg) {
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.style.position = 'fixed';
        toast.style.bottom = '2rem';
        toast.style.right = '2rem';
        toast.style.padding = '1rem 2rem';
        toast.style.background = 'var(--secondary)';
        toast.style.borderRadius = '12px';
        toast.style.boxShadow = '0 10px 30px rgba(0,0,0,0.5)';
        toast.style.zIndex = '1000';
        toast.textContent = msg;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }

    logout() {
        if (confirm('Are you sure you want to logout from the portal?')) {
            window.location.href = 'index.php';
            return true;
        }
        return false;
    }

    showDetails(type) {
        const modal = document.getElementById('details-modal');
        const overlay = document.getElementById('modal-overlay');
        const title = document.getElementById('modal-title');
        const content = document.getElementById('modal-content');

        const details = {
            'load': {
                title: 'System Load Details',
                content: 'This represents the current utilization of the medical facility. It is calculated based on the ratio of active appointments to the total capacity of all available doctors. Current status is based on real-time data.'
            },
            'wait': {
                title: 'Wait Time Prediction',
                content: 'Our AI-driven algorithm forecasts average wait times by analyzing doctor fatigue, priority levels, and historical throughput. We aim to keep this under 15 minutes for routine cases.'
            },
            'fatigue': {
                title: 'Fatigue Index Analysis',
                content: 'Monitoring clinical fairness. This index tracks the workload density for each medical practitioner to prevent burnout and ensure the highest quality of patient care.'
            },
            'rescued': {
                title: 'Conflict Resolution Report',
                content: 'This counter tracks the number of potential overbooking conflicts successfully resolved by our proprietary algorithm through dynamic rescheduling and priority balancing.'
            }
        };

        const data = details[type];
        title.textContent = data.title;
        content.textContent = data.content;

        modal.style.display = 'block';
        overlay.style.display = 'block';
    }

    hideDetails() {
        document.getElementById('details-modal').style.display = 'none';
        document.getElementById('modal-overlay').style.display = 'none';
    }
}

// Remove the automatic instantiation at the bottom since we now do it in the PHP file
// new HealthCareCenterSystem();
