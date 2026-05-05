<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Booking | Health Care Center</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding: 2rem;">
        <header style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <div class="logo-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">Booking</span>
            </div>
            <a href="dashboard.php" style="text-decoration: none; color: var(--text-muted); font-weight: 600;">&larr; Back to Dashboard</a>
        </header>

        <section class="booking-section card glass" style="max-width: 800px; margin: 0 auto; position: relative;">
            <?php if (isset($_GET['booked'])): ?>
                <div id="success-message" style="margin-bottom: 2rem; padding: 1.5rem; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 20px; color: #166534; display: flex; align-items: center; gap: 1rem; animation: slideIn 0.3s ease;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <div>
                        <div style="font-weight: 800; font-size: 1.1rem;">Appointment Scheduled!</div>
                        <div style="font-size: 0.9rem; opacity: 0.9;">Your slot has been reserved. You can view your status in the Live Queue.</div>
                    </div>
                </div>
                <style>
                    @keyframes slideIn { from { transform: translateY(-10px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
                </style>
            <?php endif; ?>

            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1.5rem;">Quick Booking</h2>
            <form id="booking-form" action="queue.php" method="GET" style="display: flex; flex-direction: column; gap: 1.5rem;">
                <input type="hidden" name="booked" value="true">
                <input type="hidden" name="selected_slot" id="selected-slot-input">
                <input type="hidden" name="selected_doctor" id="selected-doctor-input">
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Patient Name</label>
                    <input type="text" id="patient-name" name="name" placeholder="Enter name..." required style="width: 100%; padding: 1rem; border-radius: 12px; background: rgba(0,0,0,0.02); border: 1px solid var(--border); color: var(--text-main);">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Priority Severity</label>
                    <select id="priority-level" name="prio" style="width: 100%; padding: 1rem; border-radius: 12px; background: rgba(0,0,0,0.02); border: 1px solid var(--border); color: var(--text-main);">
                        <option value="1">Routine (Low)</option>
                        <option value="2">Follow-up (Medium)</option>
                        <option value="3">Urgent (High)</option>
                        <option value="4">Emergency (Critical)</option>
                    </select>
                </div>
                <button type="submit" id="book-btn" style="padding: 1rem; border-radius: 12px; background: var(--primary); color: white; border: none; font-weight: 700; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">Schedule Appointment</button>
            </form>

            <div style="margin-top: 3rem;">
                <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 1.5rem; color: var(--text-main);">Available Clinician Slots</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    <?php 
                        $avail = [
                            ['doc' => 'Dr. Priya Patil', 'dept' => 'Cardiology', 'slots' => ['09:00 AM', '10:30 AM', '11:15 AM'], 'color' => 'var(--primary)'],
                            ['doc' => 'Dr. Sindhu Reddy', 'dept' => 'Neurology', 'slots' => ['02:00 PM', '03:45 PM'], 'color' => 'var(--secondary)'],
                            ['doc' => 'Dr. Nagamma M', 'dept' => 'Emergency', 'slots' => ['Immediate', '04:30 PM'], 'color' => '#ef4444'],
                        ];
                        foreach ($avail as $a):
                    ?>
                    <div style="background: rgba(0,0,0,0.02); border-radius: 20px; border: 1px solid var(--border); padding: 1.5rem;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;">
                            <div>
                                <h4 style="font-size: 1.1rem; color: var(--text-main); margin: 0;"><?php echo $a['doc']; ?></h4>
                                <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;"><?php echo $a['dept']; ?></span>
                            </div>
                            <div style="width: 10px; height: 10px; border-radius: 50%; background: #10b981; box-shadow: 0 0 10px #10b981;"></div>
                        </div>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                            <?php foreach ($a['slots'] as $slot): ?>
                            <div class="time-slot" 
                                 onclick="selectSlot(this, '<?php echo $a['doc']; ?>', '<?php echo $slot; ?>')"
                                 style="padding: 0.4rem 0.8rem; background: white; border: 1px solid var(--border); border-radius: 8px; font-size: 0.8rem; font-weight: 700; color: <?php echo $a['color']; ?>; cursor: pointer; transition: all 0.2s;">
                                 <?php echo $slot; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <script>
        function selectSlot(element, doctor, slot) {
            // Remove active class from all slots
            document.querySelectorAll('.time-slot').forEach(el => {
                el.style.background = 'white';
                el.style.color = '';
                el.style.borderColor = 'var(--border)';
            });

            // Highlight selected slot
            element.style.background = 'var(--primary)';
            element.style.color = 'white';
            element.style.borderColor = 'var(--primary)';

            // Update hidden inputs
            document.getElementById('selected-slot-input').value = slot;
            document.getElementById('selected-doctor-input').value = doctor;
        }
    </script>
    <script src="app.js"></script>
    <script>
        window.system = new HealthCareCenterSystem();
    </script>
</body>
</html>
