<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style__bootcamps.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <title>Discover Bootcamps | O-Camp</title>
</head>
<body>

    <div class="bg-img">

        <header>
            <div class="flex-between align-mid">
              <div class="judul-ocamp">
                O-Camp
              </div>
              <div>
                <ul class="nav-ul flex">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="bootcamps">Bootcamp</a>
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

        <div class="search">
            <div>
                <div class="flex-center">
                    <h2>DISCOVER YOUR BOOTCAMP HERE</h2>
                </div>
                <div class="flex-center mt-30">
                    <form action="" method="get">
                        <input id="myText" name="search" type="text" class="input-form" placeholder="Search Your Desired Bootcamp" value="{{ request('search') }}"><br>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <main>

        <div class="pembungkus-main">

            @for ($i = 0; $i < (sizeof($bootcamps)/3) + 1; $i++)
                
                <div class="flex-between">

                    @for ($j = 0; $j < 3; $j++)

                        @if ($j + ($i * 3) < sizeof($bootcamps))

                            <x-bootcamp-card :bootcamp="$bootcamps[$j + ($i * 3)]"/>
                            
                        @endif
                        
                    @endfor

                </div>

                <br><br>

            @endfor

        </div>

    </main>

    <x-footer/>
    
</body>
</html>