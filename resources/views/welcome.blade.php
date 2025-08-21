<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logarithm Corporation - Innovating Zimbabwe's Digital Future</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ URL::asset('logo.png')}}">

    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2dd4bf;
            --secondary: #0891b2;
            --accent: #f59e0b;
            --dark: #0f172a;
            --dark-secondary: #1e293b;
            --dark-light: #334155;
            --light: #ffffff;
            --light-secondary: #f8fafc;
            --gray: #64748b;
            --gray-light: #f1f5f9;
            --success: #10b981;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
            --african-gold: #FFD700;
            --african-red: #DC2626;
        }

        html {
    /* Base font size scales between 14px and 18px depending on viewport width */
            font-size: clamp(14px, 1.2vw, 18px);
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
            color: var(--light);
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

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .top-bar-info .top-bar-item {
                display: none; /* Hide all info items by default */
            }

            .top-bar-info .top-bar-item:first-child {
                display: flex; /* Show only operating hours */
            }

            .top-bar-container {
                padding: 0 1rem;
            }
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

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            height: 50px;
        }

        .logo img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }

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

        /* Mobile Toggle Button */
        .mobile-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .mobile-toggle:hover {
            background: rgba(45, 212, 191, 0.1);
        }

        .mobile-toggle span {
            width: 25px;
            height: 3px;
            background: var(--light);
            margin: 3px 0;
            transition: all 0.3s ease;
            transform-origin: center;
        }

        /* Hamburger animation */
        .mobile-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .mobile-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .mobile-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .nav-container {
                padding: 1rem;
                position: relative;
            }

            .logo {
                font-size: 1.5rem;
            }

            .mobile-toggle {
                display: flex;
            }

            .nav-links {
                display: flex;
                position: relative;
                top: 100%;
                left: 0;
                width: 100%;
                flex-direction: column;
                gap: 0;
                background: rgba(15, 23, 42, 0.98);
                backdrop-filter: blur(20px);
                border-top: 1px solid rgba(45, 212, 191, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                max-height: 0;
                overflow: hidden;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            }

            .nav-links.active {
                display: flex;
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
                max-height: 400px;
            }

            .nav-links li {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid rgba(45, 212, 191, 0.05);
            }

            .nav-links li:last-child {
                border-bottom: none;
            }

            .nav-links a {
                display: block;
                padding: 1.2rem 2rem;
                width: 100%;
                font-size: 1rem;
                transition: all 0.3s ease;
            }

            .nav-links a:hover {
                background: rgba(45, 212, 191, 0.1);
                color: var(--primary);
            }

            .nav-cta {
                margin: 1rem;
                border-radius: 8px;
                text-align: center;
                padding: 1rem 2rem;
            }

            .nav-cta:hover {
                transform: none;
                background: var(--secondary);
            }
        }

        @media (max-width: 480px) {
            .nav-container {
                padding: 0.8rem;
            }

            .logo {
                height: 40px;
            }

            .nav-links a {
                padding: 1rem 1.5rem;
                font-size: 0.9rem;
            }
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
                radial-gradient(circle at 40% 80%, rgba(255, 215, 0, 0.05) 0%, transparent 50%);
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
        }

        .hero-badge {
            display: inline-block;
            background: rgba(246, 250, 249, 0.1);
            border: 1px solid var(--primary);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--light);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            animation: fadeIn 1s ease;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--light);
            margin-bottom: 1.5rem;
            animation: slideUp 1s ease 0.2s both;
            line-height: 1.1;
            background: linear-gradient(135deg, var(--light) 0%, var(--primary) 100%);
            -webkit-background-clip: text;
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
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

        /* Stats Section */
        .stats {
            padding: 5rem 2rem;
            background: var(--light-secondary);
            position: relative;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .stats-header h2 {
            font-size: 3rem;
            font-weight: 900;
            color: var(--dark);
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
            background: var(--light);
            border-radius: 20px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(45, 212, 191, 0.2);
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
            color: var(--dark);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
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
            background: var(--dark-secondary);
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
            background: linear-gradient(90deg, var(--primary), var(--african-gold));
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

        /* Enhanced Services Section */
        .services {
            padding: 6rem 2rem;
            background: var(--light-secondary);
        }

        .services-intro {
            text-align: center;
            margin-bottom: 5rem;
        }

        .services-intro h2 {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--dark);
            margin-bottom: 1rem;
        }

        .services-intro .highlight {
            color: var(--primary);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
        }

        .service-card {
            background: var(--light);
            padding: 3rem;
            border-radius: 25px;
            border: 2px solid transparent;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            opacity: 0;
            transition: all 0.4s ease;
            z-index: 1;
        }

        .service-card:hover::before {
            opacity: 0.05;
        }

        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            border-color: var(--primary);
            box-shadow: 0 30px 60px rgba(45, 212, 191, 0.25);
        }

        .service-content {
            position: relative;
            z-index: 2;
        }

        .service-icon {
            width: 100px;
            height: 100px;
            margin-bottom: 2rem;
            background: var(--gradient);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            box-shadow: 0 10px 25px rgba(45, 212, 191, 0.3);
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
            font-weight: 800;
        }

        .service-card p {
            color: var(--dark-light);
            line-height: 1.8;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .service-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .service-features li {
            color: var(--dark-light);
            margin-bottom: 0.8rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        .service-cta {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .service-cta:hover {
            color: var(--secondary);
            transform: translateX(5px);
        }

        .service-cta i {
            margin-left: 0.5rem;
            transition: all 0.3s ease;
        }

        /* New Platforms Section */
        .platforms {
            padding: 6rem 2rem;
            background: var(--dark);
            position: relative;
        }

        .platforms-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .platforms-header h2 {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--light);
            margin-bottom: 1rem;
        }

        .platforms-header .highlight {
            color: var(--primary);
        }

        .platforms-header p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 800px;
            margin: 0 auto;
        }

        .platforms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .platform-card {
            background: var(--dark-secondary);
            padding: 3rem 2rem;
            border-radius: 20px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .platform-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient);
        }

        .platform-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 25px 50px rgba(45, 212, 191, 0.2);
        }

        .platform-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .platform-card h3 {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .platform-card p {
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .platform-features {
            list-style: none;
        }

        .platform-features li {
            color: var(--gray);
            margin-bottom: 0.5rem;
            padding-left: 1.2rem;
            position: relative;
            font-size: 0.9rem;
        }

        .platform-features li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        /* Enhanced Team Section */
        .team {
            padding: 6rem 2rem;
            background: var(--light-secondary);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .team-member {
            background: var(--light);
            border-radius: 25px;
            padding: 3rem 2rem;
            text-align: center;
            border: 2px solid transparent;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient);
        }

        .team-member:hover {
            transform: translateY(-15px);
            border-color: var(--primary);
            box-shadow: 0 30px 60px rgba(45, 212, 191, 0.25);
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 2rem;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--light);
            border: 4px solid rgba(45, 212, 191, 0.2);
            transition: all 0.3s ease;
        }

        .team-member:hover .team-avatar {
            transform: scale(1.1);
            border-color: var(--primary);
        }

        .team-header h2 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .team-member h3 {
            font-size: 1.6rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .team-member .role {
            color: var(--primary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            margin-bottom: 1.5rem;
        }

        .team-member p {
            color: var(--dark-light);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(45, 212, 191, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary);
            color: var(--light);
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
            padding: 1.5rem;
            background: rgba(45, 212, 191, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(45, 212, 191, 0.1);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(45, 212, 191, 0.1);
            border-color: var(--primary);
            transform: translateX(10px);
        }

        .contact-icon {
            width: 55px;
            height: 55px;
            background: var(--primary);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: var(--dark);
        }

        .contact-text {
            color: var(--light);
            font-weight: 500;
        }

        .contact-form {
            background: var(--dark);
            padding: 3rem;
            border-radius: 25px;
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
            padding: 1.2rem;
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

        /* Enhanced Footer with Animation */
        footer {
            background: var(--dark);
            padding: 4rem 2rem 2rem;
            border-top: 1px solid rgba(45, 212, 191, 0.1);
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(45, 212, 191, 0.03), transparent);
            animation: footerWave 8s linear infinite;
        }

        @keyframes footerWave {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
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
            color: var(--gray-light);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--primary);
            transform: translateX(5px);
            display: inline-block;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(45, 212, 191, 0.1);
            position: relative;
            z-index: 2;
        }

        .footer-bottom p {
            color: var(--gray-light);
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
                font-size: 2.5rem;
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

            .services-grid {
                grid-template-columns: 1fr;
            }

            .platforms-grid {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: 1fr;
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

        /* Floating particles */
        .floating-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body>
    
   <!-- Top Bar -->
<div class="top-bar" id="topBar">
    <div class="top-bar-container">
      <div class="top-bar-info">
        <div class="top-bar-item">
          <i class="far fa-clock"></i> Open Hours: Mon - Fri - 8:00 - 17:00
        </div>
        <div class="top-bar-item">
          <i class="fas fa-phone"></i> +263 719 288 500
        </div>
        <div class="top-bar-item">
          <i class="fas fa-envelope"></i> info@logatech.co.zw
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
        <div class="logo">
            <img src="{{ asset('logaa.png') }}" alt="Company Logo">
        </div>

        <!-- Mobile Toggle Button -->
        <div class="mobile-toggle" id="mobileToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <!-- Navigation Links -->
        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#platforms">Platforms</a></li>
            <li><a href="#team">Team</a></li>
        </ul>
    </div>
</nav>


<script>
    const topBar = document.getElementById("topBar");
    const nav = document.getElementById("mainNav");
    const mobileToggle = document.getElementById("mobileToggle");
    const navLinks = document.getElementById("navLinks");

    // Sticky navigation on scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 80) {
            topBar.style.display = "none";
            nav.classList.add("sticky");
        } else {
            topBar.style.display = "block";
            nav.classList.remove("sticky");
        }
    });

    // Mobile menu toggle
    mobileToggle.addEventListener("click", function() {
        mobileToggle.classList.toggle("active");
        navLinks.classList.toggle("active");
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll(".nav-links a").forEach(link => {
        link.addEventListener("click", function() {
            mobileToggle.classList.remove("active");
            navLinks.classList.remove("active");
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener("click", function(event) {
        const isClickInsideNav = nav.contains(event.target);
        if (!isClickInsideNav && navLinks.classList.contains("active")) {
            mobileToggle.classList.remove("active");
            navLinks.classList.remove("active");
        }
    });

    // Handle window resize
    window.addEventListener("resize", function() {
        if (window.innerWidth > 768) {
            mobileToggle.classList.remove("active");
            navLinks.classList.remove("active");
        }
    });
</script>

  
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="floating-particles">
            <div class="particle" style="left: 10%; width: 6px; height: 6px; animation-delay: 0s;"></div>
            <div class="particle" style="left: 20%; width: 4px; height: 4px; animation-delay: 1s;"></div>
            <div class="particle" style="left: 35%; width: 8px; height: 8px; animation-delay: 2s;"></div>
            <div class="particle" style="left: 50%; width: 5px; height: 5px; animation-delay: 3s;"></div>
            <div class="particle" style="left: 70%; width: 7px; height: 7px; animation-delay: 4s;"></div>
            <div class="particle" style="left: 85%; width: 4px; height: 4px; animation-delay: 5s;"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">Logarithm Corporation (Pvt) ltd</div>
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

    <!-- Enhanced Services Section -->
    <section class="services" id="services">
        <div class="section-container">
            <div class="services-intro">
                <div class="section-badge">Our Core Services</div>
                <h2>Excellence in <span class="highlight">Services</span></h2>
                <p style="color: var(--dark-light); font-size: 1.2rem; max-width: 800px; margin: 0 auto;">We are leaders in providing technology services with a set of cutting-edge technologies and a team of experienced and renowned professionals.</p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>System Integration Services</h3>
                        <p>Seamlessly connect your existing systems and new applications, creating a unified and efficient digital ecosystem that enhances productivity and streamlines operations.</p>
                        <ul class="service-features">
                            <li>API Development & Integration</li>
                            <li>Database Migration & Synchronization</li>
                            <li>Third-party Service Integration</li>
                            <li>Legacy System Modernization</li>
                        </ul>
                        <a href="#contact" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Custom Software Development</h3>
                        <p>Tailored software solutions designed specifically for your business needs, ensuring perfect alignment with your goals and operational processes.</p>
                        <ul class="service-features">
                            <li>Web & Mobile Applications</li>
                            <li>Desktop Software Solutions</li>
                            <li>Progressive Web Apps (PWA)</li>
                            <li>Cross-platform Development</li>
                        </ul>
                        <a href="#contact" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>DevOps Services</h3>
                        <p>Streamline your development and deployment processes with our comprehensive DevOps solutions, ensuring faster delivery and improved reliability.</p>
                        <ul class="service-features">
                            <li>CI/CD Pipeline Setup</li>
                            <li>Cloud Infrastructure Management</li>
                            <li>Container Orchestration</li>
                            <li>Monitoring & Performance Optimization</li>
                        </ul>
                        <a href="#contact" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h3>Project Management & Outsourcing</h3>
                        <p>Professional software development project management and developer outsourcing services to help you scale your technical capabilities effectively.</p>
                        <ul class="service-features">
                            <li>Agile Project Management</li>
                            <li>Dedicated Development Teams</li>
                            <li>Technical Consulting</li>
                            <li>Quality Assurance & Testing</li>
                        </ul>
                        <a href="#contact" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Platforms Section -->
    <section class="platforms" id="platforms">
        <div class="section-container">
            <div class="platforms-header">
                <div class="section-badge">Our Solutions</div>
                <h2>Specialized <span class="highlight">Platforms</span></h2>
                <p>Industry-specific solutions we've built to address unique business challenges across various sectors in Zimbabwe and beyond.</p>
            </div>
            <div class="platforms-grid">
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">🛡️</div>
                    <h3>Microinsurance Platform</h3>
                    <p>Comprehensive insurance management system designed for the African market, enabling quick policy creation, premium collection, and claims processing.</p>
                    <ul class="platform-features">
                        <li>Mobile money integration</li>
                        <li>SMS-based policy management</li>
                        <li>Automated claims processing</li>
                        <li>Agent management dashboard</li>
                    </ul>
                </div>
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">📱</div>
                    <h3>Bulk SMS Platform</h3>
                    <p>Powerful messaging solution for businesses to reach customers instantly with marketing campaigns, notifications, and alerts.</p>
                    <ul class="platform-features">
                        <li>Multi-network delivery</li>
                        <li>Campaign scheduling & analytics</li>
                        <li>Contact management</li>
                        <li>API integration support</li>
                    </ul>
                </div>
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">🎓</div>
                    <h3>School Management System</h3>
                    <p>Complete educational institution management platform covering student records, academic progress, financial management, and communication.</p>
                    <ul class="platform-features">
                        <li>Student information system</li>
                        <li>Gradebook & report cards</li>
                        <li>Fee management & billing</li>
                        <li>Parent-teacher communication</li>
                    </ul>
                </div>
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">💰</div>
                    <h3>Microfinance Platform</h3>
                    <p>Digital lending solution designed for microfinance institutions, featuring loan origination, risk assessment, and portfolio management.</p>
                    <ul class="platform-features">
                        <li>Credit scoring algorithms</li>
                        <li>Digital loan applications</li>
                        <li>Automated payment processing</li>
                        <li>Risk management dashboard</li>
                    </ul>
                </div>
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">📲</div>
                    <h3>Android Retail Application</h3>
                    <p>Mobile retail solution enabling businesses to manage inventory, process sales, and track customer interactions on Android devices.</p>
                    <ul class="platform-features">
                        <li>Inventory management</li>
                        <li>Point-of-sale system</li>
                        <li>Customer loyalty programs</li>
                        <li>Sales analytics & reporting</li>
                    </ul>
                </div>
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">👥</div>
                    <h3>Payroll & HR Management</h3>
                    <p>Comprehensive human resources platform handling employee records, payroll processing, leave management, and performance tracking.</p>
                    <ul class="platform-features">
                        <li>Automated payroll calculations</li>
                        <li>Employee self-service portal</li>
                        <li>Leave & attendance tracking</li>
                        <li>Performance evaluation tools</li>
                    </ul>
                </div>
                <div class="platform-card animate-on-scroll">
                    <div class="platform-icon">💬</div>
                    <h3>WhatsApp Business Bots</h3>
                    <p>Intelligent chatbots for WhatsApp Business enabling automated customer service, order processing, and engagement campaigns.</p>
                    <ul class="platform-features">
                        <li>Natural language processing</li>
                        <li>Automated responses</li>
                        <li>Order & booking management</li>
                        <li>Customer support integration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Team Section -->
    <section class="team" id="team">
        <div class="section-container">
            <div class="team-header">
                <div class="section-badge">Our Team</div>
                <h2>Team of Experts</h2>
                <p style="color: var(--dark-light);">Ethics and integrity are the bases on which our professionals build their careers. They are fundamentals that become daily attributes.</p>
            </div>
            <div class="team-grid">
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Flavian T Machimbirike</h3>
                    <div class="role">Managing Director</div>
                    <p>Leading innovation in Zimbabwe's tech industry with over a decade of experience in software development and business transformation.</p>
                    <div class="team-social">
                        <a href="mailto:flavian@logatech.co.zw" class="social-link" target="_blank">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Takaedza Hakunavanhu</h3>
                    <div class="role">Chief Technology Officer</div>
                    <p>Expert in system architecture and integration services, specializing in creating scalable solutions for enterprise clients across Southern Africa.</p>
                    <div class="team-social">
                        <a href="mailto:taka@logatech.co.zw" class="social-link" target="_blank">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Marvelous T Chimusoro</h3>
                    <div class="role">Lead Developer</div>
                    <p>Full-stack developer with expertise in modern frameworks and technologies, passionate about creating user-centric applications that drive business growth.</p>
                    <div class="team-social">
                        <a href="mailto:marveloustchimusoro@gmail.com" class="social-link" target="_blank">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="team-member animate-on-scroll">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Takunda J Muyengwa</h3>
                    <div class="role">Mobile Developer</div>
                    <p>Specialist in mobile apps development and infrastructure management, ensuring our solutions are reliable, scalable, and performant in production environments.</p>
                    <div class="team-social">
                        <!-- Email -->
                        <a href="mailto:takundajmuyengwa@gmail.com" class="social-link" target="_blank">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/takunda-joshua-muyengwa" class="social-link" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <!-- GitHub -->
                        <a href="https://github.com/" class="social-link" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
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
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-text">info@logatech.co.zw</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone"></i></div>
                            <div class="contact-text">+263 719 288 500</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone"></i></div>
                            <div class="contact-text">+260 767 492 836</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-text">Harare, Zimbabwe</div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" name="fullname" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                    <p id="formResponse" style="margin-top:10px;"></p>
                </div>
                
                <script>
                document.getElementById('contactForm').addEventListener('submit', async function(e){
                    e.preventDefault();
                
                    const fullname = this.fullname.value;
                    const email = this.email.value;
                    const subject = this.subject.value;
                    const message = this.message.value;
                
                    const payload = {
                        emails: [
                            {
                                receipient: {
                                    fullname: fullname,
                                    email: "info@logatech.co.zw"
                                },
                                subject: subject,
                                contentType: "text/plain",
                                bodyText: `From: ${fullname} <${email}>\n\n${message}`
                            }
                        ]
                    };
                
                    try {
                        const response = await fetch('http://167.86.88.166:9104/notification-service/emails/send', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        });
                
                        const data = await response.json();
                
                        if (response.ok && data.status === 200) {
                            document.getElementById('formResponse').textContent = "Thank you! Your message has been sent.";
                            document.getElementById('formResponse').style.color = 'green';
                            this.reset();
                        } else {
                            document.getElementById('formResponse').textContent = "Oops! Something went wrong. Try again.";
                            document.getElementById('formResponse').style.color = 'red';
                        }
                    } catch (error) {
                        console.error(error);
                        document.getElementById('formResponse').textContent = "Error sending message. Please try again later.";
                        document.getElementById('formResponse').style.color = 'red';
                    }
                });
                </script>
                
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
                    <li><a href="#platforms">Microinsurance Platform</a></li>
                    <li><a href="#platforms">SMS Platform</a></li>
                    <li><a href="#platforms">School Management</a></li>
                    <li><a href="#platforms">HR Management</a></li>
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
        <div class="footer-bottom" style="text-align: center; display: flex; flex-direction: column; gap: 10px; align-items: center; padding: 20px 0;">
            <p>&copy; <span id="currentYear"></span> Logarithm Corporation Private Limited. All rights reserved.</p>
            
            <div style="text-align: center;">
                <p>Website by Allyson Mc</p>
                <a href="https://wa.me/263772131956" class="social-link" target="_blank" style="display: inline-block; margin-top: 5px;">
                    <i class="fab fa-whatsapp" style="font-size: 1.5rem;"></i>
                </a>
            </div>
        </div>
        
        <script>
          document.getElementById('currentYear').textContent = new Date().getFullYear();
        </script>
        
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

       
        // Enhanced card interactions
        document.querySelectorAll('.service-card, .platform-card, .team-member').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
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

        // Dynamic floating particles in hero
        function createFloatingParticle() {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: ${Math.random() * 6 + 3}px;
                height: ${Math.random() * 6 + 3}px;
                background: var(--primary);
                border-radius: 50%;
                pointer-events: none;
                opacity: ${Math.random() * 0.3 + 0.1};
                animation: floatUp 6s linear infinite;
                left: ${Math.random() * 100}%;
                bottom: -10px;
                z-index: 1;
            `;
            
            const heroParticles = document.querySelector('.floating-particles');
            if (heroParticles) {
                heroParticles.appendChild(particle);
                
                setTimeout(() => {
                    particle.remove();
                }, 6000);
            }
        }

        // Create floating particles periodically
        setInterval(createFloatingParticle, 3000);

        // Add CSS for floating particle animation
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            @keyframes floatUp {
                0% {
                    transform: translateY(0) translateX(0) rotate(0deg);
                    opacity: 0;
                }
                10% {
                    opacity: 0.3;
                }
                90% {
                    opacity: 0.3;
                }
                100% {
                    transform: translateY(-100vh) translateX(${Math.random() * 100 - 50}px) rotate(360deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(particleStyle);

        // Typing effect for hero title
        function typeWriter(element, text, speed = 50) {
            let i = 0;
            element.innerHTML = '';
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                }
            }
            typing();
        }

        // Initialize typing effect when page loads
        window.addEventListener('load', function() {
            const heroTitle = document.querySelector('.hero h1');
            const originalText = heroTitle.textContent;
            setTimeout(() => {
                typeWriter(heroTitle, originalText, 30);
            }, 1000);
        });

        // Service card hover effects with 3D transform
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(20px)`;
            });
            
            card.addEventListener('mouseleave', function() {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
            });
        });

        // Platform cards stagger animation
        function staggerAnimation() {
            const platformCards = document.querySelectorAll('.platform-card');
            platformCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        }

        // Call stagger animation when platforms section is visible
        const platformsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('stagger-animated')) {
                    entry.target.classList.add('stagger-animated');
                    staggerAnimation();
                }
            });
        }, { threshold: 0.3 });

        const platformsSection = document.querySelector('.platforms');
        if (platformsSection) {
            platformsObserver.observe(platformsSection);
        }

        // Team member card flip effect on mobile
        if (window.innerWidth <= 768) {
            document.querySelectorAll('.team-member').forEach(member => {
                member.addEventListener('click', function() {
                    this.style.transform = this.style.transform.includes('rotateY(180deg)')
                        ? 'rotateY(0deg)'
                        : 'rotateY(180deg)';
                });
            });
        }

        // Scroll progress indicator
        function updateScrollProgress() {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollTop / scrollHeight) * 100;
            
            // Create progress bar if it doesn't exist
            let progressBar = document.querySelector('.scroll-progress');
            if (!progressBar) {
                progressBar = document.createElement('div');
                progressBar.className = 'scroll-progress';
                progressBar.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: ${scrolled}%;
                    height: 3px;
                    background: var(--gradient);
                    z-index: 9999;
                    transition: width 0.3s ease;
                `;
                document.body.appendChild(progressBar);
            } else {
                progressBar.style.width = scrolled + '%';
            }
        }

        window.addEventListener('scroll', updateScrollProgress);

        // Initialize AOS (Animate On Scroll) alternative
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        
        const animationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animateElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(50px)';
            el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            animationObserver.observe(el);
        });

        // Contact form validation
        const contactForm = document.querySelector('.contact-form form');
        const inputs = contactForm.querySelectorAll('input, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.style.borderColor = '#dc2626';
                } else {
                    this.style.borderColor = 'var(--primary)';
                }
            });
            
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary)';
            });
        });

        // Add loading spinner for form submission
        function showLoadingSpinner(button) {
            const spinner = document.createElement('div');
            spinner.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            spinner.style.marginRight = '0.5rem';
            button.insertBefore(spinner, button.firstChild);
        }

      

        // Performance optimization: Lazy load images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Error handling for failed animations
        window.addEventListener('error', function(e) {
            console.log('Animation error caught:', e);
        });

        // Preloader (optional)
        function showPreloader() {
            const preloader = document.createElement('div');
            preloader.id = 'preloader';
            preloader.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: var(--dark);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10000;
                transition: opacity 0.5s ease;
            `;
            preloader.innerHTML = `
                <div style="text-align: center; color: var(--primary);">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">
                        <i class="fas fa-code fa-spin"></i>
                    </div>
                    <p>Loading.....</p>
                </div>
            `;
            document.body.appendChild(preloader);
            
            window.addEventListener('load', () => {
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => {
                        preloader.remove();
                    }, 500);
                }, 1000);
            });
        }

        // Initialize preloader
        showPreloader();
    </script>
</body>
</html>
