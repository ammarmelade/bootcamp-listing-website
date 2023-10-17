<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style__use-service.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <title>Create Bootcamp | O-Camp</title>
</head>
<body>

    <header>
        <div class="flex-between">
          <div class="judul-ocamp">
            O-Camp
          </div>
          <div>
            <ul class="nav-ul flex">
              <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bootcamps">Bootcamp</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard">Account</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="inbox">Mail</a>
              </li> --}}
            </ul>
          </div>
        </div>
    </header>

    <main>

        <div class="pembungkus-main">

            <div class="flex-between">

                <div class="box-kiri">

                    <form action="/create-bootcamp" method="post" enctype="multipart/form-data">

                        @csrf

                        <h2>Post Your Bootcamp</h2>

                        <input placeholder = "Bootcamp Name" class="input-form2" type="text" id="nama" name="name" value="{{ old('name') }}" required><br>

                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror

                        <textarea placeholder = "Bootcamp Description" name="description"  class="input-form2 description" id="" value="{{ old('description') }}" required></textarea><br>

                        @error('description')
                            <p>{{ $message }}</p>
                        @enderror

                        <input placeholder = "+62 Phone Number" class="input-form2" type="text" id="nomor-telepon" name="phone_number" value="{{ old('phone_number') }}" required><br>
        
                        @error('phone_number')
                            <p>{{ $message }}</p>
                        @enderror

                        <input placeholder = "Email" class="input-form2" type="email" id="email" name="email" value="{{ old('email') }}" required><br>
        
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror

                        <input placeholder = "Price" class="input-form2" type="number" id="harga" name="fee" value="{{ old('fee') }}" required><br>
        
                        @error('fee')
                            <p>{{ $message }}</p>
                        @enderror

                        <input placeholder = "Bootcamp Link" class="input-form2" type="text" id=";link" name="link" value="{{ old('link') }}" required><br>
        
                        @error('link')
                            <p>{{ $message }}</p>
                        @enderror

                        <input id="myFile" type="file" hidden><br>

                        <input type="file" id="file-choose" name="document" style="display:none;"/>

                        <label for="file-choose" class="custom-upload">

                            <div style="padding : 13px;" class="align-mid">

                              <img src="images/upload.png" alt="logo-upload" style="margin-right : 20px; opacity : 0.6">

                              <span style="color : rgb(171, 171, 171);" id="file-choose">Upload Bootcamp Proposal</span>

                              {{-- https://stackoverflow.com/questions/16001586/change-the-no-file-chosen --}}

                            </div>

                        </label><br>
                        
                        <button type="submit" class="tombol-submit-div flex-center">Upload</button>

                        {{-- <div class="tombol-submit-div flex-center">

                          <a href="#popup-success" class="tombol-submit"><input type="submit" hidden/>Upload</a>

                        </div> --}}

                    </form>

                </div>

                <div id="popup-success" class="back-hitam">
                  <div class="kotak">
                      <div>
                          <div class="tulisan-popup">
                            Thank you for using our service. We appreciate your submission and kindly request your patience as we review your bootcamp. Rest assured that we will diligently assess its content and quality, and within the next two business days, we will inform you of the approval status. Please check mail menu patiently.
                          </div>
                          <div class="flex-center">
                            <a href="/dashboard" style="text-decoration: none;"><div class ="back-popup">back</div></a> 
                          </div>
                      </div>
                  </div>
                </div>

                <div class="flex-center align-mid box-kanan">
                  <div>
                    <div class="flex-center">
                      <img src="images/logo.png" alt="logo o-camp" class="image-kanan">
                    </div>
                    <p class="align-center tulisan-kanan" style="width : 400px">use our services to increase your bootcamp value</p>
                  </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>

    <script src="/scripts__use-service.js"></script>
</body>
</html>