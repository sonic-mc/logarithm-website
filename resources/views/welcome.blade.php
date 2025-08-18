<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logarithm Corporation - Innovating Southern Africa's Digital Future</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0066ff;
            --secondary: #00d4ff;
            --dark: #0a0e27;
            --light: #ffffff;
            --gray: #6b7280;
            --success: #10b981;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            overflow-x: hidden;
            background: var(--light);
        }

        /* Navigation */
        nav {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 3s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.2); }
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            margin-top: 80px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff20" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,138.7C672,149,768,203,864,213.3C960,224,1056,192,1152,160C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat;
            background-size: cover;
            animation: wave 20s linear infinite;
            opacity: 0.3;
        }

        @keyframes wave {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(-50%) translateY(20px); }
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 4rem;
            font-weight: 800;
            color: var(--light);
            margin-bottom: 1rem;
            animation: slideInLeft 1s ease;
            line-height: 1.1;
        }

        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .hero-text p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            animation: slideUp 1.5s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .btn {
            padding: 1rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: var(--light);
            color: var(--primary);
        }

        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 2px solid var(--light);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .hero-visual {
            position: relative;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero-visual .floating-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .code-snippet {
            font-family: 'Courier New', monospace;
            color: #00ff88;
            font-size: 0.9rem;
            margin: 1rem 0;
        }

        /* About Section */
        .about {
            padding: 5rem 2rem;
            background: var(--light);
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .about-card {
            background: var(--light);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 102, 255, 0.1);
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 102, 255, 0.2);
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        /* Services Section */
        .services {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .service-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: var(--light);
            padding: 3rem 2rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--light);
        }

        /* Clients Section */
        .clients {
            padding: 5rem 2rem;
            background: var(--light);
        }

        .client-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4rem;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .client-logo {
            padding: 2rem;
            background: var(--light);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--gray);
        }

        .client-logo:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* Stats Section */
        .stats {
            padding: 4rem 2rem;
            background: var(--gradient);
            color: var(--light);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Contact Section */
        .contact {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--light);
        }

        .contact-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: var(--light);
            padding: 2rem;
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .cta-buttons {
                justify-content: center;
            }
            
            .hero-visual {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">Logarithm</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Innovating Southern Africa's Digital Future</h1>
                <p>At Logarithm Corporation, we craft cutting-edge software solutions that empower businesses to thrive in the digital age.</p>
                <div class="cta-buttons">
                    <a href="#services" class="btn btn-primary">Explore Services</a>
                    <a href="#contact" class="btn btn-secondary">Get Started</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-card">
                    <div class="code-snippet">
                        &lt;?php<br>
                        class Innovation {<br>
                        &nbsp;&nbsp;public function transform($business) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;return $business->digitalize();<br>
                        &nbsp;&nbsp;}<br>
                        }<br>
                        ?&gt;
                    </div>
                    <p style="color: rgba(255,255,255,0.8); margin-top: 1rem;">Transforming businesses through code</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="section-container">
            <div class="section-header">
                <h2>About Us</h2>
                <p style="font-size: 1.2rem; color: var(--gray); max-width: 800px; margin: 0 auto;">
                    We are at the forefront of technological innovation, specializing in software development and delivering tailor-made applications to empower businesses across Southern Africa.
                </p>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <h3>Our Expertise</h3>
                    <p>Masters of code, crafting solutions that bridge the gap between your business needs and the digital world. Our experienced engineers create custom applications that streamline operations and drive growth.</p>
                </div>
                <div class="about-card">
                    <h3>Bespoke Applications</h3>
                    <p>Your business is unique, and so are your challenges. We specialize in meticulously tailored applications for your specific requirements, enhancing experiences and optimizing processes.</p>
                </div>
                <div class="about-card">
                    <h3>Local Expertise, Global Standards</h3>
                    <p>Deep understanding of the Southern African business landscape, combined with international best practices to deliver culturally relevant and globally competitive solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>10+</h3>
                <p>Years of Excellence</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Projects Delivered</p>
            </div>
            <div class="stat-item">
                <h3>95%</h3>
                <p>Client Satisfaction</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Support Available</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="section-container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p style="font-size: 1.2rem; color: var(--gray);">Comprehensive solutions for your digital transformation journey</p>
            </div>
            <div class="service-cards">
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3>Custom Software Development</h3>
                    <p>Tailored software solutions designed specifically for your business needs, ensuring perfect alignment with your goals and processes.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔗</div>
                    <h3>Software Integration Services</h3>
                    <p>Seamlessly connect your existing systems and new applications, creating a unified and efficient digital ecosystem.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Business Intelligence & Analytics</h3>
                    <p>Transform your data into actionable insights with powerful analytics tools and intelligent reporting solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients" id="clients">
        <div class="section-container">
            <div class="section-header">
                <h2>Trusted By Industry Leaders</h2>
                <p style="font-size: 1.2rem; color: var(--gray);">Companies who rely on our expertise</p>
            </div>
            <div class="client-logos">
                <div class="client-logo">Coverlink</div>
                <div class="client-logo">Goldenknot</div>
                <div class="client-logo">Sosana</div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-content">
            <h2 style="font-size: 3rem; margin-bottom: 1rem;">Let's Build Something Amazing</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Ready to transform your business? Get in touch with us today.</p>
            <div class="contact-info">
                <div class="contact-item">
                    <span>📧</span>
                    <span>takaedza.hakunavanhu@logarithmcorporation.org</span>
                </div>
                <div class="contact-item">
                    <span>📱</span>
                    <span>+263 719 288 500</span>
                </div>
                <div class="contact-item">
                    <span>📱</span>
                    <span>+260 767 492 836</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Logarithm Corporation Private Limited. All rights reserved.</p>
        <p style="margin-top: 1rem; font-size: 0.9rem; opacity: 0.8;">
            "At least 40% of all businesses will die in the next 10 years… if they don't figure out how to change their entire company to accommodate new technologies"
        </p>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.background = 'rgba(255, 255, 255, 0.98)';
                nav.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                nav.style.background = 'rgba(255, 255, 255, 0.95)';
                nav.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.about-card, .service-card, .client-logo').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Counter animation for stats
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target + (element.textContent.includes('+') ? '+' : element.textContent.includes('%') ? '%' : '');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + (element.textContent.includes('+') ? '+' : element.textContent.includes('%') ? '%' : '');
                }
            }, 30);
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                    entry.target.classList.add('animated');
                    const statNumbers = entry.target.querySelectorAll('.stat-item h3');
                    statNumbers.forEach(num => {
                        const text = num.textContent;
                        const value = parseInt(text);
                        if (!isNaN(value)) {
                            animateCounter(num, value);
                        }
                    });
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.stats-grid');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    </script>
</body>
</html>