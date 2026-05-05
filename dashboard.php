<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Center | Intelligent Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo-container" style="background: transparent; border: none; padding: 0; margin-bottom: 2rem;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">Health Care</span>
            </div>

            <nav class="sidebar-nav">
                <a href="insights.php?type=admin" class="nav-link animate-slide-left delay-1">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Admin
                </a>
                <a href="index.php" class="nav-link animate-slide-left delay-2">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    Home
                </a>
                <a href="dashboard.php" class="nav-link active animate-slide-left delay-3">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    Dashboard
                </a>
                <a href="queue.php" class="nav-link animate-slide-left delay-4">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    Live Queue
                </a>
                <a href="booking.php" class="nav-link animate-slide-left delay-5">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    Booking
                </a>
                <a href="schedule.php" class="nav-link animate-slide-left delay-6">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    Schedule
                </a>
                <a href="reports.php" class="nav-link animate-slide-left delay-1">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                    Reports
                </a>
            </nav>
            <div class="sidebar-footer">
                <a href="index.php" class="nav-link" style="color: var(--danger); margin-top: auto;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    Logout
                </a>
            </div>
        </aside>

        <main class="main-content">
            <header class="dashboard-header">
                <div>
                    <h1 style="font-size: 1.75rem; color: var(--text-main); margin-bottom: 0.25rem;">Welcome</h1>
                </div>
            </header>

            <div class="dashboard-grid">
                <!-- Top Stats -->
                <section class="stats-panel">
                    <a href="insights.php?type=load" class="stat-item animate-fade-up delay-1" style="text-decoration: none; display: block;">
                        <div class="stat-label">System Load</div>
                        <div class="stat-value" id="system-load">84%</div>
                        <div class="wait-time-gauge"><div class="gauge-fill gauge-shimmer" id="load-gauge" style="width: 84%"></div></div>
                    </a>
                    <a href="insights.php?type=wait" class="stat-item animate-fade-up delay-2" style="text-decoration: none; display: block;">
                        <div class="stat-label">Avg. Wait Time</div>
                        <div class="stat-value" id="avg-wait">12m</div>
                    </a>
                    <a href="insights.php?type=fatigue" class="stat-item animate-fade-up delay-3" style="text-decoration: none; display: block;">
                        <div class="stat-label">Fatigue Index</div>
                        <div class="stat-value" id="fatigue-index">Optimal</div>
                    </a>
                    <a href="insights.php?type=rescued" class="stat-item animate-fade-up delay-4" style="text-decoration: none; display: block;">
                        <div class="stat-label">Rescued Slots</div>
                        <div class="stat-value" id="rescued-slots">128</div>
                    </a>
                </section>

                <!-- Insights -->
                <div style="grid-column: span 12; display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
                    <a href="insights.php?type=conflict" class="feature-card animate-fade-up delay-2" style="padding: 1.5rem; border-radius: 20px; background: white; border: 1px solid var(--border); text-decoration: none; color: inherit; display: block; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.05)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <div class="feature-icon" style="width: 40px; height: 40px; margin-bottom: 1rem; color: var(--primary);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Conflict Resolver</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Balancing clinical priority vs. patient wait times.</p>
                    </a>
                    <a href="insights.php?type=fatigue_opt" class="feature-card animate-fade-up delay-3" style="padding: 1.5rem; border-radius: 20px; background: white; border: 1px solid var(--border); text-decoration: none; color: inherit; display: block; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.05)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <div class="feature-icon" style="width: 40px; height: 40px; margin-bottom: 1rem; color: var(--secondary);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        </div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Fatigue Optimizer</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Real-time tracking with workload scoring.</p>
                    </a>
                    <a href="insights.php?type=forecast" class="feature-card animate-fade-up delay-4" style="padding: 1.5rem; border-radius: 20px; background: white; border: 1px solid var(--border); text-decoration: none; color: inherit; display: block; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.05)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <div class="feature-icon" style="width: 40px; height: 40px; margin-bottom: 1rem; color: var(--accent);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Wait-Time Forecaster</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Predictive modeling for incoming emergencies.</p>
                    </a>
                </div>

            </div>
        </main>
    </div>

    <!-- Modal Elements -->
    <div class="modal-overlay" id="modal-overlay" onclick="system.hideDetails()"></div>
    <div class="stat-details-modal" id="details-modal">
        <h3 id="modal-title" style="margin-bottom: 1rem; color: var(--primary);">Stat Details</h3>
        <p id="modal-content" style="color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;"></p>
        <button onclick="system.hideDetails()" style="width: 100%; padding: 0.75rem; border-radius: 12px; background: var(--primary); color: white; border: none; font-weight: 600; cursor: pointer;">Close Details</button>
    </div>

    <script src="app.js"></script>
    <script>
        // Export instance for global access to the modal functions
        window.system = new HealthCareCenterSystem();
    </script>
</body>
</html>
