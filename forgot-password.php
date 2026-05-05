<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Health Care Center</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="light-theme">
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="logo-container" style="justify-content: center; margin-bottom: 2rem; background: transparent; border: none; padding: 0;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text" style="font-size: 1.75rem;">Health Care Center</span>
            </div>
            
            <div class="auth-header">
                <h2>Reset Password</h2>
                <p>Enter your email to receive reset instructions</p>
            </div>

            <form action="signin.php" class="auth-form" onsubmit="event.preventDefault(); alert('Reset link sent to your email address!'); window.location.href='signin.php';">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="doctor@healthcare.com" required>
                </div>
                
                <button type="submit">Send Reset Link</button>
            </form>

            <div class="auth-footer">
                Remember your password? <a href="signin.php">Sign In</a>
            </div>
            <div style="text-align: center; margin-top: 1rem;">
                <a href="index.php" style="color: var(--text-muted); font-size: 0.85rem; text-decoration: none;">&larr; Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
