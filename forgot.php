<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Health Care Center</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="logo-container" style="justify-content: center; margin-bottom: 2rem; background: transparent; border: none; padding: 0;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text" style="font-size: 1.75rem;">Health Care Center</span>
            </div>
            
            <div class="auth-header">
                <h2>Account Recovery</h2>
                <p>Enter your email to receive a reset link</p>
            </div>

            <div id="auth-message" style="display: none; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; font-weight: 600; text-align: center; font-size: 0.9rem;"></div>

            <form id="forgot-form" class="auth-form" onsubmit="handleForgot(event)">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="doctor@healthcare.com" required>
                </div>
                <button type="submit">Send Recovery Link</button>
            </form>

            <div class="auth-footer">
                Remember your password? <a href="signin.php">Sign In</a>
            </div>
            <div style="text-align: center; margin-top: 1rem;">
                <a href="index.php" style="color: #64748b; font-size: 0.85rem; text-decoration: none; font-weight: 600;">&larr; Back to Home</a>
            </div>
        </div>
    </div>
    <script>
        function handleForgot(event) {
            event.preventDefault();
            const btn = document.querySelector('button[type="submit"]');
            const messageDiv = document.getElementById('auth-message');
            
            btn.innerHTML = 'Sending link...';
            btn.disabled = true;
            btn.style.opacity = '0.7';

            setTimeout(() => {
                messageDiv.style.display = 'block';
                messageDiv.style.background = 'rgba(14, 165, 233, 0.1)';
                messageDiv.style.color = 'var(--secondary)';
                messageDiv.style.border = '1px solid rgba(14, 165, 233, 0.2)';
                messageDiv.innerHTML = 'Check your inbox! A reset link has been sent.';
                
                btn.innerHTML = 'Link Sent';
            }, 1200);
        }
    </script>
</body>
</html>
