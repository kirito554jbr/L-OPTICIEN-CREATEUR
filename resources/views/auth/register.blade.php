<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inscription - L'OPTICIEN CREATEUR</title>
  <meta name="description" content="Créez votre compte L'OPTICIEN CREATEUR">
  <meta name="keywords" content="inscription, register, compte, optique">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Vendor CSS Files (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Additional CSS -->
  <style>
    :root {
      --bs-primary: #106eea;
      --bs-primary-rgb: 16, 110, 234;
      --bs-secondary: #444444;
      --bs-secondary-rgb: 68, 68, 68;
      --bs-dark: #222222;
      --bs-dark-rgb: 34, 34, 34;
      --bs-light: #f5f9ff;
      --bs-light-rgb: 245, 249, 255;
    }
    
    body {
      font-family: 'Roboto', sans-serif;
      color: var(--bs-secondary);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Montserrat', sans-serif;
      color: var(--bs-dark);
    }
    
    .nav-link {
      font-family: 'Open Sans', sans-serif;
      color: var(--bs-secondary);
      font-weight: 500;
      padding: 0.5rem 1rem;
      transition: color 0.3s ease;
    }
    
    .nav-link:hover,
    .nav-link.active {
      color: var(--bs-primary);
    }
    
    .bg-primary-light {
      background-color: rgba(var(--bs-primary-rgb), 0.1);
    }
    
    .text-primary-dark {
      color: rgba(var(--bs-primary-rgb), 0.8);
    }
    
    /* Preloader */
    #preloader {
      position: fixed;
      inset: 0;
      z-index: 9999;
      overflow: hidden;
      background-color: #fff;
      transition: all 0.6s ease-out;
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    #preloader div {
      width: 13px;
      height: 13px;
      background-color: var(--bs-primary);
      border-radius: 50%;
      animation-timing-function: cubic-bezier(0, 1, 1, 0);
      position: absolute;
      left: 50%;
    }
    
    #preloader div:nth-child(1) {
      left: calc(50% + 8px);
      animation: animate-preloader-1 0.6s infinite;
    }
    
    #preloader div:nth-child(2) {
      left: calc(50% + 8px);
      animation: animate-preloader-2 0.6s infinite;
    }
    
    #preloader div:nth-child(3) {
      left: calc(50% + 32px);
      animation: animate-preloader-2 0.6s infinite;
    }
    
    #preloader div:nth-child(4) {
      left: calc(50% + 56px);
      animation: animate-preloader-3 0.6s infinite;
    }
    
    @keyframes animate-preloader-1 {
      0% { transform: scale(0); }
      100% { transform: scale(1); }
    }
    
    @keyframes animate-preloader-3 {
      0% { transform: scale(1); }
      100% { transform: scale(0); }
    }
    
    @keyframes animate-preloader-2 {
      0% { transform: translate(0, 0); }
      100% { transform: translate(24px, 0); }
    }
    
    /* Scroll Top */
    .scroll-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 99999;
      background-color: var(--bs-primary);
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }
    
    .scroll-top i {
      font-size: 24px;
      color: #fff;
      line-height: 0;
    }
    
    .scroll-top:hover {
      background-color: rgba(var(--bs-primary-rgb), 0.8);
    }
    
    .scroll-top.active {
      visibility: visible;
      opacity: 1;
    }
    
    /* Scrolled header */
    body.scrolled .topbar {
      height: 0;
      visibility: hidden;
      overflow: hidden;
    }
    
    body.scrolled #header {
      box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
    }

    /* Navigation styles */
    .navbar-nav .nav-item {
      position: relative;
      margin: 0 5px;
    }

    .navbar-nav .nav-link {
      padding: 0.75rem 1rem;
      font-weight: 500;
      color: var(--bs-secondary);
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: var(--bs-primary);
    }

    .navbar-toggler {
      border: none;
      padding: 0;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    @media (max-width: 991.98px) {
      .navbar-collapse {
        background-color: white;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        margin-top: 1rem;
      }
      
      .navbar-nav {
        text-align: center;
      }
      
      .nav-link {
        padding: 0.75rem 0;
      }
    }
    
    /* Auth Form Styles */
    .auth-section {
      flex: 1;
      display: flex;
      align-items: center;
      padding: 60px 0;
    }
    
    .auth-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    
    .auth-card .card-header {
      background-color: var(--bs-primary);
      color: white;
      text-align: center;
      padding: 1.5rem;
      border-bottom: none;
    }
    
    .auth-card .card-body {
      padding: 2.5rem;
    }
    
    .auth-card .form-control {
      padding: 0.75rem 1rem;
      border-radius: 8px;
    }
    
    .auth-card .form-control:focus {
      border-color: var(--bs-primary);
      box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
    }
    
    .auth-card .btn-primary {
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-weight: 500;
    }
    
    .auth-card .auth-footer {
      text-align: center;
      margin-top: 1.5rem;
      padding-top: 1.5rem;
      border-top: 1px solid #eee;
    }
    
    .auth-card .social-login {
      margin-top: 1.5rem;
    }
    
    .auth-card .social-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin: 0 5px;
      color: white;
      transition: all 0.3s ease;
    }
    
    .auth-card .social-btn:hover {
      transform: translateY(-3px);
    }
    
    .auth-card .social-btn.facebook {
      background-color: #3b5998;
    }
    
    .auth-card .social-btn.google {
      background-color: #dd4b39;
    }
    
    .auth-card .social-btn.twitter {
      background-color: #1da1f2;
    }
    
    .auth-image {
      background-color: var(--bs-light);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    
    .auth-image img {
      max-width: 100%;
      height: auto;
    }
    
    @media (max-width: 991.98px) {
      .auth-image {
        display: none;
      }
    }
    
    /* Password strength */
    .password-strength {
      height: 5px;
      margin-top: 8px;
      background-color: #e9ecef;
      border-radius: 3px;
      position: relative;
    }
    
    .password-strength-meter {
      height: 100%;
      border-radius: 3px;
      transition: width 0.3s ease;
    }
    
    .strength-weak {
      width: 25%;
      background-color: #dc3545;
    }
    
    .strength-medium {
      width: 50%;
      background-color: #ffc107;
    }
    
    .strength-good {
      width: 75%;
      background-color: #0dcaf0;
    }
    
    .strength-strong {
      width: 100%;
      background-color: #198754;
    }
  </style>
</head>

<body>
  <header id="header" class="sticky-top">
    <!-- Top Bar -->
    <div class="topbar bg-primary text-white py-2">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="d-flex align-items-center contact-info">
          <i class="bi bi-envelope d-flex align-items-center me-2">
            <a href="mailto:contact@example.com" class="text-white text-decoration-none ms-1">contact@example.com</a>
          </i>
          <i class="bi bi-phone d-flex align-items-center ms-4">
            <span class="ms-1">+2127 0311 8311</span>
          </i>
        </div>
        <div class="d-none d-md-flex align-items-center social-links">
          <a href="https://www.facebook.com/profile.php?id=100083915019835" class="text-white me-3">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com/lopticien_createur/" class="text-white me-3">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.tiktok.com/@lopticien.createur" class="text-white">
            <i class="bi bi-tiktok"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm">
      <div class="container">
        <!-- Logo and Brand -->
        <a href="index.html" class="navbar-brand d-flex align-items-center">
          <img src="assets/img/logo1.png" alt="L'OPTICIEN CREATEUR Logo" width="60">
          <span class="h3 mb-0 ms-2 fw-bold">L'OPTICIEN CREATEUR</span>
        </a>
        
        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" 
                aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list fs-1"></i>
        </button>
        
        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarMain">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">Qui sommes nous?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./service-details.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produits.html">Produits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="register.html">Inscription</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="auth-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="card auth-card">
              <div class="row g-0">
                <div class="col-lg-6 auth-image">
                  <img src="assets/img/register-image.svg" alt="Register" class="img-fluid" data-aos="zoom-in">
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <h2 class="text-center mb-4 fw-bold">Créer un compte</h2>
                    <form class="needs-validation" novalidate>
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label for="firstName" class="form-label">Prénom</label>
                          <input type="text" class="form-control" id="firstName" placeholder="Prénom" required>
                          <div class="invalid-feedback">
                            Veuillez entrer votre prénom.
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="lastName" class="form-label">Nom</label>
                          <input type="text" class="form-control" id="lastName" placeholder="Nom" required>
                          <div class="invalid-feedback">
                            Veuillez entrer votre nom.
                          </div>
                        </div>
                      </div>
                      
                      <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                          <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-envelope"></i>
                          </span>
                          <input type="email" class="form-control bg-light border-start-0" id="email" placeholder="Entrez votre email" required>
                          <div class="invalid-feedback">
                            Veuillez entrer une adresse email valide.
                          </div>
                        </div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone</label>
                        <div class="input-group">
                          <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-phone"></i>
                          </span>
                          <input type="tel" class="form-control bg-light border-start-0" id="phone" placeholder="Entrez votre numéro de téléphone" required>
                          <div class="invalid-feedback">
                            Veuillez entrer un numéro de téléphone valide.
                          </div>
                        </div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-group">
                          <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-lock"></i>
                          </span>
                          <input type="password" class="form-control bg-light border-start-0" id="password" placeholder="Créez un mot de passe" required>
                          <button class="btn btn-outline-secondary border-start-0" type="button" id="togglePassword">
                            <i class="bi bi-eye"></i>
                          </button>
                          <div class="invalid-feedback">
                            Veuillez créer un mot de passe.
                          </div>
                        </div>
                        <div class="password-strength mt-2">
                          <div class="password-strength-meter"></div>
                        </div>
                        <small class="text-muted">Le mot de passe doit contenir au moins 8 caractères, incluant des lettres majuscules, minuscules, des chiffres et des caractères spéciaux.</small>
                      </div>
                      
                      <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                        <div class="input-group">
                          <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-lock-fill"></i>
                          </span>
                          <input type="password" class="form-control bg-light border-start-0" id="confirmPassword" placeholder="Confirmez votre mot de passe" required>
                          <div class="invalid-feedback">
                            Les mots de passe ne correspondent pas.
                          </div>
                        </div>
                      </div>
                      
                      <div class="mb-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="termsCheck" required>
                          <label class="form-check-label" for="termsCheck">
                            J'accepte les <a href="#" class="text-decoration-none">conditions d'utilisation</a> et la <a href="#" class="text-decoration-none">politique de confidentialité</a>
                          </label>
                          <div class="invalid-feedback">
                            Vous devez accepter les conditions avant de vous inscrire.
                          </div>
                        </div>
                      </div>
                      
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                      </div>
                      
                      <div class="auth-footer">
                        <p>Vous avez déjà un compte? <a href="login.html" class="text-decoration-none fw-bold">Se connecter</a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center py-4 border-top">
      <p class="mb-0">© <span>Copyright</span> <strong class="px-1 sitename">L'OPTICIEN CREATEUR</strong> <span>Tous les droits réservés!</span></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Main JS File -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      
      
      // Toggle password visibility
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');
      
      if (togglePassword && password) {
        togglePassword.addEventListener('click', function() {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          
          // Toggle eye icon
          const eyeIcon = togglePassword.querySelector('i');
          eyeIcon.classList.toggle('bi-eye');
          eyeIcon.classList.toggle('bi-eye-slash');
        });
      }
      
      // Password strength meter
      const passwordInput = document.getElementById('password');
      const strengthMeter = document.querySelector('.password-strength-meter');
      
      if (passwordInput && strengthMeter) {
        passwordInput.addEventListener('input', function() {
          const value = passwordInput.value;
          let strength = 0;
          
          // Check password length
          if (value.length >= 8) {
            strength += 1;
          }
          
          // Check for lowercase and uppercase letters
          if (/[a-z]/.test(value) && /[A-Z]/.test(value)) {
            strength += 1;
          }
          
          // Check for numbers
          if (/\d/.test(value)) {
            strength += 1;
          }
          
          // Check for special characters
          if (/[^a-zA-Z0-9]/.test(value)) {
            strength += 1;
          }
          
          // Update strength meter
          strengthMeter.className = 'password-strength-meter';
          
          if (value.length === 0) {
            strengthMeter.style.width = '0';
          } else if (strength === 1) {
            strengthMeter.classList.add('strength-weak');
          } else if (strength === 2) {
            strengthMeter.classList.add('strength-medium');
          } else if (strength === 3) {
            strengthMeter.classList.add('strength-good');
          } else if (strength === 4) {
            strengthMeter.classList.add('strength-strong');
          }
        });
      }
      
      // Confirm password validation
      const confirmPassword = document.getElementById('confirmPassword');
      
      if (passwordInput && confirmPassword) {
        confirmPassword.addEventListener('input', function() {
          if (passwordInput.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Les mots de passe ne correspondent pas.');
          } else {
            confirmPassword.setCustomValidity('');
          }
        });
      }
      
      // Form validation
      const forms = document.querySelectorAll('.needs-validation');
      
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          
          form.classList.add('was-validated');
        }, false);
      });
      
      // Preloader
      let preloader = document.getElementById('preloader');
      if (preloader) {
        window.addEventListener('load', () => {
          setTimeout(() => {
            preloader.remove();
          }, 1000);
        });
      }
      
      // Back to top button
      let backtotop = document.querySelector('.scroll-top');
      if (backtotop) {
        const toggleBacktotop = () => {
          if (window.scrollY > 100) {
            backtotop.classList.add('active');
          } else {
            backtotop.classList.remove('active');
          }
        };
        window.addEventListener('load', toggleBacktotop);
        window.addEventListener('scroll', toggleBacktotop);
      }
      
      // Header scroll effect
      let selectHeader = document.getElementById('header');
      if (selectHeader) {
        const headerScrolled = () => {
          if (window.scrollY > 100) {
            document.body.classList.add('scrolled');
          } else {
            document.body.classList.remove('scrolled');
          }
        };
        window.addEventListener('load', headerScrolled);
        window.addEventListener('scroll', headerScrolled);
      }
    });
  </script>
</body>
</html>

