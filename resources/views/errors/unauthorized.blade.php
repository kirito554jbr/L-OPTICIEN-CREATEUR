<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            font-size: 3em;
            color: #dc3545;
        }
        p {
            font-size: 1.2em;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>403 - Unauthorized</h1>
    <p>Sorry, you do not have permission to access this page.</p>
    <p><a href="{{ url('/') }}">Return to Homepage</a></p>
</body>
</html>