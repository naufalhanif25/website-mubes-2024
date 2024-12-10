@if ($agent->isDesktop())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="main">
        <div class="typewriter-animation typing1" style = "animation: typing1 4s steps(16, end) forwards, blink-caret 1s infinite; margin-top: 8vh">
            <h1 style = "font-size: 9.4vh; right: 50vw; left: 50vw">SELAMAT DATANG</h1>
        </div>
        <div class="box" style="height: 48vh; width: 48vh; box-shadow: 2vh 2vh black;">
            <lottie-player class="round-lottie" src="/lottie/floating_boy.json" background="transparent" speed="1" style="height: 48vh; width: 48vh" loop autoplay></lottie-player>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <div class="text">
            <div class="hp">
                <h2 style="font-size: 4.4vh">DESKRIPSI</h2>
                <p class="p1" style="font-size: 1.8vh">Website E-Vote MUBES Informatika 2024 adalah website pemilihan ketua Himpunan Mahasiswa Informatika (HMIF) periode 2024-2025 dalam rangka Musyawarah Besar (MUBES) Himpunan Mahasiswa Informatika ke VII</p>
                <p class="p2" style="font-size: 1.8vh">Bayangkan kamu adalah seorang penjelajah waktu (time traveler). pergilah ke masa depan dengan menggunakan portal atau mesin waktu dan lihatlah bagaimana perkembangan informatika di masa depan. Apa yang kamu lihat adalah hasil dari pilihanmu hari ini. Maka dari itu, bijaklah. Gunakan hak pilihmu dengan sebaik-baiknya.</p>
            </div>
        </div>
        <div>
            <a href="register" class="a">
                <button class="button button1" style="font-size: 1.8vh; padding: 1.2vh 2vh; top: 62vh">Register</button>
            </a>
            <a href="login" class="a">
                <button class="button button2" style="font-size: 1.8vh; padding: 1.2vh 2vh; top: 62vh">Login</button>
            </a>
            <a href="look" class="a">
                <button class="button button3" style="font-size: 1.8vh; padding: 1.2vh 2vh; top: 62vh">Lihat Kandidat</button>
            </a>
            <a href="count" class="a">
                <button class="button button4" style="font-size: 1.8vh; padding: 1.2vh 2vh; top: 62vh">Quick Count</button>
            </a>
        </div>
        <div>
            <img src="/img/footer.png" alt="" class="footer">
        </div>
        <div class="footer_icon">
            <img src="/img/hmif.png" alt="" class="hmif">
            <img src="/img/if.png" alt="" class="if">
            <img src="/img/usk.png" alt="" class="usk">
            <p class="footer_t" style="font-size: 1.8vh;">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
        </div>
        <script>
            const isLoggedIn = localStorage.getItem('isLoggedIn'); 

            document.getElementById('look-link').addEventListener('click', function(event) { 
                if (isLoggedIn) { 
                    event.preventDefault();
                    window.location.href = 'vote';
            } }); 
        </script>
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
        <title>MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="main" style="overflow-x: hidden">
        <div class="typewriter-animation">
            <h1>SELAMAT DATANG</h1>
        </div>
        <div class="box">
            <lottie-player class="round-lottie" src="/lottie/floating_boy.json" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <div class="text">
            <div class="hp">
                <h2>DESKRIPSI</h2>
                <p class="p1">Website E-Vote MUBES Informatika 2024 adalah website pemilihan ketua Himpunan Mahasiswa Informatika (HMIF) periode 2024-2025 dalam rangka Musyawarah Besar (MUBES) Himpunan Mahasiswa Informatika ke VII</p>
                <p class="p2">Bayangkan kamu adalah seorang penjelajah waktu (time traveler). pergilah ke masa depan dengan menggunakan portal atau mesin waktu dan lihatlah bagaimana perkembangan informatika di masa depan. Apa yang kamu lihat adalah hasil dari pilihanmu hari ini. Maka dari itu, bijaklah. Gunakan hak pilihmu dengan sebaik-baiknya.</p>
            </div>
        </div>
        <div>
            <a href="register" class="a">
                <button class="button button1">Register</button>
            </a>
            <a href="login" class="a">
                <button class="button button2">Login</button>
            </a>
            <a href="look" class="a">
                <button class="button button3">Lihat Kandidat</button>
            </a>
            <a href="count" class="a">
                <button class="button button4">Quick Count</button>
            </a>
            
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