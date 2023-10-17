<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In | O-Camp</title>
    <link rel="stylesheet" href="/style__login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@300&display=swap" rel="stylesheet"></head>
<body>
    <main>
        <div class="flex-space-between">

            <div class="flex-kiri">
                <h1 class="judul">O-Camp</h1>
                <p class="anak-judul">Learn to code, and open a new world of possibilities</p>
            </div>

            <div class="flex-kanan">

                <form action="/login" method="post">
            
                    @csrf

                    <label class="anak-judul" for="email">Email</label><br>
                    <input placeholder = "Email" class="input-form2" type="email" id="nama-nindya" name="email" value="{{ old('email') }}" required><br>

                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror

                    <div style="margin-top : 20px">
                        <label class="anak-judul" for="password" >Password</label><br>
                        <input placeholder = "Password" class="input-form2" type="password" id="nama-nindya" name="password" required><br>

                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    @error('validation')
                        <p>{{ $message }}</p>
                    @enderror

                    @error('suspended')
                        <p>{{ $message }}</p>
                    @enderror
                    
                    <div class="login-tulisan">
                        <a href="#" class="decor_forgot">forgot your password?</a><br>
                    </div>

                    <div class="submit-tengah">
                        <button class="tombol-submit" type="submit">Login</button>
                    </div>

                    <div class="login-tulisan">
                        <p class="ga-punya-akun">Don't have an account? <a class="garis-bawah" href="register">Sign up here</a></p>
                    </div>

                </form>
                
            </div>

        </div>
    </main>
</body>
</html>
