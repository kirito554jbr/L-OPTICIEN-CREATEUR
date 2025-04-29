<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Produits - L'OPTICIEN CREATEUR</title>
    <meta name="description" content="Panneau d'administration des produits">
    <meta name="keywords" content="admin, produits, gestion, optique">

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
            --sidebar-width: 280px;
            --header-height: 70px;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--bs-secondary);
            background-color: #f8f9fa;
            overflow-x: hidden;
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

        /* Admin Layout */
        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: #fff;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100vh;
            z-index: 999;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link {
            color: var(--text-dark);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 5px;
            transition: all 0.2s ease;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: var(--light-blue);
            color: var(--primary);
        }





        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
        }

        /* Header */
        .admin-header {
            height: var(--header-height);
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: sticky;
            top: 0;
            z-index: 998;
        }

        .toggle-sidebar {
            font-size: 1.5rem;
            cursor: pointer;
            margin-right: 15px;
            display: none;
        }

        .admin-search {
            flex: 1;
            max-width: 400px;
            margin: 0 20px;
        }

        .admin-user {
            display: flex;
            align-items: center;
        }

        .admin-user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }

        .admin-user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Content Area */
        .content-area {
            padding: 20px;
        }

        .content-header {
            margin-bottom: 20px;
        }

        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 20px;
        }

        /* Product Table */
        .product-table th {
            font-weight: 600;
            white-space: nowrap;
        }

        .product-table .product-image {
            width: 60px;
            height: 60px;
            border-radius: 5px;
            overflow: hidden;
        }

        .product-table .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-table .product-actions {
            white-space: nowrap;
        }

        .product-table .badge {
            font-weight: 500;
        }

        /* Modal */
        .modal-header {
            background-color: var(--bs-primary);
            color: white;
        }

        .modal-header .btn-close {
            color: white;
            filter: brightness(0) invert(1);
        }

        /* Responsive */
        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .toggle-sidebar {
                display: block;
            }

            .admin-search {
                max-width: 200px;
            }
        }

        @media (max-width: 767.98px) {
            .admin-search {
                display: none;
            }

            .product-table {
                min-width: 800px;
            }

            .table-responsive {
                overflow-x: auto;
            }
        }

        /* Stats Cards */
        .stats-card {
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .stats-card-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .stats-card-value {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stats-card-label {
            color: var(--bs-secondary);
            font-size: 0.9rem;
        }

        /* Form Controls */
        .form-control:focus,
        .form-select:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
        }

        /* Custom Switch */
        .form-check-input:checked {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        /* Dropzone */
        .dropzone {
            border: 2px dashed #dee2e6;
            border-radius: 5px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dropzone:hover {
            border-color: var(--bs-primary);
        }

        .dropzone-icon {
            font-size: 2rem;
            color: var(--bs-secondary);
            margin-bottom: 10px;
        }

        /* Pagination */
        .pagination .page-item.active .page-link {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .pagination .page-link {
            color: var(--bs-primary);
        }

        .pagination .page-link:focus {
            box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
        }


        .sidebar {
            background-color: var(--white);
            min-height: 100vh;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar .logo {
            padding: 20px 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar .nav-link {
            color: var(--text-dark);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 5px;
            transition: all 0.2s ease;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: var(--light-blue);
            color: var(--primary);
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .main-content {
            transition: all 0.3s ease;
        }

        .navbar {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="logo d-flex align-items-center">
                <h4 class="m-0 text-primary fw-bold">L'OPTICIEN CREATEUR</h4>
            </div>
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboardAdmin">
                            <i class="bi bi-house-door"></i> Tableau de bord
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produitAdmin">
                            <i class="bi bi-eyeglasses"></i> Produits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-cart"></i> Commandes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <i class="bi bi-people"></i> Clients
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rendezVous">
                            <i class="bi bi-calendar-event"></i> Rendez-vous
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-gear"></i> Category
                        </a>
                    </li>
                    <hr class="my-3" />

                    
                    <li class="nav-item">
                        <a href="/logout" class="nav-link text-danger">
                            <i class="bi bi-box-arrow-right"></i>Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <header class="admin-header">
                <div class="toggle-sidebar" id="toggleSidebar">
                    <i class="bi bi-list"></i>
                </div>
                <div class="admin-search">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control bg-light border-start-0" placeholder="Rechercher...">
                    </div>
                </div>
                <div class="ms-auto d-flex align-items-center">
                    <div class="dropdown me-3">

                    </div>
                    <div class="dropdown">
                        <button class="btn d-flex align-items-center" type="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="admin-user-avatar">
                                <img src="{{ auth()->user()->image }}" alt="Admin">
                            </div>
                            <div class="d-none d-sm-block">
                                <div class="fw-bold">Admin</div>
                                <div class="small text-muted">Administrateur</div>
                            </div>
                            <i class="bi bi-chevron-down ms-2"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Mon
                                    profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Paramètres</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="/logout"><i
                                        class="bi bi-box-arrow-right me-2"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="content-area">
                <div class="content-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="h3 mb-0">Gestion des categories</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 mt-1">
                                    <li class="breadcrumb-item"><a href="admin-dashboard.html"
                                            class="text-decoration-none">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">orders</li>
                                </ol>
                            </nav>
                        </div>
                        {{-- <div class="col-auto">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                                <i class="bi bi-plus-lg me-1"></i> Ajouter une category
                            </button>
                        </div> --}}
                    </div>
                </div>






                <!-- Products Table -->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover product-table align-middle">
                                <thead>
                                    <tr>
                                        <th width="40">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="selectAllProducts">
                                            </div>
                                        </th>

                                        <th>email</th>

                                        <th>Date d'ajout</th>
                                        <th>Adress</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            {{-- @dd($order->popo) --}}
                                            <td>{{ $order->popo->email }}</td>
                                            <td>{{ $order->created_at }} </td>
                                            <td>{{ $order->adresse }} </td>
                                            <td>
                                                <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <select name="status" onchange="this.form.submit()" >
                                                        <option value="Pending">{{ $order->status }}</option>
                                                        <option value="Accepted">Accepted</option>
                                                        <option value="Rejected">Rejected</option>
                                                    </select>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Vendor JS Files (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script>
        


        function showinfowithmodal(id, status) {
            //   document.getElementById('productId').value = id;
            document.getElementById('editCategorieName').value = status;
            document.getElementById('addAction').action = '/categorie/update/' + id;
        }
    </script>
</body>

</html>
