<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Insights | Health Care Center</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding: 4rem; max-width: 800px; margin: 0 auto;">
        <header style="margin-bottom: 3rem; display: flex; justify-content: space-between; align-items: center;">
            <div class="logo-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">System Insights</span>
            </div>
            <button onclick="window.location.href='dashboard.php'" style="background: none; border: 1px solid var(--border); padding: 0.5rem 1rem; border-radius: 12px; cursor: pointer; color: var(--text-muted); font-weight: 600;">Back to Dashboard</button>
        </header>

        <?php
            $type = $_GET['type'] ?? 'load';
            $details = [
                'load' => [
                    'title' => 'System Load',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--primary)'
                ],
                'wait' => [
                    'title' => 'Wait Time Prediction',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--secondary)'
                ],
                'fatigue' => [
                    'title' => 'Fatigue Index Report',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--accent)'
                ],
                'rescued' => [
                    'title' => 'Conflict Resolution Summary',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--primary-light)'
                ],
                'conflict' => [
                    'title' => 'Conflict Resolver',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--primary)'
                ],
                'fatigue_opt' => [
                    'title' => 'Fatigue Optimizer',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--secondary)'
                ],
                'forecast' => [
                    'title' => 'Wait-Time Forecaster',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--accent)'
                ],
                'admin' => [
                    'title' => 'Administrative Control Panel',
                    'subtitle' => 'Global System Configuration & Permissions',
                    'content' => '',
                    'color' => 'var(--primary-dark)'
                ],
                'manage_doctors' => [
                    'title' => 'Doctor Management Details',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--primary)'
                ],
                'manage_users' => [
                    'title' => 'User & Staff Management',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--secondary)'
                ],
                'manage_alerts' => [
                    'title' => 'System Alerts Configuration',
                    'subtitle' => '',
                    'content' => '',
                    'color' => 'var(--danger)'
                ]
            ];

            $data = $details[$type] ?? $details['load'];
        ?>

        <div class="insight-card" style="background: white; padding: 3rem; border-radius: 32px; border: 1px solid var(--border); box-shadow: 0 20px 40px rgba(0,0,0,0.05);">
            <?php if ($type !== 'admin'): ?>
            <h1 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 0.5rem; color: var(--text-main);"><?php echo $data['title']; ?></h1>
            <p style="font-size: 1.1rem; color: var(--text-muted); margin-bottom: 2rem; font-weight: 600;"><?php echo $data['subtitle']; ?></p>
            
            <div style="height: 4px; width: 60px; background: <?php echo $data['color']; ?>; border-radius: 2px; margin-bottom: 2.5rem;"></div>
            <?php endif; ?>
            
            <?php if (!empty($data['content'])): ?>
            <p style="font-size: 1.1rem; color: var(--text-main); line-height: 1.8; margin-bottom: 3rem;">
                <?php echo $data['content']; ?>
            </p>
            <?php endif; ?>

            <?php if ($type === 'load'): ?>
            <!-- System Load Dashboard -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 2.5rem;">
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Total Appts Today</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary);">142</div>
                </div>
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Active Doctors</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary);">12</div>
                </div>
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Load Status</div>
                    <div style="font-size: 1.75rem; font-weight: 800; color: #f59e0b;">MEDIUM</div>
                </div>
            </div>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2rem;">
                <h3 style="margin-bottom: 1.5rem;">Capacity Details</h3>
                <div style="display: flex; flex-direction: column; gap: 2.5rem;">
                    <div>
                        <h4 style="font-size: 1rem; margin-bottom: 1.5rem; color: var(--text-main);">Appointments per Doctor</h4>
                        <div style="display: flex; flex-direction: column; gap: 1rem;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.95rem;"><span>Primary Care</span><strong>18/20</strong></div>
                            <div style="width: 100%; height: 10px; background: rgba(0,0,0,0.05); border-radius: 5px;"><div style="width: 90%; height: 100%; background: var(--primary); border-radius: 5px;"></div></div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.95rem; margin-top: 0.5rem;"><span>Specialists</span><strong>12/15</strong></div>
                            <div style="width: 100%; height: 10px; background: rgba(0,0,0,0.05); border-radius: 5px;"><div style="width: 80%; height: 100%; background: var(--secondary); border-radius: 5px;"></div></div>
                        </div>
                    </div>
                    
                    <div style="border-top: 1px solid var(--border); padding-top: 2rem;">
                        <h4 style="font-size: 1rem; margin-bottom: 1.5rem; color: var(--text-main);">Time-slot Utilization</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                            <div style="padding: 1.5rem; border-radius: 16px; background: #f0fdf4; border: 1px solid #ccfbf1; display: flex; flex-direction: column; gap: 0.5rem;">
                                <span style="font-weight: 600; color: var(--primary-dark); font-size: 0.85rem;">MORNING (08:00 - 12:00)</span>
                                <span style="font-weight: 800; color: var(--primary-dark); font-size: 1.75rem;">94%</span>
                            </div>
                            <div style="padding: 1.5rem; border-radius: 16px; background: #fffbeb; border: 1px solid #fef3c7; display: flex; flex-direction: column; gap: 0.5rem;">
                                <span style="font-weight: 600; color: #92400e; font-size: 0.85rem;">AFTERNOON (13:00 - 17:00)</span>
                                <span style="font-weight: 800; color: #92400e; font-size: 1.75rem;">62%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                <a href="insights.php?type=load&action=limit" style="flex: 1; padding: 1rem; border-radius: 16px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Limit New Bookings</a>
                <a href="insights.php?type=load&action=redistribute" style="flex: 1; padding: 1rem; border-radius: 16px; background: var(--primary); border: none; color: white; font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Redistribute Patients</a>
            </div>

            <?php 
                $action = $_GET['action'] ?? '';
                if ($action === 'limit'):
            ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #fff1f2; border: 1px solid #fecaca;">
                    <h4 style="color: #e11d48; margin-bottom: 1rem;">Booking Limitation Report</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div>
                            <div style="font-size: 0.8rem; color: #991b1b; font-weight: 700; text-transform: uppercase;">Current Daily Cap</div>
                            <div style="font-size: 1.25rem; font-weight: 800; color: #e11d48;">150 Slots</div>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: #991b1b; font-weight: 700; text-transform: uppercase;">Emergency Reserve</div>
                            <div style="font-size: 1.25rem; font-weight: 800; color: #e11d48;">20 Slots</div>
                        </div>
                        <div style="grid-column: span 2; padding-top: 1rem; border-top: 1px solid #fecaca; font-size: 0.95rem; color: #991b1b;">
                            <strong>Note:</strong> Non-emergency bookings will be disabled for the next 4 hours to clear the current queue overflow.
                        </div>
                    </div>
                </div>
            <?php elseif ($action === 'redistribute'): ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #f0f9ff; border: 1px solid #bae6fd;">
                    <h4 style="color: #0369a1; margin-bottom: 1rem;">Patient Redistribution Logic</h4>
                    <table style="width: 100%; font-size: 0.9rem; color: #0369a1;">
                        <tr style="border-bottom: 1px solid #bae6fd;">
                            <td style="padding: 0.75rem 0;">Source Department</td>
                            <td style="padding: 0.75rem 0; text-align: right; font-weight: 700;">Cardiology (92% Load)</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #bae6fd;">
                            <td style="padding: 0.75rem 0;">Target Department</td>
                            <td style="padding: 0.75rem 0; text-align: right; font-weight: 700;">General Med (75% Load)</td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75rem 0;">Transfer Count</td>
                            <td style="padding: 0.75rem 0; text-align: right; font-weight: 700;">5 Patients Pending</td>
                        </tr>
                    </table>
                </div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if ($type === 'wait'): ?>
            <!-- Wait Time Prediction Dashboard -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2.5rem;">
                <div style="padding: 2rem; border-radius: 24px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Current Avg. Wait Time</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--secondary);">25m</div>
                </div>
                <div style="padding: 2rem; border-radius: 24px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Peak Wait Time</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--secondary);">42m</div>
                </div>
            </div>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2rem;">
                <h3 style="margin-bottom: 1.5rem;">Analysis Details</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem;">
                    <div>
                        <h4 style="font-size: 1rem; margin-bottom: 1rem; color: var(--text-main);">Wait Time per Doctor</h4>
                        <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem;"><span>Dr. Priya Patil</span><strong>12m</strong></div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem;"><span>Dr. Sindhu Reddy</span><strong>28m</strong></div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem;"><span>Dr. Sneha Reddy</span><strong>35m</strong></div>
                        </div>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; margin-bottom: 1rem; color: var(--text-main);">Wait Time per Dept</h4>
                        <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem;"><span>Cardiology</span><strong>15m</strong></div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem;"><span>Neurology</span><strong>32m</strong></div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem;"><span>General Med</span><strong>10m</strong></div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: rgba(0,0,0,0.02); padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
                <span style="font-weight: 600; color: var(--text-main);">Prediction Trend (Last 2 Hours)</span>
                <div style="display: flex; align-items: center; gap: 0.5rem; color: #10b981; font-weight: 800;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                    DECREASING (-12%)
                </div>
            </div>

            <div style="display: flex; gap: 1rem;">
                <a href="insights.php?type=wait&action=speed" style="flex: 1; padding: 1rem; border-radius: 16px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Speed up Queue</a>
                <a href="insights.php?type=wait&action=shift" style="flex: 1; padding: 1rem; border-radius: 16px; background: var(--secondary); border: none; color: white; font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Shift Patients</a>
            </div>

            <?php 
                $action = $_GET['action'] ?? '';
                if ($action === 'speed'):
            ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #f0fdf4; border: 1px solid #bbf7d0;">
                    <h4 style="color: #166534; margin-bottom: 1rem;">Queue Optimization Protocol</h4>
                    <p style="font-size: 0.95rem; color: #166534;">System is currently triggering "Rapid Throughput" mode. Buffer times between appointments reduced by 3 minutes. Primary focus: Clear Routine Checkups.</p>
                </div>
            <?php elseif ($action === 'shift'): ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #f0f9ff; border: 1px solid #bae6fd;">
                    <h4 style="color: #0369a1; margin-bottom: 1rem;">Patient Reallocation Plan</h4>
                    <p style="font-size: 0.95rem; color: #0369a1;">Moving 3 patients from <strong>Dr. Sneha Reddy</strong> (35m wait) to <strong>Dr. Priya Patil</strong> (12m wait). Expected equalization in 45 minutes.</p>
                </div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if ($type === 'fatigue'): ?>
            <!-- Fatigue Index Dashboard -->
            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; text-align: center; margin-bottom: 2.5rem;">
                <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Overall Fatigue Level</div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #10b981;">OPTIMAL (0.24)</div>
            </div>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2.5rem;">
                <h3 style="margin-bottom: 1.5rem;">Clinician Workload Table</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem;">Doctor Name</th>
                            <th style="padding: 1rem;">Appointments</th>
                            <th style="padding: 1rem;">Fatigue Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 600;">Dr. Priya Patil</td>
                            <td style="padding: 1.2rem 1rem;">14</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #10b981; font-weight: 700;">Low</span></td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 600;">Dr. Sindhu Reddy</td>
                            <td style="padding: 1.2rem 1rem;">18</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #f59e0b; font-weight: 700;">Medium</span></td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 600;">Dr. Sneha Reddy</td>
                            <td style="padding: 1.2rem 1rem;">22</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #ef4444; font-weight: 700;">High</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="background: #fff1f2; padding: 2rem; border-radius: 24px; border: 1px solid #fecaca; margin-bottom: 2.5rem;">
                <h4 style="color: #e11d48; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    Alerts: Overworked Doctors
                </h4>
                <p style="color: #991b1b; font-size: 0.95rem;"><strong>Dr. Sneha Reddy</strong> has exceeded the safe appointment limit for a single shift. Immediate intervention recommended.</p>
            </div>

            <div style="display: flex; gap: 1rem;">
                <a href="insights.php?type=fatigue&action=break" style="flex: 1; padding: 1rem; border-radius: 16px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Add Break</a>
                <a href="insights.php?type=fatigue&action=reduce" style="flex: 1; padding: 1rem; border-radius: 16px; background: var(--accent); border: none; color: white; font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Reduce Appointments</a>
            </div>

            <?php 
                $action = $_GET['action'] ?? '';
                if ($action === 'break'):
            ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #f0fdf4; border: 1px solid #bbf7d0;">
                    <h4 style="color: #166534; margin-bottom: 1rem;">Break Assignment Details</h4>
                    <p style="font-size: 0.95rem; color: #166534;">Assigned a mandatory 20-minute rest buffer for <strong>Dr. Sneha Reddy</strong> starting at 14:45. Subsequent appointments shifted by +20m.</p>
                </div>
            <?php elseif ($action === 'reduce'): ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #fef2f2; border: 1px solid #fee2e2;">
                    <h4 style="color: #991b1b; margin-bottom: 1rem;">Slot Reduction Plan</h4>
                    <p style="font-size: 0.95rem; color: #991b1b;">Limiting next-hour slots to 50% capacity for the Emergency Med department to allow staff recovery.</p>
                </div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if ($type === 'rescued'): ?>
            <!-- Conflict Resolution (Rescued Slots) Dashboard -->
            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; text-align: center; margin-bottom: 2.5rem;">
                <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Total Cancelled Slots Recovered</div>
                <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary-light);">128</div>
            </div>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2.5rem;">
                <h3 style="margin-bottom: 1.5rem;">Recovered Slots Details</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem;">Time Slot</th>
                            <th style="padding: 1rem;">Doctor</th>
                            <th style="padding: 1rem;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem;">10:30 AM</td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600;">Dr. Priya Patil</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #10b981; font-weight: 700;">Available</span></td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem;">11:15 AM</td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600;">Dr. Sindhu Reddy</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: var(--primary); font-weight: 700;">Assigned</span></td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem;">01:45 PM</td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600;">Dr. Nagamma M</td>
                            <td style="padding: 1.2rem 1rem;"><span style="color: #10b981; font-weight: 700;">Available</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="display: flex; gap: 1rem;">
                <a href="insights.php?type=rescued&action=assign" style="flex: 1; padding: 1rem; border-radius: 16px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Assign to Patients</a>
                <a href="insights.php?type=rescued&action=autofill" style="flex: 1; padding: 1rem; border-radius: 16px; background: var(--primary-light); border: none; color: white; font-weight: 700; cursor: pointer; text-decoration: none; text-align: center;">Auto-fill from Queue</a>
            </div>

            <?php 
                $action = $_GET['action'] ?? '';
                if ($action === 'assign'):
            ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #f0fdf4; border: 1px solid #bbf7d0;">
                    <h4 style="color: #166534; margin-bottom: 1rem;">Manual Assignment Terminal</h4>
                    <p style="font-size: 0.95rem; color: #166534;">Scanning live waiting room... Found 2 patients with matching clinical needs for the 10:30 AM slot. Please select a candidate in the main dashboard.</p>
                </div>
            <?php elseif ($action === 'autofill'): ?>
                <div style="margin-top: 2rem; padding: 2rem; border-radius: 24px; background: #f0f9ff; border: 1px solid #bae6fd;">
                    <h4 style="color: #0369a1; margin-bottom: 1rem;">Auto-fill Protocol Active</h4>
                    <p style="font-size: 0.95rem; color: #0369a1;">System is automatically re-routing the next 3 priority patients into recovered slots to reduce average wait time by an estimated 12%.</p>
                </div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if ($type === 'manage_doctors'): ?>
            <!-- Doctor Management Dashboard -->
            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; overflow-x: auto;">
                <h3 style="margin-bottom: 2rem; color: var(--text-main);">Practitioner Records & Scheduling</h3>
                <table style="width: 100%; border-collapse: collapse; min-width: 1000px;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">ID</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Doctor Name</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Specialty</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Phone</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Days</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Slots</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Max</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Fatigue</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $practitioners = [
                                ['id' => 'DR-001', 'name' => 'Dr. Priya Patil', 'spec' => 'Cardiology', 'phone' => '9806745321', 'days' => 'Mon-Fri', 'slots' => '9AM-1PM', 'max' => 20, 'fatigue' => '0.22', 'status' => 'Available', 'color' => '#10b981'],
                                ['id' => 'DR-002', 'name' => 'Dr. Sindhu Reddy', 'spec' => 'Neurology', 'phone' => '8643287645', 'days' => 'Tue-Sat', 'slots' => '2PM-6PM', 'max' => 15, 'fatigue' => '0.45', 'status' => 'Available', 'color' => '#10b981'],
                                ['id' => 'DR-003', 'name' => 'Dr. Sneha Reddy', 'spec' => 'Pediatrics', 'phone' => '9653426758', 'days' => 'Mon-Sat', 'slots' => '9AM-6PM', 'max' => 30, 'fatigue' => '0.68', 'status' => 'On Leave', 'color' => '#ef4444'],
                                ['id' => 'DR-004', 'name' => 'Dr. Nagamma M', 'spec' => 'Emergency', 'phone' => '8567342649', 'days' => 'Rotational', 'slots' => 'Mixed', 'max' => 25, 'fatigue' => '0.31', 'status' => 'Available', 'color' => '#10b981'],
                            ];
                            foreach ($practitioners as $p):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 700; color: var(--text-muted); font-size: 0.9rem;"><?php echo $p['id']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600; color: var(--text-main);"><?php echo $p['name']; ?></td>
                            <td style="padding: 1.2rem 1rem;"><?php echo $p['spec']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-size: 0.9rem;"><?php echo $p['phone']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-size: 0.9rem;"><?php echo $p['days']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-size: 0.85rem;"><?php echo $p['slots']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 700;"><?php echo $p['max']; ?></td>
                            <td style="padding: 1.2rem 1rem; font-weight: 600;"><?php echo $p['fatigue']; ?></td>
                            <td style="padding: 1.2rem 1rem;">
                                <span style="display: inline-block; padding: 0.25rem 0.75rem; border-radius: 100px; background: <?php echo $p['color']; ?>15; color: <?php echo $p['color']; ?>; font-weight: 700; font-size: 0.75rem;">
                                    <?php echo $p['status']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>

            <?php if ($type === 'manage_users'): ?>
            <!-- User Management Dashboard -->
            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2rem; overflow-x: auto;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                    <h3 style="color: var(--text-main);">System User Directory</h3>
                </div>
                <table style="width: 100%; border-collapse: collapse; min-width: 900px;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">User ID</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Name</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Role</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Username</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Password</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Contact</th>
                            <th style="padding: 1rem; font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $users = [
                                ['id' => 'USR-101', 'name' => 'Geetha', 'role' => 'Admin', 'uname' => 'geetha_admin', 'pass' => '********', 'contact' => '9876543210', 'status' => 'Active', 'color' => '#10b981'],
                                ['id' => 'USR-102', 'name' => 'Seetha', 'role' => 'Doctor', 'uname' => 'seetha_dr', 'pass' => '********', 'contact' => '9765432109', 'status' => 'Active', 'color' => '#10b981'],
                                ['id' => 'USR-103', 'name' => 'Pooja', 'role' => 'Staff', 'uname' => 'pooja_staff', 'pass' => '********', 'contact' => '9654321098', 'status' => 'Blocked', 'color' => '#ef4444'],
                            ];
                            foreach ($users as $u):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1rem; font-weight: 700; color: var(--text-muted);"><?php echo $u['id']; ?></td>
                            <td style="padding: 1rem; font-weight: 600;"><?php echo $u['name']; ?></td>
                            <td style="padding: 1rem;"><span style="padding: 0.25rem 0.5rem; border-radius: 6px; background: rgba(0,0,0,0.05); font-size: 0.8rem; font-weight: 700;"><?php echo $u['role']; ?></span></td>
                            <td style="padding: 1rem; color: var(--secondary); font-weight: 600;"><?php echo $u['uname']; ?></td>
                            <td style="padding: 1rem; font-family: monospace;"><?php echo $u['pass']; ?></td>
                            <td style="padding: 1rem;"><?php echo $u['contact']; ?></td>
                            <td style="padding: 1rem;"><span style="color: <?php echo $u['color']; ?>; font-weight: 700;"><?php echo $u['status']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>

            <?php if ($type === 'manage_alerts'): ?>
            <!-- System Alerts Dashboard -->
            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2rem; overflow-x: auto;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                    <h3 style="color: var(--text-main);">Active System Alerts & Broadcasts</h3>
                    <a href="insights.php?type=manage_alerts&sent=true" style="padding: 0.75rem 1.5rem; border-radius: 12px; background: var(--danger); color: white; border: none; font-weight: 700; cursor: pointer; text-decoration: none;">Send Notification</a>
                </div>

                <?php if (isset($_GET['sent'])): ?>
                    <div style="padding: 1rem 1.5rem; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; color: #166534; font-weight: 600; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Notification has been successfully broadcasted to all selected receivers.
                    </div>
                <?php endif; ?>

                <table style="width: 100%; border-collapse: collapse; min-width: 1000px;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">ID</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Type</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Category</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Message</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Receiver</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Date & Time</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Priority</th>
                            <th style="padding: 1rem; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $alerts = [
                                ['id' => 'AL-501', 'type' => 'Alert', 'cat' => 'Overload', 'msg' => 'System load exceeded 90%', 'rec' => 'Admin', 'time' => '10:45 AM', 'prio' => 'High', 'status' => 'Active', 'color' => '#ef4444'],
                                ['id' => 'NT-502', 'type' => 'Notif', 'cat' => 'Update', 'msg' => 'New clinician onboarded', 'rec' => 'Doctor', 'time' => '11:20 AM', 'prio' => 'Low', 'status' => 'Read', 'color' => '#64748b'],
                                ['id' => 'AL-503', 'type' => 'Alert', 'cat' => 'Conflict', 'msg' => 'Double booking in Cardiology', 'rec' => 'Admin', 'time' => '12:05 PM', 'prio' => 'Medium', 'status' => 'Resolved', 'color' => '#10b981'],
                            ];
                            foreach ($alerts as $a):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1rem; font-weight: 700; color: var(--text-muted);"><?php echo $a['id']; ?></td>
                            <td style="padding: 1rem;"><span style="padding: 0.25rem 0.5rem; border-radius: 6px; background: rgba(0,0,0,0.05); font-size: 0.75rem; font-weight: 700;"><?php echo $a['type']; ?></span></td>
                            <td style="padding: 1rem; font-weight: 600;"><?php echo $a['cat']; ?></td>
                            <td style="padding: 1rem; max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $a['msg']; ?></td>
                            <td style="padding: 1rem; font-size: 0.9rem;"><?php echo $a['rec']; ?></td>
                            <td style="padding: 1rem; font-size: 0.9rem;"><?php echo $a['time']; ?></td>
                            <td style="padding: 1rem;"><span style="color: <?php echo $a['prio'] === 'High' ? '#ef4444' : ($a['prio'] === 'Medium' ? '#f59e0b' : '#64748b'); ?>; font-weight: 800; font-size: 0.8rem;"><?php echo $a['prio']; ?></span></td>
                            <td style="padding: 1rem;"><span style="color: <?php echo $a['color']; ?>; font-weight: 700;"><?php echo $a['status']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>

            <?php if ($type === 'conflict'): ?>
            <!-- Conflict Resolver Navigation -->
            <nav style="display: flex; gap: 1rem; margin-bottom: 2.5rem; padding: 0.5rem; background: rgba(0,0,0,0.02); border-radius: 16px; border: 1px solid var(--border);">
                <a href="insights.php?type=conflict&sub=total" style="flex: 1; text-align: center; padding: 1rem; border-radius: 12px; text-decoration: none; font-weight: 700; color: <?php echo ($_GET['sub'] ?? 'total') === 'total' ? 'white' : 'var(--text-muted)'; ?>; background: <?php echo ($_GET['sub'] ?? 'total') === 'total' ? 'var(--primary)' : 'transparent'; ?>;">Total Conflict</a>
                <a href="insights.php?type=conflict&sub=high" style="flex: 1; text-align: center; padding: 1rem; border-radius: 12px; text-decoration: none; font-weight: 700; color: <?php echo ($_GET['sub'] ?? '') === 'high' ? 'white' : 'var(--text-muted)'; ?>; background: <?php echo ($_GET['sub'] ?? '') === 'high' ? 'var(--primary)' : 'transparent'; ?>;">High Priority</a>
                <a href="insights.php?type=conflict&sub=status" style="flex: 1; text-align: center; padding: 1rem; border-radius: 12px; text-decoration: none; font-weight: 700; color: <?php echo ($_GET['sub'] ?? '') === 'status' ? 'white' : 'var(--text-muted)'; ?>; background: <?php echo ($_GET['sub'] ?? '') === 'status' ? 'var(--primary)' : 'transparent'; ?>;">System Status</a>
            </nav>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem;">
                <?php 
                    $sub = $_GET['sub'] ?? 'total';
                    if ($sub === 'total'): 
                ?>
                    <h3 style="margin-bottom: 1.5rem;">Total Conflict Log (Last 24h)</h3>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                                <th style="padding: 1rem;">ID</th>
                                <th style="padding: 1rem;">Time</th>
                                <th style="padding: 1rem;">Conflict Type</th>
                                <th style="padding: 1rem;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid var(--border);">
                                <td style="padding: 1rem;">#C-1024</td>
                                <td style="padding: 1rem;">10:45 AM</td>
                                <td style="padding: 1rem;">Double Booking</td>
                                <td style="padding: 1rem;"><span style="color: var(--primary); font-weight: 600;">Rescheduled</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid var(--border);">
                                <td style="padding: 1rem;">#C-1025</td>
                                <td style="padding: 1rem;">11:15 AM</td>
                                <td style="padding: 1rem;">Over-Capacity</td>
                                <td style="padding: 1rem;"><span style="color: var(--primary); font-weight: 600;">Shift Extended</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem;">#C-1026</td>
                                <td style="padding: 1rem;">12:30 PM</td>
                                <td style="padding: 1rem;">Specialty Lock</td>
                                <td style="padding: 1rem;"><span style="color: var(--primary); font-weight: 600;">Reassigned</span></td>
                            </tr>
                        </tbody>
                    </table>
                <?php elseif ($sub === 'high'): ?>
                    <h3 style="margin-bottom: 1.5rem;">High Priority Cases (Awaiting Action)</h3>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="padding: 1.5rem; border-radius: 16px; background: #fff1f2; border: 1px solid #fecaca;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                                <strong style="color: #e11d48;">CRITICAL: Emergency Trauma</strong>
                                <span style="font-size: 0.8rem; font-weight: 800; background: #e11d48; color: white; padding: 0.25rem 0.75rem; border-radius: 100px;">TIER 1</span>
                            </div>
                            <p style="font-size: 0.9rem; color: #991b1b;">Patient incoming. Requires immediate slot pre-emption in Room 402.</p>
                        </div>
                        <div style="padding: 1.5rem; border-radius: 16px; background: #fffbeb; border: 1px solid #fef3c7;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                                <strong style="color: #d97706;">URGENT: Elderly Post-Op</strong>
                                <span style="font-size: 0.8rem; font-weight: 800; background: #d97706; color: white; padding: 0.25rem 0.75rem; border-radius: 100px;">TIER 2</span>
                            </div>
                            <p style="font-size: 0.9rem; color: #92400e;">Wait time exceeded 15m. Triggering "Priority Buffer" logic.</p>
                        </div>
                    </div>
                <?php elseif ($sub === 'status'): ?>
                    <h3 style="margin-bottom: 1.5rem;">Conflict Resolver Engine Status</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div style="padding: 1.5rem; border-radius: 16px; border: 1px solid var(--border); text-align: center;">
                            <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem;">ENGINE LOAD</div>
                            <div style="font-size: 2rem; font-weight: 800; color: var(--primary);">2.4%</div>
                        </div>
                        <div style="padding: 1.5rem; border-radius: 16px; border: 1px solid var(--border); text-align: center;">
                            <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem;">UPTIME</div>
                            <div style="font-size: 2rem; font-weight: 800; color: var(--primary);">99.9%</div>
                        </div>
                        <div style="grid-column: span 2; padding: 1.5rem; border-radius: 16px; border: 1px solid var(--border); display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 12px; height: 12px; border-radius: 50%; background: #10b981; box-shadow: 0 0 10px #10b981;"></div>
                            <span style="font-weight: 600;">Primary Resolver Node: Operational</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($type === 'fatigue_opt'): ?>
            <!-- Fatigue Optimizer Dashboard -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2.5rem;">
                <div style="padding: 2rem; border-radius: 24px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Doctor Workload Today</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--secondary);">74.2%</div>
                </div>
                <div style="padding: 2rem; border-radius: 24px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Global Fatigue Index</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: #10b981;">LOW</div>
                </div>
            </div>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem;">
                <h3 style="margin-bottom: 1.5rem;">Clinical Performance & Fatigue Monitoring</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem;">Doctor Name</th>
                            <th style="padding: 1rem;">Appointments</th>
                            <th style="padding: 1rem;">Work Hours</th>
                            <th style="padding: 1rem;">Fatigue Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $doctors = [
                                ['name' => 'Dr. Priya Patil', 'apps' => 14, 'hours' => '6.5h', 'level' => 'Optimal', 'color' => '#10b981'],
                                ['name' => 'Dr. Sindhu Reddy', 'apps' => 18, 'hours' => '8.0h', 'level' => 'Moderate', 'color' => '#f59e0b'],
                                ['name' => 'Dr. Sneha Reddy', 'apps' => 22, 'hours' => '9.5h', 'level' => 'High', 'color' => '#ef4444'],
                                ['name' => 'Dr. Nagamma M', 'apps' => 12, 'hours' => '5.0h', 'level' => 'Optimal', 'color' => '#10b981'],
                            ];
                            foreach ($doctors as $doc):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 600;"><?php echo $doc['name']; ?></td>
                            <td style="padding: 1.2rem 1rem;"><?php echo $doc['apps']; ?></td>
                            <td style="padding: 1.2rem 1rem;"><?php echo $doc['hours']; ?></td>
                            <td style="padding: 1.2rem 1rem;">
                                <span style="display: inline-block; padding: 0.25rem 0.75rem; border-radius: 100px; background: <?php echo $doc['color']; ?>15; color: <?php echo $doc['color']; ?>; font-weight: 700; font-size: 0.8rem;">
                                    <?php echo $doc['level']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>

            <?php if ($type === 'forecast'): ?>
            <!-- Wait-Time Forecaster Dashboard -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2.5rem;">
                <div style="padding: 2rem; border-radius: 24px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Current Avg. Wait Time</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--accent);">14m</div>
                </div>
                <div style="padding: 2rem; border-radius: 24px; border: 1px solid var(--border); background: white; text-align: center;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase;">Total Patients in Queue</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--accent);">28</div>
                </div>
            </div>

            <div style="background: white; border-radius: 24px; border: 1px solid var(--border); padding: 2rem; margin-bottom: 2.5rem;">
                <h3 style="margin-bottom: 1.5rem;">Live Predictive Queue</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid var(--border);">
                            <th style="padding: 1rem;">Patient Name</th>
                            <th style="padding: 1rem;">Token #</th>
                            <th style="padding: 1rem;">Est. Wait</th>
                            <th style="padding: 1rem;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $queue = [
                                ['name' => 'Adhiti', 'token' => 'TK-402', 'wait' => '2m', 'status' => 'Next'],
                                ['name' => 'Rahul', 'token' => 'TK-403', 'wait' => '8m', 'status' => 'Waiting'],
                                ['name' => 'Anjaly', 'token' => 'TK-404', 'wait' => '15m', 'status' => 'Waiting'],
                                ['name' => 'Amit', 'token' => 'TK-405', 'wait' => '22m', 'status' => 'Waiting'],
                            ];
                            foreach ($queue as $p):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem 1rem; font-weight: 600;"><?php echo $p['name']; ?></td>
                            <td style="padding: 1.2rem 1rem; color: var(--text-muted); font-weight: 700;"><?php echo $p['token']; ?></td>
                            <td style="padding: 1.2rem 1rem;"><?php echo $p['wait']; ?></td>
                            <td style="padding: 1.2rem 1rem;">
                                <span style="display: inline-block; padding: 0.25rem 0.75rem; border-radius: 100px; background: rgba(0,0,0,0.05); color: var(--text-muted); font-weight: 700; font-size: 0.8rem;">
                                    <?php echo $p['status']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div style="background: #fffbeb; padding: 2rem; border-radius: 24px; border: 1px solid #fef3c7;">
                <h4 style="margin-bottom: 1rem; color: #92400e; display: flex; align-items: center; gap: 0.5rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    Active Delay Alerts
                </h4>
                <ul style="margin: 0; padding-left: 1.5rem; color: #92400e; line-height: 1.6;">
                    <li>Heavy traffic in Cardiology wing. Expected +5m drift.</li>
                    <li>System syncing: Live updates active (Interval: 15s).</li>
                </ul>
            </div>
            <?php endif; ?>

            <?php if ($type === 'admin'): ?>
            <div style="background: rgba(0,0,0,0.02); padding: 2rem; border-radius: 24px; border: 1px solid var(--border); margin-bottom: 2rem;">
                <h4 style="margin-bottom: 1.5rem; color: var(--text-main); font-size: 1.2rem;">Active Administrator Details</h4>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                    <div>
                        <div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; font-weight: 700; margin-bottom: 0.25rem;">Admin Name</div>
                        <div id="display-admin-name" style="font-size: 1.1rem; font-weight: 600; color: var(--text-main);">Loading...</div>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; font-weight: 700; margin-bottom: 0.25rem;">Email Address</div>
                        <div id="display-admin-email" style="font-size: 1.1rem; font-weight: 600; color: var(--text-main);">Loading...</div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const name = localStorage.getItem('admin_name') || 'Administrator';
                    const email = localStorage.getItem('admin_email') || 'admin@healthcare.com';
                    document.getElementById('display-admin-name').textContent = name.charAt(0).toUpperCase() + name.slice(1);
                    document.getElementById('display-admin-email').textContent = email;
                });
            </script>

            <!-- Admin Modules -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; margin-top: 2rem;">
                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: #fdfdfd;">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(20, 184, 166, 0.1); display: flex; align-items: center; justify-content: center; color: var(--primary);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
                        </div>
                        <h5 style="margin: 0; font-size: 1.1rem; color: var(--text-main);">Doctor Management</h5>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem;">Manage clinician profiles, credentials, and access levels.</p>
                    <a href="insights.php?type=manage_doctors" style="display: block; width: 100%; padding: 0.75rem; border-radius: 10px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 600; cursor: pointer; text-decoration: none; text-align: center;">Manage Doctors</a>
                </div>

                <div style="padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: #fdfdfd;">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(14, 165, 233, 0.1); display: flex; align-items: center; justify-content: center; color: var(--secondary);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h5 style="margin: 0; font-size: 1.1rem; color: var(--text-main);">User Management</h5>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem;">Handle administrative staff permissions and system roles.</p>
                    <a href="insights.php?type=manage_users" style="display: block; width: 100%; padding: 0.75rem; border-radius: 10px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 600; cursor: pointer; text-decoration: none; text-align: center;">Manage Users</a>
                </div>

                <div style="grid-column: span 2; padding: 1.5rem; border-radius: 20px; border: 1px solid var(--border); background: #fdfdfd;">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(225, 29, 72, 0.1); display: flex; align-items: center; justify-content: center; color: var(--danger);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                        </div>
                        <h5 style="margin: 0; font-size: 1.1rem; color: var(--text-main);">System Alerts & Notification</h5>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem;">Configure emergency broadcast protocols and automated system alerts.</p>
                    <a href="insights.php?type=manage_alerts" style="display: block; width: 100%; padding: 0.75rem; border-radius: 10px; background: white; border: 1px solid var(--border); color: var(--text-main); font-weight: 600; cursor: pointer; text-decoration: none; text-align: center;">Configure Alerts</a>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>
