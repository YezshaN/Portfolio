<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif; 
            background-color: #FAF9F6;
            color: #333; 
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }
        h1 {
            font-size: 48px;
            color: #5E646E;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #9B7E66;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }
        a:hover {
            background-color: #d0c1a5;
        }
    </style>
</head>
<body>
    <h1>Access Denied</h1>
    <p>You do not have permission to access this page. You should be 15 years old above to access this page.</p>
    <a href="/">Go Back to Login</a>
</body>
</html>
