<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Health Care Center</title>
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
                <h2>Welcome Back</h2>
                <p>Sign in to access your dashboard</p>
            </div>

            <div id="auth-message" style="display: none; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; font-weight: 600; text-align: center; font-size: 0.9rem;"></div>

            <form id="signin-form" class="auth-form" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="doctor@healthcare.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="••••••••" required>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.5rem;">
                    <label style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-muted); font-size: 0.85rem; font-weight: 400; cursor: pointer; margin: 0;">
                        <input type="checkbox" onclick="togglePasswordVisibility('password', this)" style="width: auto; padding: 0; margin: 0;">
                        Show Password
                    </label>
                    <a href="forgot.php" style="color: var(--text-muted); font-size: 0.85rem; text-decoration: none;">Forgot Password?</a>
                </div>
                <button type="submit">Sign In</button>
            </form>

            <div class="auth-footer">
                Don't have an account? <a href="signup.php">Create one</a>
            </div>
            <div style="text-align: center; margin-top: 1rem;">
                <a href="index.php" style="color: #64748b; font-size: 0.85rem; text-decoration: none; font-weight: 600;">&larr; Back to Home</a>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(inputId, checkbox) {
            const input = document.getElementById(inputId);
            if (checkbox.checked) {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }

        function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const messageDiv = document.getElementById('auth-message');
            const btn = document.querySelector('button[type="submit"]');
            
            btn.innerHTML = 'Signing in...';
            btn.disabled = true;
            btn.style.opacity = '0.7';

            // Simulate network request delay
            setTimeout(() => {
                // Success for all prototype logins
                messageDiv.style.display = 'block';
                messageDiv.style.background = 'rgba(20, 184, 166, 0.1)';
                messageDiv.style.color = 'var(--primary-dark)';
                messageDiv.style.border = '1px solid rgba(20, 184, 166, 0.2)';
                messageDiv.innerHTML = 'Sign in successful! Redirecting...';
                
                // Save login info for the admin details page
                localStorage.setItem('admin_email', email);
                localStorage.setItem('admin_name', email.split('@')[0]); // Simple name derivation

                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 1000);
            }, 800);
        }
    </script>
</body>
</html>
