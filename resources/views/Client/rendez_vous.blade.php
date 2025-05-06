<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenez Rendez-vous</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .wrapper {
            display: flex;
            max-width: 900px;
            width: 100%;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .left-side {
            flex: 1;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .left-side .logo {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .left-side .logo img {
            width: 80%;
            height: 80%;
            border-radius: 50%;
        }

        .left-side .available-days {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .right-side {
            flex: 2;
            padding: 40px;
            overflow-y: auto;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        textarea {
            resize: none;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .calendar {
            margin-top: 20px;
            text-align: center;
        }

        .calendar .table {
            margin: auto;
            width: 100%;
            max-width: 600px;
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .calendar .table th,
        .calendar .table td {
            vertical-align: middle;
            text-align: center;
            padding: 15px;
            background: #f9f9f9;
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .calendar .table th {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        .time-slot {
            display: inline-block;
            margin: 5px 0;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .time-slot:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .text-success {
            background-color: #d4edda;
            color: #155724;
        }

        .text-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        
    </style>
</head>

<body>

    {{-- @dd($timesOfTheDay); --}}
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('assets/' . 'logo1.png') }}" alt="Logo" width="60">
                <h1 class="h3 mb-0 ms-2">L'OPTICIEN CREATEUR</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/rendez_vous">Rendez-vous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ProduitClient">Produits</a>
                    </li>
                </ul>
            </div>
            
            <div class="d-flex ">
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

    <div class="wrapper">
        
        <div class="left-side">
            <div class="logo">
                <img src="{{ asset('assets/' . 'logo1.png') }}" alt="Logo"
                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
            </div>
            <div class="available-days">
                <h3>Jours Disponibles</h3>
                <p>Lundi - Vendredi</p>
                <p>9:00 AM - 6:00 PM</p>
            </div>
        </div>
        <div class="right-side">
            <h1>Prenez Rendez-vous</h1>
            <form action="/rendezVous/create" method="POST">
                @csrf
                <label for="name">Nom complet</label>
                <input type="text" name="name" id="name" placeholder="Votre nom complet" required>

                <label for="email">Adresse Email</label>
                <input type="email" name="email" id="email" placeholder="Votre email" required>
                @if(session('notFound'))
                <div class="alert alert-danger mt-3">
                    {{ session('notFound') }}
                </div>

                @endIf

                <label for="phone">Numéro de téléphone</label>
                <input type="text" name="phone" id="phone" placeholder="Votre numéro de téléphone" required>

                <label for="date">Date du rendez-vous</label>
                <input type="date" name="date" id="date" required onclick="showAlert()">

                <div class="alert alert-info mt-3" id="availability-alert" style="display: none;">
                    Veuillez vérifier les heures disponibles ci-dessous.
                </div>



                <label for="time">Heure du rendez-vous</label>
                <select name="time" id="time" required
                    style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px; transition: all 0.3s ease;">
                    <option value="9:00:00">9:00</option>
                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="12:00:00">12:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="18:00:00">18:00</option>
                </select>
                @if(session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>

                @endIf
                @if(session('exist'))
                <div class="alert alert-danger mt-3">
                    {{ session('exist') }}
                </div>

                @endIf


                <label for="message">Message</label>
                <textarea name="message"  id="message" rows="4" placeholder="Ajoutez un message si nécessaire"></textarea>

                @auth
                    <button type="submit">Réserver</button>
                @else
                    <div class="alert alert-warning mt-3">
                        Vous devez être connecté pour réserver un rendez-vous.
                    </div>
                    <a href="{{ route('Tologin') }}" class="btn btn-primary">Se connecter</a>
                @endauth
            </form>
        </div>
    </div>

    <div class="card mt-4 mx-3">
        <div class="card-header bg-primary text-white">
            <h3 style="margin: 0;">Calendrier</h3>
        </div>
        <div class="form-group m-4">
            <label for="date-select" class="form-label fw-bold text-primary">Choisissez une date</label>
            <input type="date" id="date-select" class="form-control border-primary shadow-sm" style="border-radius: 8px; padding: 6px; font-size: 14px; width: 50%;">
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Heures Disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lundi</td>
                        <td>
                            <div class="time-slot text-success">9:00 AM - 10:00 AM</div>
                            <div class="time-slot text-danger">10:00 AM - 11:00 AM</div>
                            <div class="time-slot text-success">11:00 AM - 12:00 PM</div>
                            <div class="time-slot text-success">1:00 PM - 3:00 PM</div>
                            <div class="time-slot text-danger">3:00 PM - 4:00 PM</div>
                            <div class="time-slot text-success">4:00 PM - 6:00 PM</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>
                            <div class="time-slot text-danger" style="font-style: italic;">Non disponible</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>
                            <div class="time-slot text-success">9:00 AM - 10:00 AM</div>
                            <div class="time-slot text-danger">10:00 AM - 11:00 AM</div>
                            <div class="time-slot text-success">11:00 AM - 12:00 PM</div>
                            <div class="time-slot text-success">1:00 PM - 3:00 PM</div>
                            <div class="time-slot text-danger">3:00 PM - 4:00 PM</div>
                            <div class="time-slot text-success">4:00 PM - 6:00 PM</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>
                            <div class="time-slot text-danger" style="font-style: italic;">Non disponible</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>
                            <div class="time-slot text-success">9:00 AM - 10:00 AM</div>
                            <div class="time-slot text-danger">10:00 AM - 11:00 AM</div>
                            <div class="time-slot text-success">11:00 AM - 12:00 PM</div>
                            <div class="time-slot text-success">1:00 PM - 3:00 PM</div>
                            <div class="time-slot text-danger">3:00 PM - 4:00 PM</div>
                            <div class="time-slot text-success">4:00 PM - 6:00 PM</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script>
        function showAlert() {
            document.getElementById('availability-alert').style.display = 'block';
        }

        // const timesOfTheDay = @json($timesOfTheDay);
        // console.log(timesOfTheDay);
    </script>
</body>

</html>
