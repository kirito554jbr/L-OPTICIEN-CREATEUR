<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>L'OPTICIEN CREATEUR - Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"
    />
    <style>
      :root {
        --primary: #0d6efd;
        --primary-dark: #0b5ed7;
        --secondary: #f8f9fa;
        --text-dark: #212529;
        --text-light: #6c757d;
        --white: #ffffff;
        --light-blue: #e9f0ff;
        --border-color: #dee2e6;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f8ff;
        overflow-x: hidden;
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

      .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
      }

      .card:hover {
        transform: translateY(-5px);
      }

      .stat-card {
        border-left: 4px solid var(--primary);
      }

      .stat-card .icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--light-blue);
        border-radius: 10px;
        color: var(--primary);
      }

      .chart-container {
        height: 300px;
        position: relative;
      }

      .table-container {
        background-color: var(--white);
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      }

      .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
      }

      .btn-primary {
        background-color: var(--primary);
        border-color: var(--primary);
      }

      .btn-primary:hover {
        background-color: var(--primary-dark);
        border-color: var(--primary-dark);
      }

      .notification-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: #dc3545;
        color: white;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
      }

      .fade-in.active {
        opacity: 1;
        transform: translateY(0);
      }

      /* Animation delays for cascading effect */
      .delay-1 {
        transition-delay: 0.1s;
      }
      .delay-2 {
        transition-delay: 0.2s;
      }
      .delay-3 {
        transition-delay: 0.3s;
      }
      .delay-4 {
        transition-delay: 0.4s;
      }

      @media (max-width: 768px) {
        .sidebar {
          position: fixed;
          left: -250px;
          width: 250px !important;
        }

        .sidebar.show {
          left: 0;
        }

        .main-content {
          margin-left: 0 !important;
          width: 100% !important;
        }
       
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="logo d-flex align-items-center">
            <h4 class="m-0 text-primary fw-bold">L'OPTICIEN CREATEUR</h4>
          </div>
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/dashboardAdmin">
                  <i class="bi bi-house-door"></i> Tableau de bord
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/produitAdmin">
                  <i class="bi bi-eyeglasses"></i> Produits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users">
                  <i class="bi bi-cart"></i> Commandes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users">
                  <i class="bi bi-people"></i> Clients
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/rendezVous">
                  <i class="bi bi-calendar-event"></i> Rendez-vous
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/categorie" >
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
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 mb-4">
            <div class="container-fluid">
              <button id="sidebarToggle" class="btn d-md-none">
                <i class="bi bi-list"></i>
              </button>

              <div class="d-flex align-items-center ms-auto">

                <div class="dropdown">
                  <a
                    href="#"
                    class="d-flex align-items-center text-decoration-none dropdown-toggle"
                    id="dropdownUser"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="{{ auth()->user()->image }}"
                      alt="Admin"
                      class="avatar me-2"
                    />
                    <span class="d-none d-sm-inline">Admin</span>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end shadow"
                    aria-labelledby="dropdownUser"
                  >
                    <li>
                      <a class="dropdown-item" href="#"
                        ><i class="bi bi-person me-2"></i> Profil</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="/rendezVous"
                        ><i class="bi bi-gear me-2"></i> Rendez-vous</a
                      >
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item text-danger" href="/logout"
                        ><i class="bi bi-box-arrow-right"></i> Déconnexion</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

          <!-- Dashboard Content -->
          <div class="container-fluid">
            <!-- Welcome Section -->
            <div class="row mb-4">
              <div class="col-12">
                <div class="card fade-in">
                  <div class="card-body p-4">
                    <h2 class="card-title">Bonjour, Admin!</h2>
                    <p class="card-text text-muted">
                      Bienvenue sur votre tableau de bord. Voici un aperçu de
                      votre activité aujourd'hui.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
              <div class="col-md-6 col-lg-3 mb-3">
                <div class="card stat-card fade-in delay-1">
                  <div class="card-body p-4">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div>
                        <h6 class="text-muted mb-1">Ventes du jour</h6>
                        <h3 class="mb-0">€1,250</h3>
                        <p class="text-success mb-0">
                          <i class="bi bi-arrow-up"></i> 12.5%
                        </p>
                      </div>
                      <div class="icon">
                        <i class="bi bi-currency-euro fs-1"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 mb-3">
                <div class="card stat-card fade-in delay-2">
                  <div class="card-body p-4">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div>
                        <h6 class="text-muted mb-1">Nouveaux clients</h6>
                        <h3 class="mb-0">24</h3>
                        <p class="text-success mb-0">
                          <i class="bi bi-arrow-up"></i> 5.3%
                        </p>
                      </div>
                      <div class="icon">
                        <i class="bi bi-people fs-1"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 mb-3">
                <div class="card stat-card fade-in delay-3">
                  <div class="card-body p-4">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div>
                        <h6 class="text-muted mb-1">Commandes</h6>
                        <h3 class="mb-0">18</h3>
                        <p class="text-danger mb-0">
                          <i class="bi bi-arrow-down"></i> 2.8%
                        </p>
                      </div>
                      <div class="icon">
                        <i class="bi bi-cart fs-1"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 mb-3">
                <div class="card stat-card fade-in delay-4">
                  <div class="card-body p-4">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div>
                        <h6 class="text-muted mb-1">Rendez-vous</h6>
                        <h3 class="mb-0">8</h3>
                        <p class="text-success mb-0">
                          <i class="bi bi-arrow-up"></i> 10.2%
                        </p>
                      </div>
                      <div class="icon">
                        <i class="bi bi-calendar-check fs-1"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Charts -->
            

            <!-- Recent Orders -->
            <div class="row mb-4">
              <div class="col-12">
                <div class="card fade-in delay-3">
                  <div class="card-body p-4">
                    <div
                      class="d-flex justify-content-between align-items-center mb-3"
                    >
                      <h5 class="card-title mb-0">Commandes récentes</h5>
                      <a href="/orders" class="btn btn-sm btn-primary">Voir tout</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($orders as $order)
                          <tr>
                            <td>#ORD-00{{ $order->id }}</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <img
                                  src="{{ $order->popo->image}}"
                                  class="avatar me-2"
                                  alt="Client"
                                />
                                <div>
                                  <h6 class="mb-0">{{ $order->popo->firstName}}</h6>
                                  <small class="text-muted"
                                    >{{ $order->popo->email}}</small
                                  >
                                </div>
                              </div>
                            </td>
                            <td>{{ $order->created_at->format('d-m-Y')}}</td>
                            <td>
                              @if ($order->status == 'Accepted')
                              <span class="badge bg-success">{{ $order->status }}</span>
                              @elseif ($order->status == 'Rejected')
                              <span class="badge bg-danger">{{ $order->status }}</span>
                              @elseif ($order->status == 'Pending')
                              <span class="badge bg-warning">{{ $order->status }}</span>
                              @else
                              <span class="badge bg-secondary">{{ $order->status }}</span>
                              @endif
                            </td>
                            <td>
                              <div class="dropdown">
                                <button
                                  class="btn btn-sm"
                                  type="button"
                                  data-bs-toggle="dropdown"
                                >
                                  <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#"
                                      >Détails</a
                                    >
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#"
                                      >Modifier</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Actions & Recent Activities -->
            <div class="row mb-4">
              <div class="col-lg-6 mb-3">
                <div class="card fade-in delay-1">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-3">Actions rapides</h5>
                    <div class="row g-3">
                      <div class="col-6">
                        <a
                          href="#"
                          class="btn btn-light w-100 p-3 d-flex flex-column align-items-center"
                        >
                          <i class="bi bi-plus-circle fs-3 mb-2"></i>
                          <span>Ajouter un produit</span>
                        </a>
                      </div>
                      <div class="col-6">
                        <a
                          href="#"
                          class="btn btn-light w-100 p-3 d-flex flex-column align-items-center"
                        >
                          <i class="bi bi-person-plus fs-3 mb-2"></i>
                          <span>Nouveau client</span>
                        </a>
                      </div>
                      <div class="col-6">
                        <a
                          href="#"
                          class="btn btn-light w-100 p-3 d-flex flex-column align-items-center"
                        >
                          <i class="bi bi-calendar-plus fs-3 mb-2"></i>
                          <span>Rendez-vous</span>
                        </a>
                      </div>
                      <div class="col-6">
                        <a
                          href="#"
                          class="btn btn-light w-100 p-3 d-flex flex-column align-items-center"
                        >
                          <i class="bi bi-file-earmark-text fs-3 mb-2"></i>
                          <span>Générer un rapport</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mb-3">
                <div class="card fade-in delay-2">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-3">Activités récentes</h5>
                    <div class="timeline">
                      <div class="timeline-item pb-3">
                        <div class="d-flex">
                          <div class="me-3">
                            <div
                              class="bg-primary rounded-circle p-2 text-white"
                            >
                              <i class="bi bi-cart-check"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-1">Nouvelle commande #ORD-005</h6>
                            <p class="text-muted mb-0">Il y a 10 minutes</p>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item pb-3">
                        <div class="d-flex">
                          <div class="me-3">
                            <div
                              class="bg-success rounded-circle p-2 text-white"
                            >
                              <i class="bi bi-person-check"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-1">Nouveau client enregistré</h6>
                            <p class="text-muted mb-0">Il y a 45 minutes</p>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item pb-3">
                        <div class="d-flex">
                          <div class="me-3">
                            <div
                              class="bg-warning rounded-circle p-2 text-white"
                            >
                              <i class="bi bi-box-seam"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-1">Mise à jour de l'inventaire</h6>
                            <p class="text-muted mb-0">Il y a 2 heures</p>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="d-flex">
                          <div class="me-3">
                            <div class="bg-info rounded-circle p-2 text-white">
                              <i class="bi bi-calendar-event"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-1">Rendez-vous confirmé</h6>
                            <p class="text-muted mb-0">Il y a 3 heures</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      // Sidebar Toggle for Mobile
      document.addEventListener("DOMContentLoaded", function () {
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebar = document.querySelector(".sidebar");
        const mainContent = document.querySelector(".main-content");

        if (sidebarToggle) {
          sidebarToggle.addEventListener("click", function () {
            sidebar.classList.toggle("show");
          });
        }

        // Fade-in Animation
        const fadeElements = document.querySelectorAll(".fade-in");

        function checkFade() {
          fadeElements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;

            if (elementTop < window.innerHeight && elementBottom > 0) {
              element.classList.add("active");
            }
          });
        }

        // Initial check
        setTimeout(checkFade, 100);

        // Check on scroll
        window.addEventListener("scroll", checkFade);

        
        
      });
    </script>
  </body>
</html>
