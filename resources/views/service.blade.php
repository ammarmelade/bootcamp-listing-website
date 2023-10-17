<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style__service.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <title>Service | O-Camp</title>
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
            <div style="width : 900px">
                <div class="section-1">
                    <h1 class="judul-service">O-Camp is a Small <br> Website, but with Big Results</h1>
                </div>
    
                <p class="section-2">Your Bootcamp wasn’t built to be hidden. Help it stand out with our services.</p>
    
                <p class="section-3">
                    Our services are budget-friendly, and we offer the convenience of paying through an e-wallet. Each time a user clicks on your bootcamp, the payment will be deducted from your e-wallet balance
                </p>
                
                <div class="section-4">
                    <a class="button-service" href="create-bootcamp">Use Our Services</a> 
                </div>
            </div>
        </div>

    </main>

    <x-footer/>
</body>
</html>