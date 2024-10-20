<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">    
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('set-username') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" 
                pattern="[a-zA-Z]*" title="Please enter only alphabetic characters." required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" value="{{ old('age') }}" min="1" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
