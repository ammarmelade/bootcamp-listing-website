<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style__home.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <title>Discover and Advertise Bootcamps | O-Camp</title>
</head>
<body>
    <header>
        <div class="flex-between">
          <div class="judul-ocamp">
            O-Camp
          </div>
          <div>
            <ul class="nav-ul flex">
              <li class="nav-item active">
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
          <div class="section-1 flex-between">
            <div style="width : 500px">
              <h1 class="judul-section-1">Quality promotion without the price tag</h1>
              <p class="isi-section-1">Maximize your bootcamp's exposure with ease. Post on our website for a small fee and attract interested participants to your page</p>
              <div class="deret-button">
                <ul class="flex-between "> 
                  <li class="button-1"><a class="button-section-1" href="service">Services<a></li>
                  <li class="button-2"><a class="button-section-2" href="about-us">About Us<a></li>
                </ul>
              </div>
            </div>

            <div>
              <img src="images/Gambar Komputer.png" alt="Computer Image">
            </div>
          </div>

          <div class="section-2">
            <h1 class="key-ben">KEY BENEFIT</h1>
          </div>

          <div class="section-3">
            <div class="flex-between" style="width : 1200px">
              <div class="inside-section-3">
                <div>
                  <div class="flex-center">
                    <img src="images/otak.png" alt="Gambar Otak">
                  </div>
                  <h3 class="align-center margin-top">Upgrade your knowledge</h3>
                  <p class="align-center margin-top tulisan-section-3">Unleash your knowledge potential with discovery</p>
                </div>
              </div>
  
              <div class="inside-section-3">
                <div>
                  <div class="flex-center">
                    <img src="images/coin.png" alt="Gambar Otak">
                  </div>
                  <h3 class="align-center margin-top">Affordable</h3>
                  <p class="align-center margin-top tulisan-section-3">Budget-friendly without compromising quality</p>
                </div>
              </div>
            </div>
          </div>

          <x-footer/>
          
        </div>
    </main>

</body>
</html>