@if ($agent->isDesktop())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Register | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="login_pg">
        <a href="{{ url('home') }}">
            <img src="/img/left-arrow.png" alt="" class="icon" style="width: 3.2vh; height: 3.2vh;">
        </a>
        <div class="form-reg" style="margin: 20vh auto;
                                     min-width: 42vh;
                                     min-height: 64vh;
                                     max-width: 62vh;
                                     max-height: 72vh;
                                     height: auto;
                                     width: auto;">
            <div class="img_form" style="justify-content: center">
                <img src="/img/stars.png" alt="" class="stars" style="min-width: 42vh;
                                                                      min-height: 64vh;
                                                                      max-width: 62vh;
                                                                      max-height: 72vh;
                                                                      height: auto;
                                                                      width: auto;">
                <div style="justify-content: center; text-align: center; align-items: center; margin-top: 6vh">
                    <div class="text_lg" style="animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite">
                        <h1 style="font-size: 5vh; font-family: upheaval; width: 62vh; margin: 0">REGISTER</h1>
                    </div>
                </div>
                <form action="{{ route('register.submit') }}" method="GET" style="justify-content: center">
                    @csrf
                    <input type="text" placeholder="Masukkan Nama" name="name" id="name" required class="inp inp2 inp-align" style="height: 6vh;
                                                                                                                                    width: 48vh;
                                                                                                                                    padding-left: 1vh;
                                                                                                                                    font-size: 1.8vh;
                                                                                                                                    font-family: easvhs">
                    <br>
                    <input type="text" placeholder="Masukkan NPM" name="npm" id="npm" required class="inp inp1 inp-align" style="height: 6vh;
                                                                                                                                 width: 48vh;
                                                                                                                                 padding-left: 1vh;
                                                                                                                                 font-size: 1.8vh;
                                                                                                                                 font-family: easvhs">
                    <br>
                    <input type="password" placeholder="Masukkan Password" name="password" id="password" required class="inp inp3 inp-align" style="height: 6vh;
                                                                                                                                                    width: 48vh
                                                                                                                                                    padding-left: 1vh;
                                                                                                                                                    font-size: 1.8vh;
                                                                                                                                                    font-family: easvhs">
                    <br>
                    <a href="login" class="link link2" style="left: 96vh; top: 34vh; justify-content: center">
                        <p style="margin-top: 28vh">Udah punya akun? Langsung Log In</p>
                    </a>
                    <br>
                    <button class="button submit" style="top: 70%; font-size: 1.8vh; padding: 1.2vh 2vh; top: 70vh">Sign Up</button>
                </form>
            </div>
        </div>
        <!-- <div>
            <img src="/img/footer.png" alt="" class="footer">
        </div>
        <div class="footer_icon">
            <img src="/img/hmif.png" alt="" class="hmif">
            <img src="/img/if.png" alt="" class="if">
            <img src="/img/usk.png" alt="" class="usk">
            <p class="footer_t">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
        </div> -->
    </body>
    </html>

@elseif ($agent->isMobile())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Register | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="login_pg rg" style="overflow-x: hidden">
        <a href="home">
            <img src="/img/left-arrow.png" alt="" class="icon">
        </a>
        <div class="form">
            <div class="img_form">
                <div class="form_lg">
                <img src="/img/stars.png" alt="" class="stars">
                <div style="width: 32vh">
                    <h2 class="text_rg" style="padding: 0">REGISTER</h2>
                </div>
                <form action="{{ route('register.submit') }}" method="GET">
                    @csrf
                    <input type="text" placeholder="Masukkan NPM" name="npm" id="npm" required class="inp inp1">
                    <br>
                    <input type="text" placeholder="Masukkan Nama" name="name" id="name" required class="inp inp2">
                    <br>
                    <input type="password" placeholder="Masukkan Password" name="password" id="password" required class="inp inp3">
                    <div>
                        <a href="login" class="link link2" style="left: 2vh">
                            <p>Udah punya akun? Langsung Log In</p>
                        </a>
                    </div>
                    <br>
                    <button class="submit submit 2">Sign Up</button>
                </form>
                </div>    
            </div>
        </div>
        <div>
            <img src="/img/footer.png" alt="" class="footer_rg">
        </div>
        <div class="footer_icon">
            <img src="/img/hmif.png" alt="" class="hmif">
            <img src="/img/if.png" alt="" class="if">
            <img src="/img/usk.png" alt="" class="usk">
            <p class="footer_t">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
        </div>
    </body>
    </html>

@endif