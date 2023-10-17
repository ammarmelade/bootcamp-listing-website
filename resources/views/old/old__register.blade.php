<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Sign-Up | O-Camp</title>
</head>

<body>
        
    <div><a href="/">O-camp</a></div>
    
    <div><p>START YOUR JOURNEY</p></div>

    <div><h1>Create an account</h1></div>
    
    <div><p>Already have an account? <a href="/login">Sign in here</a></p></div>

    <form action="/register" method="post">

        @csrf
    
        <label for="firstname">First name</label>

        <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required>

        @error('firstname')
            <p>{{ $message }}</p>
        @enderror

        <br><br>
    
        <label for="lastname">Last name</label>

        <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>

        <br><br>

        @error('lastname')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="username">username</label>

        <input type="text" name="username" id="username" value="{{ old('username') }}" required>

        <br><br>

        @error('username')
            <p>{{ $message }}</p>
        @enderror
    
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

        <button type="submit">Create Account</button>

        {{-- @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif --}}

    </form>
    
</body>
</html>
