<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Center | The Future of Healthcare Scheduling</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-light)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M8 11h8"></path><path d="M12 7v8"></path></svg>
                <span class="logo-text">Health Care Center</span>
            </div>
            <nav style="display: flex; gap: 2rem; align-items: center;">
                <a href="#home" style="color: var(--text-main); text-decoration: none; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-light)'" onmouseout="this.style.color='var(--text-main)'">Home</a>
                <a href="#about" style="color: var(--text-muted); text-decoration: none; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='var(--text-main)'" onmouseout="this.style.color='var(--text-muted)'">About Us</a>
                <a href="#contact" style="color: var(--text-muted); text-decoration: none; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='var(--text-main)'" onmouseout="this.style.color='var(--text-muted)'">Contact</a>
                <a href="#location" style="color: var(--text-muted); text-decoration: none; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='var(--text-main)'" onmouseout="this.style.color='var(--text-muted)'">Location</a>
                <a href="signin.php" style="background: var(--primary); color: white; padding: 0.5rem 1.5rem; border-radius: 12px; text-decoration: none; font-weight: 600; transition: all 0.2s;" onmouseover="this.style.background='var(--primary-light)'" onmouseout="this.style.background='var(--primary)'">Login</a>
            </nav>
        </header>

        <main>
            <!-- Hero Section -->
            <section id="home" style="padding: 2rem 0;">
                <div class="animate-fade-in animate-float" style="position: relative; width: 100%; height: 400px; overflow: hidden; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    <img src="image/hero_bg.png" alt="Healthcare" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 100%); display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 4rem;">
                        <h2 style="color: white; font-size: 3rem; font-weight: 800; margin-bottom: 1rem; max-width: 600px; line-height: 1.1;">Your Health, Our Priority</h2>
                        <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; max-width: 550px; line-height: 1.6; font-weight: 400;">We provide world-class healthcare services with experienced doctors, modern facilities, and 24/7 emergency care.</p>
                        <a href="signin.php" style="margin-top: 2rem; background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 12px; text-decoration: none; font-weight: 700; box-shadow: 0 10px 20px rgba(0,0,0,0.1); transition: all 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 30px rgba(255,255,255,0.2)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'">Get Started Today</a>
                    </div>
                </div>
            </section>

            <!-- About Us Section -->
            <section id="about" style="padding: 6rem 0; border-top: 1px solid var(--border); margin-top: 4rem;">
                <div style="text-align: center; margin-bottom: 3rem;">
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; color: var(--text-main);">About Us</h2>
                    <p style="color: var(--text-muted); max-width: 800px; margin: 0 auto; line-height: 1.8; font-size: 1.1rem;">We provide a smart solution to manage hospital appointment overbooking efficiently and fairly. Our system uses real-time doctor availability and intelligent scheduling to reduce waiting times and avoid conflicts. It dynamically reschedules appointments while minimizing disruption to patients. We also offer queue visualization and wait-time prediction for better transparency. Our goal is to improve both patient satisfaction and doctor productivity through optimized scheduling.</p>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" style="padding: 6rem 0; border-top: 1px solid var(--border);">
                <div style="text-align: center; margin-bottom: 3rem;">
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; color: var(--text-main);">Contact</h2>
                    <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">Have a question or need assistance? Reach out to our support team.</p>
                </div>
                <div style="max-width: 400px; margin: 0 auto; background: var(--card-bg); padding: 2rem; border-radius: 24px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <form id="contact-form" style="display: flex; flex-direction: column; gap: 1.5rem;" onsubmit="handleContact(event)">
                        <div id="contact-message" style="display: none; padding: 1rem; border-radius: 12px; background: rgba(20, 184, 166, 0.1); color: var(--primary-dark); border: 1px solid rgba(20, 184, 166, 0.2); font-weight: 600; text-align: center;"></div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-main); font-weight: 600;">Full Name</label>
                            <input type="text" placeholder="John Doe" required style="width: 100%; padding: 1rem; border-radius: 12px; border: 1px solid var(--border); background: rgba(0,0,0,0.02); color: var(--text-main);">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-main); font-weight: 600;">Email Address</label>
                            <input type="email" placeholder="john@example.com" required style="width: 100%; padding: 1rem; border-radius: 12px; border: 1px solid var(--border); background: rgba(0,0,0,0.02); color: var(--text-main);">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-main); font-weight: 600;">Message</label>
                            <textarea rows="4" placeholder="How can we help?" required style="width: 100%; padding: 1rem; border-radius: 12px; border: 1px solid var(--border); background: rgba(0,0,0,0.02); color: var(--text-main);"></textarea>
                        </div>
                        <button type="submit" id="contact-btn" style="width: 100%; padding: 1rem; border-radius: 12px; background: var(--primary); color: white; font-weight: 600; border: none; cursor: pointer;">Send Message</button>
                    </form>
                </div>
            </section>

            <!-- Location Section -->
            <section id="location" style="padding: 6rem 0; border-top: 1px solid var(--border);">
                <div style="text-align: center; margin-bottom: 3rem;">
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; color: var(--text-main);">Location</h2>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <div style="width: 350px; height: 350px; border-radius: 50%; overflow: hidden; border: 4px solid #000000; box-shadow: 0 15px 35px rgba(0,0,0,0.15);">
                            <iframe src="https://maps.google.com/maps?q=NPSS%20Health%20Care%20Center%20Varur%20Karnataka&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div style="max-width: 400px; background: white; padding: 2rem; border-radius: 24px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                        <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--text-main);">NPSS Health Care Center</h3>
                        <ul style="list-style: none; padding: 0; color: var(--text-muted); display: flex; flex-direction: column; gap: 1.25rem;">
                            <li style="display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--primary); flex-shrink: 0;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span style="font-size: 0.95rem;">NPSS Health Care Center, Varur, Hubli, Karnataka, India</span>
                            </li>
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--primary); flex-shrink: 0;"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>
                                <span style="font-size: 0.95rem;">Mon - Fri: 8:00 AM - 8:00 PM</span>
                            </li>
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--primary); flex-shrink: 0;"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                <span style="font-size: 0.95rem;">npsshealthcare@gmail.com</span>
                            </li>
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--primary); flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                <span style="font-size: 0.95rem;">080361745612</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        function handleContact(event) {
            event.preventDefault();
            const btn = document.getElementById('contact-btn');
            const msg = document.getElementById('contact-message');
            const form = document.getElementById('contact-form');

            btn.innerHTML = 'Sending...';
            btn.disabled = true;
            btn.style.opacity = '0.7';

            setTimeout(() => {
                btn.innerHTML = 'Send Message';
                btn.disabled = false;
                btn.style.opacity = '1';
                
                msg.style.display = 'block';
                msg.innerHTML = 'Thank you for your message! Our team will get back to you shortly.';
                form.reset();

                setTimeout(() => {
                    msg.style.display = 'none';
                }, 5000);
            }, 1000);
        }

        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('reveal');
            observer.observe(section);
        });
    </script>
</body>
</html>
