<!DOCTYPE html>
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
                <li><a href="#">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <button class="btn btn-outline" onclick="showPage('login')">Login</button>
                <button class="btn btn-primary" onclick="showPage('register')">Register</button>
            </div>
        </div>
    </nav>

    

    <!-- Login Page -->
    <div id="login-page" class="page-container active">
        <div class="form-container">
            <div class="form-title">
                <h2>Login to Your Account</h2>
                <p>Welcome back! Please enter your details</p>
            </div>
            <form id="login-form">
                <div class="form-group">
                    <label for="login-email">Email Address</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="login-email" class="form-control" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="login-password" class="form-control" placeholder="Enter your password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('login-password')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#" style="float: right; color: var(--accent); text-decoration: none;">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Sign In</button>
            </form>
            <div class="form-footer">
                Don't have an account? 
                <a href="#" onclick="showPage('register')">Sign up</a>
            </div>
        </div>
    </div>

    <!-- Register Page -->
    <div id="register-page" class="page-container">
        <div class="form-container">
            <div class="form-title">
                <h2>Create Account</h2>
                <p>Join us today! Please enter your details</p>
            </div>
            <form id="register-form">
                <div class="form-group">
                    <label for="register-name">Full Name</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="register-name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="register-email">Email Address</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="register-email" class="form-control" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="register-password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="register-password" class="form-control" placeholder="Create a password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('register-password')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="register-confirm">Confirm Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="register-confirm" class="form-control" placeholder="Confirm your password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('register-confirm')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Create Account</button>
            </form>
            <div class="form-footer">
                Already have an account? 
                <a href="#" onclick="showPage('login')">Sign in</a>
            </div>
        </div>
    </div>

   
  

    <script>
        function showPage(page) {
            document.getElementById('login-page').classList.remove('active');
            document.getElementById('register-page').classList.remove('active');
            
            if (page === 'login') {
                document.getElementById('login-page').classList.add('active');
            } else if (page === 'register') {
                document.getElementById('register-page').classList.add('active');
            }
        }

        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Form submission handlers
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Login functionality would be implemented here!');
        });

        document.getElementById('register-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Registration functionality would be implemented here!');
        });

        // Close forms when clicking outside
        document.addEventListener('click', function(e) {
            const formContainer = document.querySelector('.form-container');
            if (formContainer && !formContainer.contains(e.target) && 
                !e.target.classList.contains('btn') && 
                !e.target.classList.contains('password-toggle') &&
                !e.target.closest('a')) {
                showPage('home');
            }
        });

        function showPage(page) {
            document.getElementById('login-page').classList.remove('active');
            document.getElementById('register-page').classList.remove('active');
            
            if (page === 'login') {
                document.getElementById('login-page').classList.add('active');
            } else if (page === 'register') {
                document.getElementById('register-page').classList.add('active');
            } else if (page === 'home') {
                document.getElementById('login-page').classList.remove('active');
                document.getElementById('register-page').classList.remove('active');
            }
        }
    </script>
</body>
</html>

