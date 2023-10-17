<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | O-Camp</title>
    <link rel="stylesheet" href="/style__regis.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@300&display=swap" rel="stylesheet"></head>
</head>
<body>
    <main>
        <div>
            <p class="STJ">START YOUR JOURNEY</p>
            <h1 class="judul">Create New Account</h1>
        
            <p class="punya-akun">Already have an account? <a class="garis-bawah" href="login">Sign in here</a></p>

            <form action="/register" method="post">

                @csrf
            
                <div class="input-form">
                    <div class="space-bet">
                        <div>
                            <label class="anak-judul" for="firstname">First Name</label><br>
                            <input class="bagidua" placeholder = "First Name" class="input-form2" type="text" id="nama-nindya" name="firstname" value="{{ old('firstname') }}" required><br>

                            @error('firstname')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="anak-judul" for="lastname">Last Name</label><br>
                            <input class="bagidua" placeholder = "Last Name" class="input-form2" type="text" id="nama-nindya" name="lastname" value="{{ old('lastname') }}" required><br>

                            @error('lastname')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="input-form-biasa">
                        <label class="anak-judul" for="email">Email</label><br>
                        <input class="sendiri" placeholder = "Email" class="input-form2" type="email" id="nama-nindya" name="email" value="{{ old('email') }}" required><br>

                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-form-biasa">
                        <label class="anak-judul" for="password">Password</label><br>
                        <input class="sendiri" placeholder = "Password" class="input-form2" type="password" id="nama-nindya" name="password" required><br>

                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="submit-form">
                        <button class="tombol-submit" type="submit" >Create Account</button>
                    </div>
                </div>

            </form>

        </div>
     </main>

</body>
</html>