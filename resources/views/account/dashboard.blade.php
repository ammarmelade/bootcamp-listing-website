<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | O-Camp</title>
    <link rel="stylesheet" href="/style__dashboard.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@300&display=swap" rel="stylesheet">
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
              <li class="nav-item">
                <a class="nav-link" href="service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="dashboard">Account</a>
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

            <x-dashboard-change-password/>
            
            <div id="topup-popup" class="back-hitam">
                <div class="kotak-topup">
                    <div>
                        <div class="flex-center">
                            <img src="images/qr.png" class="img-qr" alt="gambar qr">
                        </div>
                        <div class="flex-center mt-30">
                            <p style="text-align:justify">Please note that there might be a delay or other unforeseen issues with your e-wallet balance update.</p>
                        </div>

                        <div class="flex-between mt-30">

                            <form id="topupbtns1" action="/topup/1" method="post">
                                @csrf
                                <a href="#" onclick="document.getElementById('topupbtns1').submit()"><img class="img-logo" src="images/gopay.png" alt="logo gopay"></a>
                            </form>

                            <form id="topupbtns2" action="/topup/2" method="post">
                                @csrf
                                <a href="#" onclick="document.getElementById('topupbtns2').submit()"><img class="img-logo" src="images/dana.png" alt="logo dana"></a>
                            </form>

                            <form id="topupbtns3" action="/topup/3" method="post">
                                @csrf
                                <a href="#" onclick="document.getElementById('topupbtns3').submit()"><img class="img-logo" src="images/ovo.png" alt="logo ovo"></a>
                            </form>

                            <form id="topupbtns4" action="/topup/4" method="post">
                                @csrf
                                <a href="#" onclick="document.getElementById('topupbtns4').submit()"><img class="img-logo" src="images/gpn.png" alt="logo gpn"></a>
                            </form>

                            <form id="topupbtns5" action="/topup/5" method="post">
                                @csrf
                                <a href="#" onclick="document.getElementById('topupbtns5').submit()"><img class="img-logo" src="images/ofa.png" alt="logo ofa"></a>
                            </form>

                        </div>

                        <div class="flex-center mt-30">
                            <a href="#" class="topupback">back</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-atas">
                <h1 class="tulisan">My Account</h1>
                <div class="gambar-setting">
                    <a href="edit-account"><img src="images/setting.png" alt="gambar1" width="68px" height="68px"></a>                    
                </div>
            </div>
    
            <div class="container-tengah">
                <div class="box-kiri">

                    <div class="box-luar">
                        <div class="box-atas">
                            <div class="gambar-orang">

                                @php
                                    $profile_picture_filepath = 'storage/' . $user->profile_picture_path;
                                @endphp

                                <img src="{{ asset($profile_picture_filepath) }}" width="75px" height="77px">
                            </div>
                            
                            <div class="deskripsi">
                                <div class="nama-orang">
                                    <h1 class="nama">{{ $user->firstname }} {{ $user->lastname }}</h1>
                                </div>    
                                <div class="garis-lurus">
                                    <h1 class="jabatan"></h1>
                                </div>
                                <div class="email">                                            
                                    <h1 class="email-user">{{ $user->email }}</h1>
                                </div>
                            </div>
                        </div>
    
                        <div class="box-bawah">
                            <div class="kotak-info">
                                <h1 class="info">{{ $user->bio }}</h1>
                            </div>
                        </div>

                    </div>
                
                    <div class="container-luar">
                        <div class="box-kanan">
                            <div class="wadah-atas">
                                <div class="wallet">
                                    <h1 class="e-wallet">E-Wallet</h1>
                                        <div class="jumlah-uang">
                                            <h1 class="RP">Rp</h1>
                                            <h2 class="uang">{{ number_format($user->e_wallet_balance, 2, '.', ',') }}</h2>
                                        </div>
                                </div>
                                
                                <div class="gambar-cash">
                                    <img src="images/money.png" width="81px" height="59.5px">
                                </div>
                            </div>
                            
                            <div class="wadah-tengah">
                                <div class="topup">
                                    <div class="gambar-topup">
                                        <a href="#topup-popup"><img src="images/upload.png" width="30px" height="35px"></a>
                                    </div>
                                    <div class="tulisan-topup">
                                        <h1 class="penulisan">Top Up</h1>
                                    </div>
                                </div>

                                <div class="garis-pemisah">
                                    <h1 class="garis">-----</h1>
                                </div>
                            
                                <a href="transactions">

                                    <div class="history">
                                        <div class="gambar-history">
                                            <img src="images/history.png" width="30px" height="35px">
                                        </div>
                                        <div class="tulisan-history">
                                            <h1 class="penulisan">History</h1>
                                        </div>
                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <h1 class="password">Password and Authentication</h1>
            
            <div class="container-bawah">
                <div>
                    <div class="button">
                        <a href="#popup-success" class="change">Change Password</a>
                    </div>
                </div>
                <div>
                    <form action="/logout" method="post">
                        @csrf
                        <div>
                            <button type="submit"  class="button-2">Log Out</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        
    </main>

    <x-footer/>

</body>
</html>