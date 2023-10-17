<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>@yield('title')</title>
</head>

<body>   

    <header>

        @auth
            <span>Welcome, {{  auth()->user()->firstname  }}!</span>
            <span><a href="/dashboard">Profile</a></span>
            <form action="/logout" method="post">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        @else
            <span><a href="/login">Log In</a></span>
            <span><a href="/register">Sign Up</a></span>    
        @endauth

    </header>

    @yield('content')

    <footer></footer>

</body>

</html>