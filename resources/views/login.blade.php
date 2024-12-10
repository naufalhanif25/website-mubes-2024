@if ($agent->isDesktop())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Login | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="login_pg">
        <a href="home">
            <img src="/img/left-arrow.png" alt="" class="icon" class="icon" style="width: 3.2vh; height: 3.2vh;">
        </a>
        <div class="form" style="margin: 20vh auto;
                                 min-width: 42vh;
                                 min-height: 52vh;
                                 max-width: 62vh;
                                 max-height: 62vh;
                                 height: auto;
                                 width: auto;">
            <div class="img_form" style="justify-content: center;">
                <img src="/img/stars.png" alt="" class="stars" style="min-width: 42vh;
                                                                      min-height: 52vh;
                                                                      max-width: 62vh;
                                                                      max-height: 52vh;
                                                                      height: auto;
                                                                      width: auto;">
                <div style="justify-content: center; text-align: center; align-items: center; margin-top: 6vh">
                    <div class="text_lg typing3" style="animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite; left: 9vh">
                        <h1 style="font-size: 5vh; font-family: upheaval; width: 42vh; margin: 0;">LOG IN</h1>
                    </div>
                </div>
                <form action="{{ route('login.submit') }}" method="GET">
                    @csrf
                    <!-- Input untuk NPM -->
                    <label for="npm"></label>
                    <input 
                        type="text" 
                        name="npm" 
                        id="npm" 
                        value="{{ old('npm') }}" 
                        placeholder="Masukkan NPM" 
                        required class="inp inp4"
                    >
                    @error('npm')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <!-- Input untuk Password -->
                    <label for="password"></label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Masukkan Password" 
                        required class="inp inp5"
                    >
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <a href="register" class="link link3" style="left: 98vh; top: 52vh; justify-content: center">
                        <p>Belum punya akun? Sign Up dulu</p>
                    </a>
                    <br>		
                    <!-- Submit Button -->
                    <button class="button submit" style="font-size: 1.8vh; padding: 1.2vh 2vh; top: 60vh">Login</button>
                </form>
                
                @if (session('gagal'))
                    <p class="text-danger">{{ session('gagal') }}</p>
                @endif   
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
        </div>
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
        <title>Login | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="login_pg" style="overflow-x: hidden">
        <a href="home">
            <img src="/img/left-arrow.png" alt="" class="icon">
        </a>
        <div class="form">
            <div class="img_form">
                <div class="form_lg">
                <img src="/img/stars.png" alt="" class="stars">
                <h2 class="text_lg">LOG IN</h2>
                <form action="{{ route('login.submit') }}" method="GET">
                    @csrf
                    <!-- Input untuk NPM -->
                    <label for="npm"></label>
                    <input 
                        type="text" 
                        name="npm" 
                        id="npm" 
                        value="{{ old('npm') }}" 
                        placeholder="Masukkan NPM" 
                        required class="inp inp4"
                    >
                    @error('npm')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <!-- Input untuk Password -->
                    <label for="password"></label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Masukkan Password" 
                        required class="inp inp5"
                    >
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <a href="register" class="link link3">
                    <p>Belum punya akun? Sign Up dulu</p>
                    </a>
                    <br>		
                    <!-- Submit Button -->
                    <button class="submit submit2">Login</button>
                </form>
                
                @if (session('gagal'))
                    <p class="text-danger">{{ session('gagal') }}</p>
                @endif
                </div>    
            </div>
        </div>
        <div>
            <img src="/img/footer.png" alt="" class="footer">
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