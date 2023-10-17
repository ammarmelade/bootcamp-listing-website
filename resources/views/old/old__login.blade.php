<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Log-In | O-Camp</title>
</head>
<body>
        
    <div><a href="/">O-camp</a></div>
    <div>Learn to code, and open a new world of possibilities</div>

    <h1>Log In</h1>

    <form action="/login" method="post">

        @csrf
    
        <label for="email">E-mail</label>

        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <br><br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="password">password</label>

        <input type="password" name="password" id="password" required>

        <br><br>

        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <div><a href="/">Forgot your password?</a></div>

        <button type="submit">Log In</button>

        <div>Don't have an account? <a href="/register">Sign up here</a></div>

        {{-- @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif --}}

    </form>
    
</body>
</html>
