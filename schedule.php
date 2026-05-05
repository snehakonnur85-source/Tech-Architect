<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Schedule | Health Care Center</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding: 2rem;">
        <header style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <div class="logo-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">Schedule</span>
            </div>
            <a href="dashboard.php" style="text-decoration: none; color: var(--text-muted); font-weight: 600;">&larr; Back to Dashboard</a>
        </header>

        <section class="schedule-section card glass" style="max-width: 1000px; margin: 0 auto; padding: 2rem;">
            <?php if (isset($_GET['downloaded'])): ?>
                <div style="margin-bottom: 2rem; padding: 1.5rem; background: #ecfdf5; border: 1px solid #10b981; border-radius: 20px; color: #065f46; display: flex; align-items: center; gap: 1rem; animation: slideIn 0.3s ease;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <div>
                        <div style="font-weight: 800; font-size: 1.1rem;">Roster Downloaded!</div>
                        <div style="font-size: 0.9rem; opacity: 0.9;">The master schedule has been exported successfully.</div>
                    </div>
                </div>
                <style>
                    @keyframes slideIn { from { transform: translateY(-10px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
                </style>
            <?php endif; ?>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <div>
                    <h2 style="font-size: 2rem; font-weight: 800; color: var(--text-main);">Practitioner Shifts</h2>
                    <p style="color: var(--text-muted); font-weight: 600;">Master roster and clinician workload management</p>
                </div>
                <div style="display: flex; gap: 1rem;">
                    <a href="schedule.php?downloaded=true" style="padding: 0.75rem 1.5rem; border-radius: 12px; background: var(--primary); color: white; border: none; font-weight: 700; cursor: pointer; text-decoration: none;">Download Roster</a>
                </div>
            </div>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; min-width: 900px;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Doctor</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Department</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Shift Time</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Allocated Slots</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Utilization</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">On-Call</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $schedule = [
                                ['doc' => 'Dr. Priya Patil', 'dept' => 'Cardiology', 'shift' => '08:00 - 14:00', 'slots' => '18/20', 'util' => '90%', 'oncall' => 'Yes'],
                                ['doc' => 'Dr. Sindhu Reddy', 'dept' => 'Neurology', 'shift' => '09:00 - 17:00', 'slots' => '14/15', 'util' => '93%', 'oncall' => 'No'],
                                ['doc' => 'Dr. Sneha Reddy', 'dept' => 'Pediatrics', 'shift' => '10:00 - 18:00', 'slots' => '22/30', 'util' => '73%', 'oncall' => 'Yes'],
                                ['doc' => 'Dr. Nagamma M', 'dept' => 'Emergency', 'shift' => 'Rotational', 'slots' => '12/25', 'util' => '48%', 'oncall' => 'Standby'],
                            ];
                            foreach ($schedule as $s):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 700; color: var(--text-main);"><?php echo $s['doc']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600;"><?php echo $s['dept']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-family: monospace; font-size: 0.9rem;"><?php echo $s['shift']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 700;"><?php echo $s['slots']; ?></td>
                            <td style="padding: 1.2rem 1rem;">
                                <div style="display: flex; align-items: center; gap: 0.5rem;">
                                    <div style="flex: 1; height: 6px; background: rgba(0,0,0,0.05); border-radius: 3px; min-width: 60px;">
                                        <div style="width: <?php echo $s['util']; ?>; height: 100%; background: var(--primary); border-radius: 3px;"></div>
                                    </div>
                                    <span style="font-size: 0.8rem; font-weight: 800;"><?php echo $s['util']; ?></span>
                                </div>
                            </td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: <?php echo $s['oncall'] === 'Yes' ? '#10b981' : ($s['oncall'] === 'Standby' ? '#f59e0b' : '#64748b'); ?>; font-weight: 700;"><?php echo $s['oncall']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>
