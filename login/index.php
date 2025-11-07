ser<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureGuard - Advanced Security Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #3b82f6;
            --accent-dark: #1d4ed8;
            --light: #f8fafc;
            --gray: #94a3b8;
        }

        body {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--light);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        nav {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(59, 130, 246, 0.2);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--light);
            text-decoration: none;
        }

        .logo i {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--light);
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background: var(--accent-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--light);
            border: 2px solid var(--accent);
        }

        .btn-outline:hover {
            background: var(--accent);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            opacity: 0.2;
            z-index: -1;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .hero h1 span {
            color: var(--accent);
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--gray);
            margin-bottom: 2rem;
        }

        /* Forms */
        .form-container {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 2.5rem;
            margin: 4rem auto;
            max-width: 450px;
            border: 1px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        .form-title {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-title h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--gray);
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent);
        }

        .form-control {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 8px;
            color: var(--light);
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
        }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--gray);
        }

        .form-footer a {
            color: var(--accent);
            text-decoration: none;
            margin-left: 0.5rem;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Services Section */
        .section {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: rgba(30, 41, 59, 0.6);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s, border-color 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        /* Features Section */
        .features {
            background: rgba(15, 23, 42, 0.7);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .feature-icon {
            color: var(--accent);
            font-size: 1.5rem;
            margin-top: 0.25rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            background: rgba(30, 41, 59, 0.6);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        /* Footer */
        footer {
            background: var(--primary);
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-column h3 {
            color: var(--light);
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .section {
                padding: 4rem 0;
            }

            .form-container {
                margin: 2rem 1rem;
                padding: 2rem;
            }
        }

        /* Login/Register Toggle */
        .page-container {
            display: none;
        }

        .page-container.active {
            display: block;
        }

        .toggle-forms {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--gray);
        }

        .toggle-forms a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .toggle-forms a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container nav-container">
            <a href="#" class="logo">
                <i class="fas fa-shield-alt"></i>
                SecureGuard
            </a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="login.php" class="btn btn-outline">Login</a>
                <a href="register.php" class="btn btn-primary">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
   <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Advanced Security <span>Solutions</span></h1>
                <p>Protecting your business and assets with cutting-edge security technology and expert professionals.</p>
                <div class="auth-buttons">
                    <button class="btn btn-primary" onclick="showPage('register')" style="margin-right: 1rem;">
                        Get Started <i class="fas fa-arrow-right"></i>
                    </button>
                    <button class="btn btn-outline" onclick="showPage('login')">Login</button>
                </div>
            </div>
        </div>
    </section>
    </section>

     <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Security Services</h2>
                <p>Comprehensive security solutions tailored to protect your business and assets.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Physical Security</h3>
                    <p>Professional security guards, access control systems, and perimeter protection to safeguard your premises.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Cyber Security</h3>
                    <p>Advanced cybersecurity solutions to protect your digital assets and data from online threats.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Surveillance</h3>
                    <p>State-of-the-art CCTV systems and monitoring services for 24/7 protection and oversight.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose SecureGuard?</h2>
                <p>Industry-leading security solutions with proven results and exceptional service.</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-24"></i>
                    </div>
                    <div>
                        <h3>24/7 Support</h3>
                        <p>Round-the-clock security monitoring and support for complete peace of mind.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <h3>Certified Professionals</h3>
                        <p>All our security personnel are certified and trained to the highest standards.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h3>Advanced Technology</h3>
                        <p>Latest security technology integrated with traditional security methods.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shapes"></i>
                    </div>
                    <div>
                        <h3>Custom Solutions</h3>
                        <p>Tailored security plans designed specifically for your unique requirements.</p>
                    </div>
                </div>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">10+</div>
                    <h3>Years Experience</h3>
                    <p>Proven track record in security services</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <h3>Happy Clients</h3>
                    <p>Satisfied customers across various industries</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <h3>Availability</h3>
                    <p>Continuous protection and monitoring</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number">99.9%</div>
                    <h3>Success Rate</h3>
                    <p>Proven effectiveness in security operations</p>
                </div>
            </div>
        </div>
    </section>

          <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>SecureGuard</h3>
                    <p>Advanced security solutions for businesses and organizations.</p>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Physical Security</a></li>
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">Surveillance</a></li>
                        <li><a href="#">Consulting</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> info@secureguard.com</li>
                        <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Security St, NY</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 SecureGuard. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>

