<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Vote | MUBES 2024</title>
    <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
</head>
<body class="vote">
    <div class="menu">
        <span class="menu"><button class="pseudo_btn"><img src="/img/menu.png" alt="" class="menu_img"></button></span>
        <div class="menu_content">
        <img src="/img/close.png" alt="" class="cross">    
        <a href="home" class="link_content"><p class="text_content">Home</p></a>
        <a href="vote" class="link_content"><p class="text_content">Candidate</p></a>
        </div>
    </div>
    <div class="countdown">
        <p id="demo"></p>

        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 10, 2024 17:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
        
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
        
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
          // Display the result in the element with id="demo"
          document.getElementById("demo").innerHTML = hours + ": " + minutes + ": " + seconds + " ";
        
          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
    </div>
    <div class="text_v">
        <h2>Voting</h2>
    </div>
    <div class="box_va box_vai">
        <img src="/img/sampl1.png" alt="" class="cndt">
        <div class="box_vb">
            <div class="info">
                <div class="name">
                    <p class="name_p">Kandidat 1</p>
                    <p class="let">Informatika 22</p>
                </div>
            </div>
        </div>
    </div>
    <button class="btn_v btn_v1">
        VOTE
    </button>
    <div class="box_va box_vbi">
        <img src="/img/sampl2.png" alt="" class="cndt">
        <div class="box_vb">
            <div class="info">
                <div class="name">
                    <p class="name_p">Kandidat 2</p>
                    <p class="let">Informatika 22</p>
                </div>
            </div>
        </div>
    </div>
    <button class="btn_v btn_v2">
        VOTE
    </button>
    <div>
        <img src="/img/footer.png" alt="" class="footer">
    </div>
    <div class="footer_icon_vt">
        <img src="/img/hmif.png" alt="" class="hmif">
        <img src="/img/if.png" alt="" class="if">
        <img src="/img/usk.png" alt="" class="usk">
        <p class="footer_t">Copyright 2024@ Himpunan Mahasiswa Informatika.</p>
</body>
</html>