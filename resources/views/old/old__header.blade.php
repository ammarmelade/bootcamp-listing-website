<header>

    <span><a href="/">O-Camp</a></span>

    <span><a href="/">Home</a></span>

    <span><a href="/">Services</a></span>

    <span><a href="about-us">About Us</a></span>

    @auth
        {{-- <span>Welcome, {{  auth()->user()->firstname  }}!</span> --}}
        <span><a href="/dashboard">Account</a></span>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    @else
        <span><a href="/login">Log In</a></span>
        <span><a href="/register">Sign Up</a></span>  
    @endauth

</header>