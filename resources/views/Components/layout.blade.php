<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-tzA3E4gFRNUFFsh1FqPvHQt4U77jpf15qRDRUxyfJwT9xt1stp+Pqv9N4YH1+6oANxNHKfrN2vl3t88Wfw38g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <div class="logo-container" style="display: flex; align-items: center;">
                <a href="index.html" class="logo">
                    <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
                </a>
                <span class="logo-text">Hi, {{ $username }}!</span>
            </div>
            <ul class="nav-links">
                <li><a href="{{ url('/home') }}">Home</a></li>
                
                <!-- Works dropdown -->
                <li class="dropdown">
                    <a href="#">Works</a>
                    <ul class="dropdown-content">
                        <li><a href="{{ url('/projects/project1') }}">Project 1</a></li>
                        <li><a href="{{ url('/projects/project2') }}">Project 2</a></li>
                        <li><a href="{{ url('/projects/project3') }}">Project 3</a></li>
                        <li><a href="{{ url('/projects/project4') }}">Project 4</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Yezsha T. Narvaez. All rights reserved.</p>
    </footer>
</body>
</html>
