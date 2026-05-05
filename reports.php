<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Reports | Health Care Center</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding: 2rem;">
        <header style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <div class="logo-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">Reports</span>
            </div>
            <a href="dashboard.php" style="text-decoration: none; color: var(--text-muted); font-weight: 600;">&larr; Back to Dashboard</a>
        </header>

        <section class="reports-section card glass" style="max-width: 1100px; margin: 0 auto; padding: 2rem;">
            <?php if (isset($_GET['exported'])): ?>
                <div style="margin-bottom: 2rem; padding: 1.5rem; background: #ecfdf5; border: 1px solid #10b981; border-radius: 20px; color: #065f46; display: flex; align-items: center; gap: 1rem; animation: slideIn 0.3s ease;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <div>
                        <div style="font-weight: 800; font-size: 1.1rem;">PDF Report Generated!</div>
                        <div style="font-size: 0.9rem; opacity: 0.9;">The operational analytics report has been successfully exported.</div>
                    </div>
                </div>
                <style>
                    @keyframes slideIn { from { transform: translateY(-10px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
                </style>
            <?php endif; ?>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2.5rem;">
                <div>
                    <h2 style="font-size: 2rem; font-weight: 800; color: var(--text-main);">Operational Analytics</h2>
                    <p style="color: var(--text-muted); font-weight: 600;">System performance and patient outcome metrics</p>
                </div>
                <div style="display: flex; gap: 1rem;">
                    <a href="reports.php?exported=true" style="padding: 0.75rem 1.5rem; border-radius: 12px; background: var(--secondary); color: white; border: none; font-weight: 700; cursor: pointer; text-decoration: none;">Export PDF</a>
                </div>
            </div>

            <!-- Metric Cards -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-bottom: 3rem;">
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: rgba(0,0,0,0.01); text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase; margin-bottom: 0.5rem;">Patient Volume</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary);">1,284</div>
                    <div style="font-size: 0.8rem; color: #10b981; font-weight: 700; margin-top: 0.5rem;">+12% vs LW</div>
                </div>
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: rgba(0,0,0,0.01); text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase; margin-bottom: 0.5rem;">Avg. Efficiency</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: var(--secondary);">92.4%</div>
                    <div style="font-size: 0.8rem; color: #10b981; font-weight: 700; margin-top: 0.5rem;">+2.1% improvement</div>
                </div>
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: rgba(0,0,0,0.01); text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase; margin-bottom: 0.5rem;">Wait Time Avg</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: var(--accent);">14m</div>
                    <div style="font-size: 0.8rem; color: #ef4444; font-weight: 700; margin-top: 0.5rem;">+3m drift</div>
                </div>
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: rgba(0,0,0,0.01); text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase; margin-bottom: 0.5rem;">Rescued Revenue</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary-light);">₹42K</div>
                    <div style="font-size: 0.8rem; color: #10b981; font-weight: 700; margin-top: 0.5rem;">Target Met</div>
                </div>
            </div>

            <!-- Detailed Table -->
            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem;">
                <h3 style="margin-bottom: 2rem; color: var(--text-main);">Clinical Outcome Summary</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Reporting Period</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Total Cases</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Success Rate</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Resource Load</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 700;">May 01 - May 07</td>
                            <td style="padding: 1.2rem 1rem;">420</td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600; color: #10b981;">98.2%</td>
                            <td style="padding: 1.2rem 1rem;">Heavy</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #10b981; font-weight: 700;">Completed</span></td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 700;">Apr 24 - Apr 30</td>
                            <td style="padding: 1.2rem 1rem;">385</td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600; color: #10b981;">97.5%</td>
                            <td style="padding: 1.2rem 1rem;">Optimal</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #10b981; font-weight: 700;">Completed</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 1.2rem 1rem; font-weight: 700;">Apr 17 - Apr 23</td>
                            <td style="padding: 1.2rem 1rem;">412</td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600; color: #ef4444;">94.1%</td>
                            <td style="padding: 1.2rem 1rem;">Critical</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #10b981; font-weight: 700;">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>
