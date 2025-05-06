<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .profile-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-header h1 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .profile-header p {
            font-size: 1.1rem;
            color: #666;
        }

        .profile-content {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .profile-card {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-card h2 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: #333;
        }

        .profile-card p {
            margin: 5px 0;
            color: #555;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="file"]:focus {
            border-color: #007bff;
            outline: none;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        .profile-picture {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-picture img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #007bff;
            transition: transform 0.3s;
        }

        .profile-picture img:hover {
            transform: scale(1.1);
        }

        .profile-picture p {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <div class="profile-header">
        </div>
        <div class="profile-content">
            <div class="profile-card">
                <h1 class="text-center my-4">My Commands</h1>

                @if ($orders->isEmpty())
                    <div class="alert alert-info text-center">
                        You have no commands yet.
                    </div>
                @else
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>test</td>
                                                <td>585</td>
                                                <td>$525</td>
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
                                                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            <div class="profile-card">
                <h2>Account Settings</h2>
                <div class="d-flex justify-content-between align-items-center">
                    
                        <a href="/" class="btn">retour à la page d'accueil</a>
                        <a  href="/profile" type="button" id="buttonChangePassword" class="btn">retour au Profile</a>
                    
                </div>
            </div>

            @if (session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @elseIf(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endIf
        </div>
    </div>
</body>

</html>