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
        <img src="/img/left-arrow.png" alt="" class="icon">
    </a>
    <div class="form">
        <div class="img_form">
            <div class="form_lg">
            <img src="/img/stars.png" alt="" class="stars">
            <h2 class="text_lg">LOG IN</h2>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <!-- Input untuk NPM -->
                <label for="npm">NPM:</label>
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
                <label for="password">Password:</label>
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
                <button class="submit">Login</button>
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
</body>
</html>