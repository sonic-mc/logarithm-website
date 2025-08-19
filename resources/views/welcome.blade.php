<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logarithm Corporation - Innovating Zimbabwe's Digital Future</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2dd4bf;
            --secondary: #0891b2;
            --dark: #0f172a;
            --dark-secondary: #1e293b;
            --light: #ffffff;
            --gray: #64748b;
            --gray-light: #f1f5f9;
            --success: #10b981;
            --accent: #06b6d4;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--light);
            overflow-x: hidden;
            background: var(--dark);
        }

         /* Top Bar */
.top-bar {
  background: var(--dark);
  padding: 0.6rem 0;
  border-bottom: 1px solid rgba(45, 212, 191, 0.1);
  font-size: 0.85rem;
  transition: all 0.3s ease;
}

.top-bar-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.top-bar-info {
  display: flex;
  align-items: center;
  gap: 2rem;
  color: var(--gray);
}

.top-bar-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.top-bar-social {
  display: flex;
  align-items: center;
  gap: 1rem;
}

/* Social Icons */
.social-icon {
  width: 32px;
  height: 32px;
  background: rgba(45, 212, 191, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary);
  text-decoration: none;
  font-size: 0.9rem;
  transition: all 0.3s ease;
}
.social-icon:hover {
  background: var(--primary);
  color: var(--dark);
  transform: translateY(-2px);
}

/* Navigation */
nav {
  width: 100%;
  top: 0;
  z-index: 1000;
  background: rgba(15, 23, 42, 0.95);
  backdrop-filter: blur(20px);
  transition: all 0.4s ease;
  border-bottom: 1px solid rgba(45, 212, 191, 0.1);
  position: relative;
}

nav.sticky {
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

/* Nav Container */
.nav-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Logo */
.logo {
  font-size: 1.8rem;
  font-weight: 800;
  color: var(--primary);
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

/* Nav Links */
.nav-links {
  display: flex;
  gap: 3rem;
  list-style: none;
  align-items: center;
}

.nav-links a {
  text-decoration: none;
  color: var(--light);
  font-weight: 500;
  font-size: 0.95rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}
.nav-links a:hover {
  color: var(--primary);
}

/* CTA Button */
.nav-cta {
  background: var(--primary);
  color: var(--dark);
  padding: 0.8rem 1.5rem;
  border-radius: 8px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}
.nav-cta:hover {
  background: var(--secondary);
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(45, 212, 191, 0.3);
}

     
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: var(--dark);
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(45, 212, 191, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(8, 145, 178, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(45, 212, 191, 0.05) 0%, transparent 50%);
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%232dd4bf20" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,138.7C672,149,768,203,864,213.3C960,224,1056,192,1152,160C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
            animation: wave 15s linear infinite;
            opacity: 0.3;
        }

        @keyframes wave {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 2;
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
        }

        .hero-badge {
            display: inline-block;
            background: rgba(246, 250, 249, 0.1);
            border: 1px solid var(--primary);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            animation: fadeIn 1s ease;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            color: rgba(255, 255, 255, 0.8);
            color: var(--light);
            margin-bottom: 1.5rem;
            animation: slideUp 1s ease 0.2s both;
            line-height: 1.1;
            background: linear-gradient(135deg, var(--light) 0%, var(--primary) 100%);
            -webkit-background-clip: text;
    
        }

        .hero p {
            font-size: 0.rem;
            color: rgba(255, 255, 255, 0.998);
            margin-bottom: 3rem;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            animation: slideUp 1s ease 0.4s both;
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .cta-buttons {
            display: flex;
            gap: 1.3rem;
            justify-content: center;
            animation: slideUp 1s ease 0.6s both;
            margin-bottom: 4rem;
        }

        .btn {
            padding: 1.2rem 2.5rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--dark);
        }

        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 2px solid var(--primary);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(45, 212, 191, 0.3);
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: var(--dark);
        }

        /* About Section */
        .about {
            padding: 6rem 2rem;
            background: var(--dark);
            position: relative;
        }

        .section-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-badge {
            display: inline-block;
            background: rgba(45, 212, 191, 0.1);
            color: var(--primary);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }

        .section-header h2 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            color: var(--light);
        }

        .section-header p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 800px;
            margin: 0 auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .about-card {
            background: var(--dark);
            padding: 3rem 2rem;
            border-radius: 20px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .about-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 25px 50px rgba(45, 212, 191, 0.2);
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
            font-weight: 700;
        }

        .about-card p {
            color: var(--gray);
            line-height: 1.8;
        }

        /* Stats Section */
        .stats {
            padding: 5rem 2rem;
            background: var(--gray-light);
            position: relative;
            background-repeat: no-repeat;
            background-position: top;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .stats-header h2 {
            font-size: 3rem;
            font-weight: 900;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .stats-header .highlight {
            color: var(--primary);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: rgba(45, 212, 191, 0.05);
            border-radius: 20px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(45, 212, 191, 0.1);
            border-color: var(--primary);
        }

        .stat-item h3 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
            color: var(--primary);
            font-family: 'Inter', sans-serif;
        }

        .stat-item p {
            font-size: 1.1rem;
            color: var(--gray);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Services Section */
        .services {
            padding: 6rem 2rem;
            background: var(--dark-secondary);
        }

        .services-intro {
            text-align: center;
            margin-bottom: 5rem;
        }

        .services-intro h2 {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--light);
            margin-bottom: 1rem;
        }

        .services-intro .highlight {
            color: var(--primary);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card {
            background: var(--dark-secondary);
            padding: 3rem 2rem;
            border-radius: 20px;
            border: 1px solid rgba(45, 212, 191, 0.1);
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
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 25px 50px rgba(45, 212, 191, 0.2);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
            font-weight: 700;
        }

        .service-card p {
            color: var(--gray);
            line-height: 1.8;
        }

        .platforms-section {
            margin-top: 5rem;
        }

        .platforms-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .platforms-header h3 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--light);
            margin-bottom: 1rem;
        }

        .platforms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .platform-item {
            background: rgba(45, 212, 191, 0.05);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
            text-align: center;
        }

        .platform-item:hover {
            background: rgba(45, 212, 191, 0.1);
            border-color: var(--primary);
            transform: translateY(-5px);
        }

        .platform-item h4 {
            color: var(--primary);
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Team Section */
        .team {
            padding: 6rem 2rem;
            background: var(--light);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .team-member {
            background: var(--gray-light);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .team-member:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 25px 50px rgba(45, 212, 191, 0.2);
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark);
        }

        .team-header h2 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .team-member h3 {
            font-size: 1.5rem;
            color: var(--dark-secondary);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .team-member .role {
            color: var(--primary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }

        .team-member p {
            color: var(--dark-secondary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(45, 212, 191, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-3px);
        }

        /* Contact Section */
        .contact {
            padding: 6rem 2rem;
            background: var(--dark-secondary);
            position: relative;
        }

        .contact-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .contact-info h2 {
            font-size: 3rem;
            font-weight: 900;
            color: var(--light);
            margin-bottom: 1.5rem;
        }

        .contact-info p {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 3rem;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(45, 212, 191, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(45, 212, 191, 0.1);
            border-color: var(--primary);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--dark);
        }

        .contact-text {
            color: var(--light);
            font-weight: 500;
        }

        .contact-form {
            background: var(--dark);
            padding: 3rem;
            border-radius: 20px;
            border: 1px solid rgba(45, 212, 191, 0.1);
        }

        .contact-form h3 {
            font-size: 2rem;
            color: var(--light);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            background: var(--dark-secondary);
            border: 1px solid rgba(45, 212, 191, 0.2);
            border-radius: 12px;
            color: var(--light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(45, 212, 191, 0.1);
        }

        .form-group textarea {
            height: 120px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            padding: 4rem 2rem 2rem;
            border-top: 1px solid rgba(45, 212, 191, 0.1);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            color: var(--light);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section ul li a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--primary);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(45, 212, 191, 0.1);
        }

        .footer-bottom p {
            color: var(--gray);
            margin-bottom: 1rem;
        }

        .footer-quote {
            font-style: italic;
            color: var(--primary);
            font-size: 0.9rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 3rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .section-header h2 {
                font-size: 2.5rem;
            }

            .stats-header h2 {
                font-size: 2.5rem;
            }
        }

        /* Animation classes */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    
   <!-- Top Bar -->
<div class="top-bar" id="topBar">
    <div class="top-bar-container">
      <div class="top-bar-info">
        <div class="top-bar-item">
          <i class="far fa-clock"></i> Open Hours: Mon - Sat - 8:00 - 17:00
        </div>
        <div class="top-bar-item">
          <i class="fas fa-phone"></i> +1 (305) 1234-5678
        </div>
        <div class="top-bar-item">
          <i class="fas fa-envelope"></i> logatech@gmail.com
        </div>
      </div>
      <div class="top-bar-social">
        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="mainNav">
    <div class="nav-container">
      <div class="logo">Logarithm</div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact" class="nav-cta">Get In Touch</a></li>
      </ul>
    </div>
  </nav>


  <script>
    window.addEventListener("scroll", function () {
      const topBar = document.getElementById("topBar");
      const nav = document.getElementById("mainNav");
    
      if (window.scrollY > 80) {
        topBar.style.display = "none"; // hide top bar
        nav.classList.add("sticky");
      } else {
        topBar.style.display = "block"; // show top bar
        nav.classList.remove("sticky");
      }
    });
    </script>
    
  
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-badge">Zimbabwe Technology Company</div>
            <h1>Innovating Zimbabwe's Digital Future</h1>
            <p>At Logarithm (Pvt) Ltd, we deliver tailored IT solutions for businesses across industries, including SMS platforms, micro-insurance systems, HR tools, school management software, micro-finance platforms, and intelligent WhatsApp bots. Our solutions streamline operations, reduce costs, and boost productivity, helping you focus on core goals.</p>
            <div class="cta-buttons">
                <a href="#services" class="btn btn-primary">Explore Services</a>
                <a href="#contact" class="btn btn-secondary">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="section-container">
            <div class="stats-header">
                <div class="section-badge">What Are We Doing</div>
                <h2>Results in <span class="highlight">Numbers</span></h2>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3 data-target="50">0</h3>
                    <p>Projects Delivered</p>
                </div>
                <div class="stat-item">
                    <h3 data-target="15">0</h3>
                    <p>Active Clients</p>
                </div>
                <div class="stat-item">
                    <h3 data-target="7">0</h3>
                    <p>Platforms Built</p>
                </div>
                <div class="stat-item">
                    <h3 data-target="99">0</h3>
                    <p>Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="section-container">
            <div class="section-header">
                <div class="section-badge">About Us</div>
                <h2>Who We Are</h2>
                <p>Logarithm (Private) Limited is a wholly owned Zimbabwe Technology Company with a mission to provide small, portable IT solutions to solve complex business problems that may seem impossible to solve.</p>
            </div>
            <div class="about-grid">
                <div class="about-card animate-on-scroll">
                    <h3>Our Mission</h3>
                    <p>Our specialty lies in systems integrations services and custom software development services. With our expertise in cutting-edge technologies and a commitment to client satisfaction, we are poised to revolutionize the way companies operate.</p>
                </div>
                <div class="about-card animate-on-scroll">
                    <h3>Our Vision</h3>
                    <p>To contribute to a future where companies leverage on technological solutions to offer cutting edge products and services to customers. We strive to be the trusted partner that empowers providers to embrace the digital transformation journey whilst growing their business.</p>
                </div>
                <div class="about-card animate-on-scroll">
                    <h3>Local Expertise, Global Standards</h3>
                    <p>Deep understanding of the Zimbabwean business landscape, combined with international best practices to deliver culturally relevant and globally competitive solutions that drive real business results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="section-container">
            <div class="services-intro">
                <div class="section-badge">Our Business Areas</div>
                <h2>Excellence in <span class="highlight">Services</span></h2>
                <p style="color: var(--gray); font-size: 1.2rem; max-width: 800px; margin: 0 auto;">We are leaders in providing technology services with a set of cutting-edge technologies and a team of experienced and renowned professionals.</p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">🔗</div>
                    <h3>System Integration Services</h3>
                    <p>Seamlessly connect your existing systems and new applications, creating a unified and efficient digital ecosystem that enhances productivity and streamlines operations.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">💻</div>
                    <h3>Custom Software Development</h3>
                    <p>Tailored software solutions designed specifically for your business needs, ensuring perfect alignment with your goals and operational processes.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">⚙️</div>
                    <h3>DevOps Services</h3>
                    <p>Streamline your development and deployment processes with our comprehensive DevOps solutions, ensuring faster delivery and improved reliability.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">📊</div>
                    <h3>Project Management & Outsourcing</h3>
                    <p>Professional software development project management and developer outsourcing services to help you scale your technical capabilities effectively.</p>
                </div>
            </div>
            
            <div class="platforms-section">
                <div class="platforms-header">
                    <h3>Our <span style="color: var(--primary);">Platforms</span></h3>
                    <p style="color: var(--gray); margin-top: 1rem;">Specialized solutions we've built for various industries</p>
                </div>
                <div class="platforms-grid">
                    <div class="platform-item animate-on-scroll">
                        <h4>🛡️ Microinsurance Platform</h4>
                    </div>
                    <div class="platform-item animate-on-scroll">
                        <h4>📱 Bulk SMS Platform</h4>
                    </div>
                    <div class="platform-item animate-on-scroll">
                        <h4>🎓 School Management System</h4>
                    </div>
                    <div class="platform-item animate-on-scroll">
                        <h4>💰 Microfinance Platform</h4>
                    </div>
                    <div class="platform-item animate-on-scroll">
                        <h4>📲 Android Retail Application</h4>
                    </div>
                    <div class="platform-item animate-on-scroll">
                        <h4>👥 Payroll & HR Management</h4>
                    </div>
                    <div class="platform-item animate-on-scroll">
                        <h4>💬 WhatsApp Bots</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team" id="team">
        <div class="section-container">
            <div class="team-header align-centre">
                <div class="section-badge">Our Team</div>
                <h2>Team of Experts</h2>
                <p style="color: var(--gray);">Ethics and integrity are the bases on which our professionals build their careers. They are fundamentals that become daily attitudes.</p>
            </div>
            <div class="team-grid">
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">TH</div>
                    <h3>Takaedza Hakunavanhu</h3>
                    <div class="role">CEO & Founder</div>
                    <p>Leading innovation in Zimbabwe's tech industry with over a decade of experience in software development and business transformation.</p>
                    <div class="team-social">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">JS</div>
                    <h3>John Smith</h3>
                    <div class="role">Chief Technology Officer</div>
                    <p>Expert in system architecture and integration services, specializing in creating scalable solutions for enterprise clients across Southern Africa.</p>
                    <div class="team-social">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">ML</div>
                    <h3>Maria Lopez</h3>
                    <div class="role">Lead Developer</div>
                    <p>Full-stack developer with expertise in modern frameworks and technologies, passionate about creating user-centric applications that drive business growth.</p>
                    <div class="team-social">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">DK</div>
                    <h3>David Khumalo</h3>
                    <div class="role">DevOps Engineer</div>
                    <p>Specialist in deployment automation and infrastructure management, ensuring our solutions are reliable, scalable, and performant in production environments.</p>
                    <div class="team-social">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="section-container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Let's Build Something Amazing</h2>
                    <p>Ready to transform your business with cutting-edge technology? Get in touch with us today and let's discuss how we can help you achieve your digital transformation goals.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">📧</div>
                            <div class="contact-text">takaedza.hakunavanhu@logarithmcorporation.org</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📱</div>
                            <div class="contact-text">+263 719 288 500</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📱</div>
                            <div class="contact-text">+260 767 492 836</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-text">Harare, Zimbabwe</div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About</h3>
                <ul>
                    <li><a href="#about">The Company</a></li>
                    <li><a href="#team">Our Team</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#services">System Integration</a></li>
                    <li><a href="#services">Custom Development</a></li>
                    <li><a href="#services">DevOps Services</a></li>
                    <li><a href="#services">Project Management</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Platforms</h3>
                <ul>
                    <li><a href="#services">Microinsurance Platform</a></li>
                    <li><a href="#services">SMS Platform</a></li>
                    <li><a href="#services">School Management</a></li>
                    <li><a href="#services">HR Management</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Support</h3>
                <ul>
                    <li><a href="#contact">Get In Touch</a></li>
                    <li><a href="#about">Privacy Policy</a></li>
                    <li><a href="#about">Terms of Use</a></li>
                    <li><a href="#contact">Technical Support</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Logarithm Corporation Private Limited. All rights reserved.</p>
            <div class="footer-quote">
                "At least 40% of all businesses will die in the next 10 years… if they don't figure out how to change their entire company to accommodate new technologies"
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(15, 23, 42, 0.98)';
                nav.style.borderBottom = '1px solid rgba(45, 212, 191, 0.2)';
            } else {
                nav.style.background = 'rgba(15, 23, 42, 0.95)';
                nav.style.borderBottom = '1px solid rgba(45, 212, 191, 0.1)';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Counter animation for stats
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 60;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    if (element.parentElement.querySelector('p').textContent.includes('Satisfaction')) {
                        element.textContent = target + '%';
                    } else {
                        element.textContent = target + '+';
                    }
                    clearInterval(timer);
                } else {
                    if (element.parentElement.querySelector('p').textContent.includes('Satisfaction')) {
                        element.textContent = Math.floor(current) + '%';
                    } else {
                        element.textContent = Math.floor(current) + '+';
                    }
                }
            }, 50);
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('stats-animated')) {
                    entry.target.classList.add('stats-animated');
                    const statNumbers = entry.target.querySelectorAll('.stat-item h3');
                    statNumbers.forEach(num => {
                        const target = parseInt(num.getAttribute('data-target'));
                        animateCounter(num, target);
                    });
                }
            });
        }, { threshold: 0.3 });

        const statsSection = document.querySelector('.stats-grid');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Form submission
        document.querySelector('.contact-form form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Show loading state
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.textContent = 'Message Sent!';
                submitBtn.style.background = 'var(--success)';
                
                // Reset form
                this.reset();
                
                // Reset button after delay
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.style.background = 'var(--primary)';
                    submitBtn.disabled = false;
                }, 3000);
            }, 2000);
        });

        // Add some interactive elements
        document.querySelectorAll('.service-card, .about-card, .team-member').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Parallax effect for hero background
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.5;
            
            if (hero) {
                hero.style.backgroundPosition = `center ${rate}px`;
            }
        });

        // Add dynamic background particles
        function createParticle() {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: absolute;
                width: 4px;
                height: 4px;
                background: var(--primary);
                border-radius: 50%;
                pointer-events: none;
                opacity: 0.6;
                animation: float-particle 8s linear infinite;
                left: ${Math.random() * 100}%;
                top: 100%;
                z-index: 1;
            `;
            
            document.querySelector('.hero').appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 8000);
        }

        // Create particles periodically
        setInterval(createParticle, 2000);

        // Add CSS for particle animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float-particle {
                0% {
                    transform: translateY(0) translateX(0);
                    opacity: 0;
                }
                10% {
                    opacity: 0.6;
                }
                90% {
                    opacity: 0.6;
                }
                100% {
                    transform: translateY(-100vh) translateX(${Math.random() * 200 - 100}px);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>