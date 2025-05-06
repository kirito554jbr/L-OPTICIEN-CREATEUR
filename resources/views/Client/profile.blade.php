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
            <h1>Welcome, {{ $user->firstName }} {{ $user->lastName }}</h1>
            <p>Your Profile Information</p>
        </div>
        <div class="profile-content">
            <div class="profile-card">
                <h2>Personal Details</h2>
                <div style="display: flex; align-items: flex-start; gap: 20px;">
                    <div class="profile-picture">
                        <label for="image" style="cursor: pointer;">
                            <img src="{{ $user->image }}" alt="Profile Picture">
                        </label>
                        <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                        <button type="button" id="changeImageButton">Click to change</button>
                        <form id="changeImageForm" action="/profileImage" method="POST" style="display: none;">
                            @csrf
                            <input type="text" id="imageInput" name="image" placeholder="Enter image URL">
                            <button type="submit">Submit</button>
                        </form>

                    </div>
                    <form action="/users/profileUpdate/{{ $user->id }}" id="mainForm" method="POST" style="flex-grow: 1;">
                        @csrf
                        <div style="flex-grow: 1;">
                            <label for="name">First Name:</label>
                            <input type="text" id="name" name="firstName" value="{{ $user->firstName }}" required>

                            <label for="name">Last Name:</label>
                            <input type="text" id="name" name="lastName" value="{{ $user->lastName }}" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}" required>

                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" value="{{ $user->phone }}">

                            <label for="adress">Adress:</label>
                            <input type="text" id="adress" name="adress" value="{{ $user->adresse }}">

                            <button type="submit" class="btn">Save Changes</button>
                        </div>
                    </form>


                    <form action="/users/passwordUpdate/{{ $user->id }}" method="POST" id="changePassword" style="flex-grow: 1; display: none;">
                        @csrf
                        <div style="flex-grow: 1;" >
                            <label for="name">Old Password</label>
                            <input type="text" id="name" name="oldPassword" required>

                            <label for="name">New Password</label>
                            <input type="text" id="name" name="newPassword" required>

                            <label for="email">Password Confirmation</label>
                            <input type="text" id="email" name="passwordConfirmation" required>

                            <button type="submit" class="btn">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="profile-card">
                <h2>Account Settings</h2>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="/" class="btn">retour à la page d'accueil</a>
                        <a  type="button" id="buttonChangePassword" class="btn">Change Password</a>
                    </div>
                    <a href="/client/commend/{{ $user->id }}" class="btn">Go to Commend Page</a>
            </div>
            </div>

                @if(session('error'))
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
    <script>
        document.getElementById('changeImageButton').addEventListener('click', function() {
            document.getElementById('changeImageForm').style.display = 'block';
            document.getElementById('changeImageButton').style.display = 'none';
        });

        document.getElementById('buttonChangePassword').addEventListener('click', function() {
            document.getElementById('changePassword').style.display = 'block';
            document.getElementById('mainForm').style.display = 'none';
        });

    </script>
</body>

</html>
