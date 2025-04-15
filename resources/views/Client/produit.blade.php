<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Produits - L'OPTICIEN CREATEUR</title>
    <meta name="description" content="Découvrez notre collection de lunettes et accessoires optiques">
    <meta name="keywords" content="lunettes, montures, verres, optique, opticien">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS Files (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet">

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
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
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

        /* Animation */
        @keyframes up-down {
            0% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
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
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes animate-preloader-3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes animate-preloader-2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
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

        /* Product styles */
        .product-card {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .product-card .card-img-top {
            transition: all 0.5s ease;
            height: 250px;
            object-fit: cover;
        }

        .product-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2;
        }

        .product-price {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--bs-primary);
        }

        .product-price .old-price {
            text-decoration: line-through;
            color: var(--bs-secondary);
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }

        .product-category {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--bs-secondary);
        }

        .filter-button {
            border: 1px solid #ddd;
            background-color: white;
            color: var(--bs-secondary);
            transition: all 0.3s ease;
        }

        .filter-button:hover,
        .filter-button.active {
            background-color: var(--bs-primary);
            color: white;
            border-color: var(--bs-primary);
        }

        .page-banner {
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url("assets/img/hero-bg.jpg") center center;
            background-size: cover;
            padding: 80px 0;
            position: relative;
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
                        <a href="mailto:contact@example.com"
                            class="text-white text-decoration-none ms-1">contact@example.com</a>
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
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list fs-1"></i>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#about">Qui sommes nous?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service-details.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="produits.html">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#catalog">Catalogue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Page Banner -->
        <section class="page-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="fw-bold mb-4">Nos Produits</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"
                                        class="text-decoration-none">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Produits</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products py-5">
            <div class="container">
                <!-- Filter Buttons -->
                <div class="row mb-5" data-aos="fade-up">
                    <div class="col-12 text-center">
                        <div class="filter-buttons">
                            <button class="btn filter-button active mx-1 mb-2" data-filter="*">Tous</button>
                            <button class="btn filter-button mx-1 mb-2" data-filter="lunettes-vue">Lunettes de
                                Vue</button>
                            <button class="btn filter-button mx-1 mb-2" data-filter="lunettes-soleil">Lunettes de
                                Soleil</button>
                            <button class="btn filter-button mx-1 mb-2" data-filter="lentilles">Lentilles de
                                Contact</button>
                            <button class="btn filter-button mx-1 mb-2" data-filter="accessoires">Accessoires</button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
                    <!-- Product 1 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item lunettes-vue">
                        <div class="card product-card h-100 shadow-sm">
                            <span class="badge bg-primary product-badge">Nouveau</span>
                            <img src="{{ asset('assets/masonry-portfolio/' . '1.jpg') }}" class="card-img-top"
                                alt="Lunettes de vue modèle Danien">
                            <div class="card-body">
                                <p class="product-category mb-1">Lunettes de Vue</p>
                                <h5 class="card-title fw-bold">Danien Classic</h5>
                                <p class="card-text">Monture élégante pour hommes et femmes, avec option 2 en 1
                                    incluant un clip solaire magnétique.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span class="old-price">1200 DH</span>
                                        <span>950 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item lunettes-vue">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset('assets/masonry-portfolio/' . '2.jpg') }}" class="card-img-top"
                                alt="Lunettes de vue modèle Élégance">
                            <div class="card-body">
                                <p class="product-category mb-1">Lunettes de Vue</p>
                                <h5 class="card-title fw-bold">Élégance Pro</h5>
                                <p class="card-text">Monture légère en titane avec design minimaliste, parfaite pour un
                                    usage professionnel quotidien.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span>850 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item lunettes-soleil">
                        <div class="card product-card h-100 shadow-sm">
                            <span class="badge bg-danger product-badge">Promo</span>
                            <img src="{{ asset('assets/masonry-portfolio/' . '3.jpg') }}" class="card-img-top"
                                alt="Lunettes de soleil modèle Urban">
                            <div class="card-body">
                                <p class="product-category mb-1">Lunettes de Soleil</p>
                                <h5 class="card-title fw-bold">Urban Style</h5>
                                <p class="card-text">Lunettes de soleil tendance avec protection UV400 et verres
                                    polarisés pour une vision claire et nette.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span class="old-price">950 DH</span>
                                        <span>750 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item lunettes-soleil">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset('assets/masonry-portfolio/' . '4.jpg') }}" class="card-img-top"
                                alt="Lunettes de soleil modèle Sport">
                            <div class="card-body">
                                <p class="product-category mb-1">Lunettes de Soleil</p>
                                <h5 class="card-title fw-bold">Sport Pro</h5>
                                <p class="card-text">Conçues pour les activités sportives, ces lunettes offrent une
                                    excellente adhérence et une protection optimale.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span>890 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item lentilles">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset('assets/masonry-portfolio/' . '5.jpg') }}" class="card-img-top"
                                alt="Lentilles journalières">
                            <div class="card-body">
                                <p class="product-category mb-1">Lentilles de Contact</p>
                                <h5 class="card-title fw-bold">Daily Comfort</h5>
                                <p class="card-text">Lentilles journalières ultra-confortables avec hydratation longue
                                    durée. Boîte de 30 paires.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span>350 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item lentilles">
                        <div class="card product-card h-100 shadow-sm">
                            <span class="badge bg-primary product-badge">Nouveau</span>
                            <img src="{{ asset('assets/masonry-portfolio/' . '6.jpg') }}" class="card-img-top"
                                alt="Lentilles mensuelles">
                            <div class="card-body">
                                <p class="product-category mb-1">Lentilles de Contact</p>
                                <h5 class="card-title fw-bold">Monthly Elite</h5>
                                <p class="card-text">Lentilles mensuelles avec technologie avancée pour une respiration
                                    optimale de la cornée. Boîte de 3 paires.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span>450 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item accessoires">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset('assets/masonry-portfolio/' . '7.jpg') }}" class="card-img-top"
                                alt="Étui à lunettes">
                            <div class="card-body">
                                <p class="product-category mb-1">Accessoires</p>
                                <h5 class="card-title fw-bold">Étui Premium</h5>
                                <p class="card-text">Étui rigide en cuir véritable avec intérieur en microfibre pour
                                    protéger vos lunettes des rayures.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span>180 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 product-item accessoires">
                        <div class="card product-card h-100 shadow-sm">
                            <span class="badge bg-danger product-badge">Promo</span>
                            <img src="{{ asset('assets/masonry-portfolio/' . '8.jpg') }}" class="card-img-top"
                                alt="Kit de nettoyage">
                            <div class="card-body">
                                <p class="product-category mb-1">Accessoires</p>
                                <h5 class="card-title fw-bold">Kit de Nettoyage Complet</h5>
                                <p class="card-text">Ensemble complet avec spray nettoyant, chiffon en microfibre et
                                    brosse pour un entretien optimal de vos lunettes.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <span class="old-price">120 DH</span>
                                        <span>90 DH</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="row mt-5">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"
                                        aria-disabled="true">Précédent</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Suivant</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta py-5 bg-primary-light">
            <div class="container text-center py-4" data-aos="zoom-in">
                <h2 class="fw-bold mb-4">Besoin d'un conseil personnalisé?</h2>
                <p class="mb-4">Nos opticiens experts sont à votre disposition pour vous aider à choisir les produits
                    adaptés à vos besoins.</p>
                <a href="index.html#contact" class="btn btn-primary px-4 py-2">Contactez-nous</a>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="footer-newsletter bg-primary-light py-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4 class="fs-4 fw-bold mb-3">Rejoignez notre compagne publicitaire</h4>
                        <p>S'abonner!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Votre email"
                                    required>
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Ton enregistrement a reussi. Merci!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top py-5">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center text-decoration-none">
                        <span class="sitename h3 text-dark fw-bold">L'OPTICIEN CREATEUR</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p class="mb-1">Igui Ikiou Drarga</p>
                        <p class="mb-3">Agadir, 80044</p>
                        <p class="mb-1"><strong>Phone:</strong> <span>0703118311</span></p>
                        <p><strong>Email:</strong> <span>contact@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 class="fw-bold mb-4 fs-5">Liens utiles</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="assets/guide_lunettes.pdf" class="text-decoration-none text-secondary">guide
                                lunettes</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="produits.html" class="text-decoration-none text-secondary">Catalogue
                                Lunettes</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 class="fw-bold mb-4 fs-5">Nos Services</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="index.html#services" class="text-decoration-none text-secondary">Examen de la
                                vue et contrôle de la vision</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="index.html#services" class="text-decoration-none text-secondary">Conseil et
                                vente de lunettes de vue et de soleil</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="index.html#services" class="text-decoration-none text-secondary">Adaptation et
                                vente de lentilles de contact</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="index.html#services" class="text-decoration-none text-secondary">Réparation et
                                entretien de lunettes</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4 class="fw-bold mb-4 fs-5">Nous suivre</h4>
                    <p>Voyez plus loin, vivez mieux – Suivez-moi pour une vision claire et des conseils stylés !</p>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/profile.php?id=100083915019835"
                            class="facebook btn btn-outline-primary rounded-circle p-2 me-2"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/lopticien_createur/"
                            class="instagram btn btn-outline-primary rounded-circle p-2 me-2"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@lopticien.createur"
                            class="Tik-Tok btn btn-outline-primary p-2">Tik-Tok<i class="bi bi-t ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4 py-4 border-top">
            <p class="mb-0">© <span>Copyright</span> <strong class="px-1 sitename">L'OPTICIEN CREATEUR</strong>
                <span>Tous les droits réservés!</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script src="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/purecounter@1.5.0/dist/purecounter_vanilla.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script>
        /**
         * Template Name: BizLand
         * Updated: Mar 2025
         * Author: BootstrapMade.com
         */
        (function() {
            "use strict";

            /**
             * Easy selector helper function
             */
            const select = (el, all = false) => {
                el = el.trim();
                if (all) {
                    return [...document.querySelectorAll(el)];
                } else {
                    return document.querySelector(el);
                }
            };

            /**
             * Easy event listener function
             */
            const on = (type, el, listener, all = false) => {
                let selectEl = select(el, all);
                if (selectEl) {
                    if (all) {
                        selectEl.forEach(e => e.addEventListener(type, listener));
                    } else {
                        selectEl.addEventListener(type, listener);
                    }
                }
            };

            /**
             * Easy on scroll event listener 
             */
            const onscroll = (el, listener) => {
                el.addEventListener('scroll', listener);
            };

            /**
             * Navbar links active state on scroll
             */
            let navbarlinks = select('#navbarMain .nav-link', true);
            const navbarlinksActive = () => {
                let position = window.scrollY + 200;
                navbarlinks.forEach(navbarlink => {
                    if (!navbarlink.hash) return;
                    let section = select(navbarlink.hash);
                    if (!section) return;
                    if (position >= section.offsetTop && position <= (section.offsetTop + section
                            .offsetHeight)) {
                        navbarlink.classList.add('active');
                    } else {
                        navbarlink.classList.remove('active');
                    }
                });
            };
            window.addEventListener('load', navbarlinksActive);
            onscroll(document, navbarlinksActive);

            /**
             * Toggle .header-scrolled class to #header when page is scrolled
             */
            let selectHeader = select('#header');
            if (selectHeader) {
                const headerScrolled = () => {
                    if (window.scrollY > 100) {
                        document.body.classList.add('scrolled');
                    } else {
                        document.body.classList.remove('scrolled');
                    }
                };
                window.addEventListener('load', headerScrolled);
                onscroll(document, headerScrolled);
            }

            /**
             * Back to top button
             */
            let backtotop = select('.scroll-top');
            if (backtotop) {
                const toggleBacktotop = () => {
                    if (window.scrollY > 100) {
                        backtotop.classList.add('active');
                    } else {
                        backtotop.classList.remove('active');
                    }
                };
                window.addEventListener('load', toggleBacktotop);
                onscroll(document, toggleBacktotop);
            }

            /**
             * Preloader
             */
            let preloader = select('#preloader');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.remove();
                    }, 1000);
                });
            }

            /**
             * Animation on scroll
             */
            window.addEventListener('load', () => {
                AOS.init({
                    duration: 1000,
                    easing: 'ease-in-out',
                    once: true,
                    mirror: false
                });
            });

            /**
             * Initiate Pure Counter 
             */
            new PureCounter();

            /**
             * Initiate glightbox 
             */
            const glightbox = GLightbox({
                selector: '.glightbox'
            });

            /**
             * Product filtering
             */
            window.addEventListener('load', () => {
                let productContainer = select('.products .row');
                if (productContainer) {
                    let productIsotope = new Isotope(productContainer, {
                        itemSelector: '.product-item',
                        layoutMode: 'fitRows'
                    });

                    let productFilters = select('.filter-buttons .filter-button', true);

                    on('click', '.filter-button', function(e) {
                        e.preventDefault();
                        productFilters.forEach(function(el) {
                            el.classList.remove('active');
                        });
                        this.classList.add('active');

                        let filterValue = this.getAttribute('data-filter');
                        if (filterValue === '*') {
                            productIsotope.arrange({
                                filter: '*'
                            });
                        } else {
                            productIsotope.arrange({
                                filter: `.${filterValue}`
                            });
                        }
                        AOS.refresh();
                    }, true);
                }
            });

        })();
    </script>
</body>

</html>
