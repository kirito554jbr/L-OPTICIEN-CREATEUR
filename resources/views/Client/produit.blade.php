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
                    <img src="{{ asset('assets/' . 'logo1.png') }}" alt="L'OPTICIEN CREATEUR Logo" width="60">
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
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="index.html#about">Qui sommes nous?</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/rendez_vous">Rendez-vous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="produits.html">Produits</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="index.html#contact">Contact</a>
                        </li> --}}
                    </ul>
                </div>

                {{-- Cart --}}
                <div class="me-3 d-flex align-items-center">
                    <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-shopping-cart w-8 h-4" aria-hidden="true"></i> Cart
                        <span class="badge badge-danger ml-2">{{ count((array) session('cart')) }}</span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="dropdownMenuButton"
                        style="max-width: 300px; max-height: 400px; overflow-y: auto;">
                        @if (session('cart') && count(session('cart')) > 0)
                            <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                <div>
                                    <i class="fa fa-shopping-cart"></i> <span
                                        class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </div>
                                @php $total = 0 @endphp
                                @foreach ((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                                <div>
                                    <p>Total: <span class="text-primary">${{ $total }}</span></p>
                                </div>
                            </div>

                            @foreach (session('cart') as $id => $details)
                                <div class="row cart-detail mb-2">
                                    <div class="col-3">
                                        <img src="{{ $details['image'] }}" class="img-fluid rounded" />
                                    </div>
                                    <div class="col-9">
                                        <p class="mb-1 text-truncate">{{ $details['name'] }}</p>
                                        <span class="text-primary">${{ $details['price'] }}</span>
                                        <span class="ml-2">x{{ $details['quantity'] }}</span>
                                        <form action="{{ route('remove.from.cart', $id) }}" method="POST"
                                            class="mt-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                            
                            @if(auth()->check())
                                <div class="text-center mt-2">
                                    <a href="cart" class="btn btn-primary w-100">View all</a>
                                </div>
                            @else
                                <p class="text-center text-muted">Please <a href="{{ route('Tologin') }}">log in</a> to view all items in your cart.</p>
                            @endif
                            
                        @else
                            <p class="text-center text-muted">Your cart is empty</p>
                        @endif
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    @guest
                        <a href="{{ route('Tologin') }}" class="btn btn-outline-primary me-2">Se connecter</a>
                        <a href="{{ route('Toregister') }}" class="btn btn-primary me-2">S'inscrire</a>
                    @endguest
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="filter-buttons d-flex justify-content-center">
                            <form action="/ProduitClient">
                                @csrf
                                <button type="submit" class="btn filter-button mx-1 mb-2 {{ request()->is('ProduitClient') ? 'active' : '' }}" data-filter="*">Tous</button>
                            </form>

                            <form action="/filterPerCategorie" method="POST">
                                @csrf
                                <input type="hidden" name="categorie" value="Lunettes de Vue">
                                <button type="submit" class="btn filter-button mx-1 mb-2 {{ request()->input('categorie') == 'Lunettes de Vue' ? 'active' : '' }}" data-filter="lunettes-vue">Lunettes de Vue</button>
                            </form>

                            <form action="/filterPerCategorie" method="POST">
                                @csrf
                                <input type="hidden" name="categorie" value="Lunettes de Soleil">
                                <button type="submit" class="btn filter-button mx-1 mb-2 {{ request()->input('categorie') == 'Lunettes de Soleil' ? 'active' : '' }}" data-filter="lunettes-soleil">Lunettes de Soleil</button>
                            </form>

                            <form action="/filterPerCategorie" method="POST">
                                @csrf
                                <input type="hidden" name="categorie" value="Lunettes de protection">
                                <button type="submit" class="btn filter-button mx-1 mb-2 {{ request()->input('categorie') == 'Lunettes de protection' ? 'active' : '' }}" data-filter="lentilles">Lunettes de protection</button>
                            </form>

                            <form action="/filterPerCategorie" method="POST">
                                @csrf
                                <input type="hidden" name="categorie" value="Accessoires">
                                <button type="submit" class="btn filter-button mx-1 mb-2 {{ request()->input('categorie') == 'Accessoires' ? 'active' : '' }}" data-filter="accessoires">Accessoires</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($produits as $produit)
                        <!-- Product 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 product-item lunettes-vue">
                            <div class="card product-card h-100 shadow-sm">
                                @if ($produit->created_at->gt(now()->subWeek()))
                                    <span class="badge bg-primary product-badge">Nouveau</span>
                                @endif
                                <img src="{{ $produit->image }}" class="card-img-top"
                                    alt="Lunettes de vue modèle Danien">
                                <div class="card-body">
                                    <p class="product-category mb-1">{{ $produit->categorie->name }}</p>
                                    <h5 class="card-title fw-bold">{{ $produit->name }}</h5>
                                    <p class="card-text text-truncate" style="max-width: 100%;">
                                        {{ $produit->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="product-price">
                                            @if ($produit->promotion)
                                                <span class="old-price">{{ $produit->prix }} DH</span>
                                                <span>{{ $produit->promotion }}DH</span>
                                            @else
                                                <span>{{ $produit->prix }} DH</span>
                                            @endif
                                        </div>
                                        <a href="/show/{{ $produit->id }}"
                                            class="btn btn-outline-primary btn-sm">Détails</a>
                                        <a href="{{ route('add.to.cart', $produit->id) }}"
                                            class="btn btn-primary btn-sm">panier</a>
                                        {{-- <a href="" class="btn btn-primary">Add to cart</a> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-start">
                        {{ $produits->links() }}
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
                <span>Tous les droits réservés!</span>
            </p>
        </div>
    </footer>
    <div class="container mx-auto px-4">
        @if (session('success'))
            <div class="alert alert-success text-sm font-semibold p-3 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    {{-- @yield('scripts') --}}


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
            const select = (className, all = false) => {
                className = className.trim();
                if (all) {
                    return [...document.querySelectorAll(className)];
                } else {
                    return document.querySelector(className);
                }
            };

            /**
             * Easy event listener function
             */
            const on = (type, className, listener, all = false) => {
                let selectEl = select(className, all);
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
            const onscroll = (className, listener) => {
                className.addEventListener('scroll', listener);
            };

            /**
             * Navbar links active state on scroll
             */
            // let navbarlinks = select('#navbarMain .nav-link', true);
            // const navbarlinksActive = () => {
            //     let position = window.scrollY + 200;
            //     navbarlinks.forEach(navbarlink => {
            //         if (!navbarlink.hash) return;
            //         let section = select(navbarlink.hash);
            //         if (!section) return;
            //         if (position >= section.offsetTop && position <= (section.offsetTop + section
            //                 .offsetHeight)) {
            //             navbarlink.classList.add('active');
            //         } else {
            //             navbarlink.classList.remove('active');
            //         }
            //     });
            // };
            // window.addEventListener('load', navbarlinksActive);
            // onscroll(document, navbarlinksActive);

            /**
             * Toggle .header-scrolled class to #header when page is scrolled
             */
            // let selectHeader = select('#header');
            // if (selectHeader) {
            //     const headerScrolled = () => {
            //         if (window.scrollY > 100) {
            //             document.body.classList.add('scrolled');
            //         } else {
            //             document.body.classList.remove('scrolled');
            //         }
            //     };
            //     window.addEventListener('load', headerScrolled);
            //     onscroll(document, headerScrolled);
            // }

            /**
             * Back to top button
             */
            let backtotop = select('.scroll-top');
            if (backtotop) {
                const toggleBacktotop = () => {
                    if (window.scrollY > 500) {
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
            // new PureCounter();

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
                        productFilters.forEach(function(className) {
                            className.classList.remove('active');
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
