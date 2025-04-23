<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'OPTICIEN CREATEUR</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* Custom Styles */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://latelier88opticiens.com/wp-content/uploads/mutu/2021/03/slider-magasin-atelier-optique-c-1500x570.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            position: relative;
        }

        .feature-card {
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .stat-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #0d6efd;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .catalog-img {
            transition: transform 0.3s ease;
        }

        .catalog-img:hover {
            transform: scale(1.05);
        }

        .testimonial-section {
            background-color: #1a1a1a;
            color: white;
        }

        .partner-logo {
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a href="index.html" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('assets/' . 'logo1.png') }}" alt="Logo" width="60">
                <h1 class="h3 mb-0 ms-2">L'OPTICIEN CREATEUR</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Qui sommes nous?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ProduitClient">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rendez_vous">Rendez-vous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                @guest
                    <a href="{{ route('Tologin') }}" class="btn btn-outline-primary me-2">Se connecter</a>
                    <a href="{{ route('Toregister') }}" class="btn btn-primary me-2">S'inscrire</a>
                @endguest
                @auth
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Mon Compte
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/profile">Profil</a></li>
                        <li><a class="dropdown-item" href="/logout">Se déconnecter</a></li>
                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="text-white display-4 slide-in-left">Bienvenue à <span class="text-primary">l'opticien
                            createur</span></h1>
                    <p class="text-white mb-4 slide-in-left">Découvrez notre collection exclusive de lunettes et
                        bénéficiez de notre expertise professionnelle.</p>
                    <div class="slide-in-left">
                        <a href="#about" class="btn btn-primary btn-lg me-3">En savoir plus</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="feature-card text-center p-4 shadow-sm rounded fade-in">
                        <i class="bi bi-eye-fill text-primary fs-1 mb-3"></i>
                        <h4>Expertise et Précision</h4>
                        <p class="text-muted">Examens de vue professionnels</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card text-center p-4 shadow-sm rounded fade-in">
                        <i class="bi bi-person-check-fill text-primary fs-1 mb-3"></i>
                        <h4>Service Personnalisé</h4>
                        <p class="text-muted">Conseils adaptés à vos besoins</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card text-center p-4 shadow-sm rounded fade-in">
                        <i class="bi bi-stars text-primary fs-1 mb-3"></i>
                        <h4>Style et Tendance</h4>
                        <p class="text-muted">Collections exclusives</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card text-center p-4 shadow-sm rounded fade-in">
                        <i class="bi bi-award-fill text-primary fs-1 mb-3"></i>
                        <h4>Qualité et Durabilité</h4>
                        <p class="text-muted">Matériaux premium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fade-in">Qui sommes nous?</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/' . 'about.jpg') }}" alt="Notre boutique"
                        class="img-fluid rounded shadow fade-in">
                </div>
                <div class="col-lg-6">
                    <div class="slide-in-right">
                        <h3 class="mb-4">L'OPTICIEN CREATEUR</h3>
                        <p>Notre expertise et notre passion pour l'optique nous permettent de vous offrir un service
                            personnalisé et des produits de haute qualité.</p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i>Expertise
                                professionnelle</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i>Service
                                personnalisé</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i>Produits de
                                qualité</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="stat-circle fade-in">
                        <span class="counter display-6 fw-bold" data-target="1000">0</span>
                        <span>Clients</span>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="stat-circle fade-in">
                        <span class="counter display-6 fw-bold" data-target="2500">0</span>
                        <span>Montures</span>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="stat-circle fade-in">
                        <span class="counter display-6 fw-bold" data-target="1463">0</span>
                        <span>Examens</span>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="stat-circle fade-in">
                        <span class="counter display-6 fw-bold" data-target="1000">0</span>
                        <span>Réparations</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-4 col-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('assets/' . 'client-1.png') }}" alt="Partner 1" class="img-fluid partner-logo">
                </div>
                <div class="col-4 col-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('assets/' . 'client-2.png') }}" alt="Partner 2" class="img-fluid partner-logo">
                </div>
                <div class="col-4 col-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('assets/' . 'client-3.png') }}" alt="Partner 3" class="img-fluid partner-logo">
                </div>
                <div class="col-4 col-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('assets/' . 'client-4.png') }}" alt="Partner 4" class="img-fluid partner-logo">
                </div>
                <div class="col-4 col-md-2">
                    <img src="{{ asset('assets/' . 'client-5.png') }}" alt="Partner 5" class="img-fluid partner-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Voir Nos Prestations</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm fade-in">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-eyeglasses text-primary fs-1 mb-3"></i>
                            <h4>Examen de Vue Complet</h4>
                            <p class="text-muted">Évaluation approfondie de votre vision avec des équipements de
                                pointe.</p>
                            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm fade-in">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-people text-primary fs-1 mb-3"></i>
                            <h4>Conseil et Choix</h4>
                            <p class="text-muted">Accompagnement personnalisé pour trouver vos lunettes parfaites.</p>
                            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm fade-in">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                            <h4>Service Après-Vente</h4>
                            <p class="text-muted">Entretien et ajustement de vos lunettes pour une satisfaction
                                durable.</p>
                            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center fade-in">
                    <img src="/placeholder.svg?height=80&width=80" alt="Client" class="rounded-circle mb-4"
                        width="80">
                    <p class="lead mb-4">"Un service exceptionnel et des conseils professionnels. Je recommande
                        vivement L'OPTICIEN CREATEUR pour leur expertise et leur attention aux détails."</p>
                    <h5 class="mb-0">Marie Dupont</h5>
                    <small class="text-muted">Cliente satisfaite</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section id="portfolio" class="portfolio section py-5">
        <div class="container section-title mb-5 text-center" data-aos="fade-up">
            <h2 class="badge bg-primary-light text-primary px-3 py-2 rounded-pill text-uppercase fw-bold fs-6">Galerie
            </h2>
            <p class="display-5 mt-3 fw-bold">
                <span>Visiter&nbsp;</span> <span class="description-title text-primary">Catalogue du mois</span>
            </p>
        </div>

        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-3 col-md-4 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 class="fw-bold">Danien</h4>
                            <p>Propose des modèles pour hommes et femmes, incluant des options 2 en 1 avec des clips
                                solaires.</p>
                            <a href="assets/img/masonry-portfolio/1.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 class="fw-bold">Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/2.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 class="fw-bold">Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/3.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 class="fw-bold">Danien</h4>
                            <p>Propose des modèles pour hommes et femmes, incluant des options 2 en 1 avec des clips
                                solaires.</p>
                            <a href="assets/img/masonry-portfolio/1.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Additional portfolio items would go here -->
                    <!-- For brevity, I'm showing just a few, but you would include all 20 items -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section py-5 bg-light">
        <div class="container section-title mb-5 text-center" data-aos="fade-up">
            <h2 class="badge bg-primary-light text-primary px-3 py-2 rounded-pill text-uppercase fw-bold fs-6">Contact
            </h2>
            <p class="display-5 mt-3 fw-bold">
                <span>Besoin d'aide?</span> <span class="description-title text-primary">Nous Contacter</span>
            </p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap card border-0 shadow-sm p-4">
                        <div class="info-item mb-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i
                                class="bi bi-geo-alt flex-shrink-0 fs-4 text-primary bg-primary-light p-3 rounded-circle me-3"></i>
                            <div>
                                <h3 class="h5 fw-bold">Addresse</h3>
                                <p class="mb-0">Igui Ikiou Drarga, Agadir</p>
                            </div>
                        </div>

                        <div class="info-item mb-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i
                                class="bi bi-telephone flex-shrink-0 fs-4 text-primary bg-primary-light p-3 rounded-circle me-3"></i>
                            <div>
                                <h3 class="h5 fw-bold">Appel Téléphonique</h3>
                                <p class="mb-0">+2127 0311 8311</p>
                            </div>
                        </div>

                        <div class="info-item mb-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i
                                class="bi bi-envelope flex-shrink-0 fs-4 text-primary bg-primary-light p-3 rounded-circle me-3"></i>
                            <div>
                                <h3 class="h5 fw-bold">Email</h3>
                                <p class="mb-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="bdd1d2cdc9d4ded4d8d3decfd8dcc9d8c8cf8e8b84fddad0dcd4d193ded2d0">[email&#160;protected]</a>
                                </p>
                            </div>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.219626653408!2d-9.47082!3d30.3780375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b72898d4d33d%3A0xa50013131145e489!2sL%E2%80%99OPTICIEN%20CREATEUR!5e0!3m2!1sfr!2sma!4v1704072345000!5m2!1sfr!2sma"
                            class="w-100 rounded" height="270" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post"
                        class="php-email-form card border-0 shadow-sm p-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name-field" class="form-label pb-2">Nom Complet</label>
                                <input type="text" name="name" id="name-field" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="form-label pb-2">Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required>
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="form-label pb-2">Objet</label>
                                <input type="text" class="form-control" name="subject" id="subject-field"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="form-label pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="6" id="message-field" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Téléchargement</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Message Envoyé. Merci!</div>

                                <button type="submit" class="btn btn-primary px-4 py-3 mt-3">Envoyez Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                        <p><strong>Email:</strong> <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="422e2d32362b212b272c213027233627373071747b02252f232b2e6c212d2f">[email&#160;protected]</a></span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 class="fw-bold mb-4 fs-5">Liens utiles</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a
                                href="assets/guide_lunettes.pdf" class="text-decoration-none text-secondary">guide
                                lunettes</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a href="#"
                                class="text-decoration-none text-secondary">Catalogue Lunettes</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 class="fw-bold mb-4 fs-5">Nos Services</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a href="#services"
                                class="text-decoration-none text-secondary">Examen de la vue et contrôle de la
                                vision</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a href="#services"
                                class="text-decoration-none text-secondary">Conseil et vente de lunettes de vue et de
                                soleil</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a href="#services"
                                class="text-decoration-none text-secondary">Adaptation et vente de lentilles de
                                contact</a></li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i><a href="#services"
                                class="text-decoration-none text-secondary">Réparation et entretien de lunettes</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4 class="fw-bold mb-4 fs-5">Nous suivre</h4>
                    <p>Voyez plus loin, vivez mieux – Suivez-moi pour une vision claire et des conseils stylés !</p>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/profile.php?id=100083915019835&mibextid=wwXIfr&rdid=ePgoISRYtqPBsjer"
                            class="facebook btn btn-outline-primary rounded-circle p-2 me-2"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/lopticien_createur/"
                            class="instagram btn btn-outline-primary rounded-circle p-2 me-2"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@lopticien.createur?_t=8sd6DagEYy6&_r=1"
                            class="Tik-Tok btn btn-outline-primary p-2">Tik-Tok<i class="bi bi-t ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4 py-4 border-top">
            <p class="mb-0">© <span>Copyright</span> <strong class="px-1 sitename">L'OPTICIEN CREATEUR</strong>
                <span>Tous les droits réservés!</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript for animations -->
    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(element => {
            observer.observe(element);
        });

        // Counter animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / speed;

            const updateCount = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        };

        // Start counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => animateCounter(counter));
                    statsObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-circle').forEach(stat => {
            statsObserver.observe(stat);
        });
    </script>
</body>

</html>
