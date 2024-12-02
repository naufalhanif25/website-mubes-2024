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
        <img src="/img/left-arrow.png" alt="" class="icon">
    </a>
    <div class="form">
        <div class="img_form">
            <div class="form_lg">
            <img src="/img/stars.png" alt="" class="stars">
            <h2 class="text_rg">REGISTER</h2>
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <input type="text" placeholder="Masukkan NPM" name="npm" id="npm" required class="inp inp1">
                <br>
                <input type="text" placeholder="Masukkan Nama" name="name" id="name" required class="inp inp2">
                <br>
                <input type="password" placeholder="Masukkan Password" name="password" id="password" required class="inp inp3">
                <a href="login" class="link link2">
                    <p>Udah punya akun? Langsung Log In</p>
                </a>
                <br>
                <button class="submit">Sign Up</button>
            </form>
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