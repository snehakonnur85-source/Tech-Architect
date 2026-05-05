<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Patient Queue | Health Care Center</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding: 2rem;">
        <header style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <div class="logo-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">Live Queue</span>
            </div>
            <a href="dashboard.php" style="text-decoration: none; color: var(--text-muted); font-weight: 600;">&larr; Back to Dashboard</a>
        </header>

        <section class="queue-section card glass" style="max-width: 1000px; margin: 0 auto; padding: 2rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <div>
                    <h2 style="font-size: 2rem; font-weight: 800; color: var(--text-main);">Live Patient Monitor</h2>
                    <p style="color: var(--text-muted); font-weight: 600;">Real-time queue tracking and priority management</p>
                </div>
                <div style="display: flex; gap: 1rem;">
                    <div style="padding: 1rem 1.5rem; background: rgba(0,0,0,0.02); border-radius: 16px; border: 1px solid var(--border); text-align: center;">
                        <div style="font-size: 0.75rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase;">In Queue</div>
                        <div style="font-size: 1.5rem; font-weight: 800; color: var(--primary);">
                             <?php 
                                echo isset($_SESSION['bookings']) ? count($_SESSION['bookings']) : 0; 
                            ?>
                        </div>
                    </div>
                    <a href="queue.php?optimize=true" style="padding: 0.75rem 1.5rem; border-radius: 12px; background: var(--secondary); color: white; border: none; font-weight: 700; cursor: pointer; text-decoration: none;">Optimize Flow</a>
                </div>
            </div>

            <?php if (isset($_GET['optimize'])): ?>
                <div style="margin-bottom: 2.5rem; padding: 2rem; border-radius: 24px; background: #f0f9ff; border: 1px solid #bae6fd; animation: slideIn 0.3s ease;">
                    <h3 style="color: #0369a1; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        Flow Optimization Protocol Active
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
                        <div style="padding: 1.25rem; background: white; border-radius: 16px; border: 1px solid #bae6fd;">
                            <div style="font-size: 0.75rem; color: #0369a1; font-weight: 700; text-transform: uppercase;">Est. Wait Reduction</div>
                            <div style="font-size: 1.5rem; font-weight: 800; color: #0369a1;">-18%</div>
                        </div>
                        <div style="padding: 1.25rem; background: white; border-radius: 16px; border: 1px solid #bae6fd;">
                            <div style="font-size: 0.75rem; color: #0369a1; font-weight: 700; text-transform: uppercase;">Reallocated Tokens</div>
                            <div style="font-size: 1.5rem; font-weight: 800; color: #0369a1;">5 Patients</div>
                        </div>
                        <div style="padding: 1.25rem; background: white; border-radius: 16px; border: 1px solid #bae6fd;">
                            <div style="font-size: 0.75rem; color: #0369a1; font-weight: 700; text-transform: uppercase;">Throughput Index</div>
                            <div style="font-size: 1.5rem; font-weight: 800; color: #0369a1;">High</div>
                        </div>
                        <div style="grid-column: span 3; font-size: 0.95rem; color: #0369a1; line-height: 1.6; border-top: 1px solid #bae6fd; pt: 1rem; mt: 0.5rem;">
                            <strong>Strategy:</strong> Diverting non-urgent cases from the Emergency Wing to the General Med overflow unit. Priority tokens (TK-804) are being fast-tracked for immediate trauma assessment.
                        </div>
                    </div>
                </div>
                <style>
                    @keyframes slideIn { from { transform: translateY(-10px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
                </style>
            <?php endif; ?>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; min-width: 800px;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Token</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Patient Name</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Doctor</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Priority</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Est. Wait</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if (!isset($_SESSION['bookings'])) {
                                $_SESSION['bookings'] = [];
                            }

                            // Dynamic Injection: If a booking was just made
                            if (isset($_GET['booked']) && isset($_GET['name'])) {
                                $newPatient = [
                                    'tk' => 'TK-' . rand(806, 999),
                                    'name' => htmlspecialchars($_GET['name']),
                                    'doc' => htmlspecialchars($_GET['selected_doctor'] ?? 'Unassigned'),
                                    'prio' => $_GET['prio'] == '4' ? 'Emergency' : ($_GET['prio'] == '3' ? 'Urgent' : 'Routine'),
                                    'wait' => 'Calculating...',
                                    'status' => 'Confirmed',
                                    'color' => '#10b981',
                                    'is_new' => true
                                ];
                                array_unshift($_SESSION['bookings'], $newPatient);
                            }

                            $displayQueue = $_SESSION['bookings'];
                            
                            if (empty($displayQueue)):
                        ?>
                        <tr>
                            <td colspan="6" style="padding: 3rem; text-align: center; color: var(--text-muted); font-weight: 600;">No active bookings in the queue. Start booking to see patients here.</td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($displayQueue as $p): ?>
                        <tr style="border-bottom: 1px solid var(--border); transition: background 0.2s; <?php echo isset($p['is_new']) ? 'background: #f0fdf4;' : ''; ?>" onmouseover="this.style.background='rgba(0,0,0,0.01)'" onmouseout="this.style.background='<?php echo isset($p['is_new']) ? '#f0fdf4' : 'transparent'; ?>'">
                            <td style="padding: 1.2rem 1rem; font-weight: 800; color: var(--text-muted);"><?php echo $p['tk']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 700; color: var(--text-main);"><?php echo $p['name']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600;"><?php echo $p['doc']; ?></td>
                            <td style="padding: 1rem;"><span style="color: <?php echo $p['prio'] === 'Emergency' ? '#ef4444' : ($p['prio'] === 'Urgent' ? '#f59e0b' : '#64748b'); ?>; font-weight: 800; font-size: 0.8rem;"><?php echo $p['prio']; ?></span></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600; color: var(--secondary);"><?php echo $p['wait']; ?></td>
                            <td style="padding: 1.2rem 1rem;"><span style="display: inline-block; padding: 0.25rem 0.75rem; border-radius: 100px; background: <?php echo $p['color']; ?>15; color: <?php echo $p['color']; ?>; font-weight: 700; font-size: 0.75rem;"><?php echo $p['status']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script src="app.js"></script>
    <script>
        window.system = new HealthCareCenterSystem();
    </script>
</body>
</html>
