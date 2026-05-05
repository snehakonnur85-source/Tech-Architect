<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | Health Care Center</title>
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
                <h2>Join the Future</h2>
                <p>Register as a practitioner or administrator</p>
            </div>

            <div id="auth-message" style="display: none; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; font-weight: 600; text-align: center; font-size: 0.9rem;"></div>

            <form id="signup-form" class="auth-form" onsubmit="handleSignup(event)">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label>First Name</label>
                        <input type="text" placeholder="John" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Last Name</label>
                        <input type="text" placeholder="Doe" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="john.doe@healthcare.com" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="signup-password" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" id="confirm-password" placeholder="••••••••" required>
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: flex; align-items: center; gap: 0.5rem; color: #475569; font-size: 0.85rem; font-weight: 400; cursor: pointer; margin: 0;">
                        <input type="checkbox" onclick="togglePasswordVisibility(['signup-password', 'confirm-password'], this)" style="width: auto; padding: 0; margin: 0;">
                        Show Passwords
                    </label>
                </div>
                <button type="submit">Create Account</button>
            </form>

            <div class="auth-footer">
                Already have an account? <a href="signin.php">Sign In</a>
            </div>
            <div style="text-align: center; margin-top: 1rem;">
                <a href="index.php" style="color: #64748b; font-size: 0.85rem; text-decoration: none; font-weight: 600;">&larr; Back to Home</a>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(inputIds, checkbox) {
            const ids = Array.isArray(inputIds) ? inputIds : [inputIds];
            ids.forEach(id => {
                const input = document.getElementById(id);
                input.type = checkbox.checked ? 'text' : 'password';
            });
        }

        function handleSignup(event) {
            event.preventDefault();
            const pass = document.getElementById('signup-password').value;
            const confirm = document.getElementById('confirm-password').value;
            const messageDiv = document.getElementById('auth-message');

            if (pass !== confirm) {
                messageDiv.style.display = 'block';
                messageDiv.style.background = 'rgba(239, 68, 68, 0.1)';
                messageDiv.style.color = 'var(--danger)';
                messageDiv.style.border = '1px solid rgba(239, 68, 68, 0.2)';
                messageDiv.innerHTML = 'Passwords do not match. Please try again.';
                return;
            }

            const btn = document.querySelector('button[type="submit"]');
            
            btn.innerHTML = 'Creating account...';
            btn.disabled = true;
            btn.style.opacity = '0.7';

            setTimeout(() => {
                messageDiv.style.display = 'block';
                messageDiv.style.background = 'rgba(20, 184, 166, 0.1)';
                messageDiv.style.color = 'var(--primary-dark)';
                messageDiv.style.border = '1px solid rgba(20, 184, 166, 0.2)';
                messageDiv.innerHTML = 'Account created successfully! Welcome aboard.';
                
                setTimeout(() => {
                    window.location.href = 'signin.php';
                }, 1500);
            }, 1000);
        }
    </script>
</body>
</html>
