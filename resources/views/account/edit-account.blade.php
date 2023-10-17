<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style__edit-account.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
    <title>Edit Account | O-Camp</title>
</head>
<body>

    <header>

        <div class="flex-between">

          <div class="judul-ocamp">O-Camp</div>

          <div>
            <ul class="nav-ul flex">
              <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bootcamps">Bootcamp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="dashboard">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inbox">Mail</a>
              </li>
            </ul>
          </div>
        </div>
    </header>

    <main>

        <div class="pembungkus-main"> 

           <div class="flex-center">

                <div class="pembatas-kiri">
                    <h2>Profile Picture</h2>

                    @php
                        $profile_picture_filepath = 'storage/' . $user->profile_picture_path;
                    @endphp
                    
                    <img class="gambar-kiri" id="#image-profile" src="{{ asset($profile_picture_filepath) }}" alt="prof pic">

                    <div class="flex-between mt-2">

                      <form action="remove-profile-picture" method="post">
                        @csrf
                        <button class="button-kiri" type="submit">Remove</button>
                      </form>

                      <form action="change-profile-picture" method="post" enctype="multipart/form-data">

                        @csrf

                        <input type="file" onchange="form.submit()" id="file-choose" name="picture" style="display:none;"/>

                        <label for="file-choose" class="button-kiri">Change</label>

                      </form>

                    </div>
                </div>

                <div>

                    <form action="/edit-account" method="post">

                        @csrf

                        <div class="satu-kesatuan">
                            <label class="anak-judul" for="username">Username (Click to edit)</label><br>
                            <input placeholder = "nama" class="input-form" type="text" id="nama" name="username" value="{{ $user->username }}"><br>

                            @error('username')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="satu-kesatuan">
                            <label class="anak-judul" for="phone_number">Phone Number (Click to edit)</label><br>
                            <input placeholder = "Phone number" class="input-form" type="tel" id="note" name="phone_number" value="{{ $user->phone_number }}"><br>

                            @error('phone_number')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="satu-kesatuan">  
                            <label class="anak-judul" for="email">Email (Click to edit)</label><br>
                            <input placeholder = "Email" class="input-form" type="email" id="email-orang" name="email" value="{{ $user->email }}" required><br>

                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="satu-kesatuan">
                            <label class="anak-judul" for="bio">Bio / Caption (Click to edit)</label><br>
                            <textarea placeholder="{{ $user->bio }}" name="bio" class="input-form bio">{{ $user->bio }}</textarea><br>

                            @error('bio')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-between">

                            <a href="dashboard"><div class="btn btn-danger button-kanan">Cancel</div></a>

                            <button class="btn btn-primary button-kanan" type="submit">Save Changes</button>

                        </div>
                    
                    </form>

                </div>
           </div> 
        </div>
    </main>

    <x-footer/>
</body>
</html>