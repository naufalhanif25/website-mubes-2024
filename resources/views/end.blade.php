@if ($agent->isDesktop())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Thanks | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="login_pg" style="overflow: hidden">
        <a href="home">
            <img src="/img/left-arrow.png" alt="" class="icon" class="icon" style="width: 3.2vh; height: 3.2vh;">
        </a>
        <div style="width: 162vh; justify-content: center; align-items: center;">
            <div class="text_v" style="position: relative; display: flex; animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite; left: 14.6vh; top: 16vh">
                <h1 style="font-size: 9.4vh; right: 50vw; left: 50vw; margin: 0; padding: 0">Terima Kasih</h1>
            </div>
        </div>
        <div style="display: flex; position: relative; left: 38.8vw; top: 22vh; margin: 0; padding: 0">
            <h2 style="font-size: 3.2vh; font-family: easvhs">Anda telah melakukan vote</h2>
        </div>
        <div style="position: relative; left: 41vw; top: 24vh; margin: 0">
            <lottie-player class="round-lottie" src="/lottie/voted.json" background="transparent" style="height: 32vh; width: 32vh" loop autoplay></lottie-player>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </body>
    <div style="display: flex; position: relative">
        <div>
            <img src="/img/footer.png" alt="" class="footer" style="top: 46vh; width: 100vw; height: 12vh">
        </div>
        <div class="footer_icon">
            <img src="/img/hmif.png" alt="" class="hmif" style="top: 50vh">
            <img src="/img/if.png" alt="" class="if" style="top: 50vh">
            <img src="/img/usk.png" alt="" class="usk" style="top: 50vh">
            <p class="footer_t" style="top: 50vh; font-size: 1.8vh">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
        </div>  
    </div> 
    </html>

@elseif ($agent->isMobile())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Thanks | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="login_pg" style="overflow: hidden">
        <a href="home">
            <img src="/img/left-arrow.png" alt="" class="icon">
        </a>
        <div style="width: 46vh; justify-content: center; align-items: center;">
            <div class="text_v" style="position: relative; display: flex; animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite; left: 6vh; top: 18vh; margin: 0">
                <h1 style="font-size: 6vh; right: 50vw; left: 50vw; margin: 0; padding: 0">Terima Kasih</h1>
            </div>
        </div>
        <div style="display: flex; position: relative; left: 15vw; top: 20vh; margin: 0; padding: 0">
            <h2 style="font-size: 2vh; font-family: easvhs; padding: 0; margin: 0">Anda telah melakukan menggunakan hak suara</h2>
        </div>
        <div style="position: relative; left: 30vw; top: 32vh; margin: 0">
            <lottie-player class="round-lottie" src="/lottie/voted.json" background="transparent" style="height: 28vh; width: 28vh; margin: 0" loop autoplay></lottie-player>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <div style="display: flex; position: relative; margin: 0; padding: 0">
            <div>
                <img src="/img/footer.png" alt="" class="footer" style="top: 112vh; margin: 0; width: 128vw; height: 6vh">
            </div>
            <div class="footer_icon" style="top: 0; margin: 0; bottom: 0">
                <img src="/img/hmif.png" alt="" class="hmif" style="top: 0; margin: 0">
                <img src="/img/if.png" alt="" class="if" style="top: 0; margin: 0">
                <img src="/img/usk.png" alt="" class="usk" style="top: 0; margin: 0">
                <p class="footer_t" style="top: 0; margin: 0; padding: 0; top: 115vh; left: 7.4vw; font-size: 1.46vh; width: 110vw">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
            </div>  
        </div>
    </body>
    </html>

@endif