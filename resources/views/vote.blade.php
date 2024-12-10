@if ($agent->isDesktop())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Vote | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
        <style>
            #candidates {
                display: flex;
                flex-wrap: wrap; /* Agar elemen bisa turun ke baris berikutnya jika tidak muat */
                background-color: #ffffff;
                justify-content: center;
                gap: 8vh; /* Memberikan jarak antar elemen */
            }
            .candidate-box {
                background-color: #ffffff;
                padding: 2vh;
                width: 52vh;
                height: 64vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                border-radius: 2vh;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .candidate-box img {
                width: 36vh;
                border-radius: 2vh;
            }
            .candidate-box .info {
                text-align: center;
            }
            .candidate-box .name_p {
                font-size: 3.2vh;
                margin: 0;
                margin-top: 2vh;
            }
            .candidate-box .let {
                font-size: 1.8vh;
                margin: 0;
            }
            .candidate-box button {
                padding: 1vh 2vh;
                font-size: 1.8vh;
            }
        </style>
    </head>
    <body class="vote">
        <div class="menu">
            <span class="menu"><button class="pseudo_btn"><img src="/img/menu.png" alt="" class="menu_img" style="width: 3.2vh; height: 3.2vh;
                                                                                                                  left: 1vh; top: 1vh">
            </button></span>
            <div class="menu_content" style="width: 16vh; height: 22vh; border-radius: 2vh">
                <img src="/img/close.png" alt="" class="cross" style="width: 2.8vh; height: 2.8vh">
                <a href="home" class="link_content"><p class="text_content" style="font-size: 1.8vh">Home</p></a>
                <a href="vote" class="link_content"><p class="text_content" style="font-size: 1.8vh">Candidate</p></a>
            </div>
        </div>
        <div class="countdown" style="top: 22vh; width: 16vh; text-align: center; font-size: 1.8vh; left: 88vh">
            <p id="demo"></p>

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Dec 10, 2024 18:20:00").getTime();
                
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
        <div style="width: 82vh; justify-content: center; align-items: center;">
            <div class="text_v" style="position: relative; display: flex; animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite; left: 56vh; top: 8vh">
                <h1 style = "font-size: 9.4vh; right: 50vw; left: 50vw; margin: 0; padding: 0">Voting</h1>
            </div>
        </div>
        <div id='candidates' style="margin-top: 24vh">
            <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; top: 6vh">
                <img src="/img/Kandidat1.jpeg" alt="" class="cndt" style="width: 36vh; height: 38vh; object-fit: cover; object-position: center">
                <div class="box_vb" style="width: 36vh; height: 18vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">Glenn Hakim</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=1>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v2" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div>
            <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; top: 6vh">
                <img src="/img/Kandidat2.JPG" alt="" class="cndt" style="width: 36vh; height: 38vh; object-fit: cover; object-position: center">
                <div class="box_vb" style="width: 36vh; height: 18vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">M. Syahidal Akbar</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=2>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v2" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div>
            <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; top: 6vh">
                <img src="/img/Kandidat3.jpeg" alt="" class="cndt" style="width: 36vh; height: 38vh; object-fit: cover; object-position: center">
                <div class="box_vb" style="width: 36vh; height: 18vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">T. Farhan Syah</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=3>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v3" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div>
            <!-- <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; top: 6vh">
                <img src="/img/sampl2.png" alt="" class="cndt" style="width: 36vh">
                <div class="box_vb" style="width: 36vh; height: 24vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">Kandidat 4</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=2>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v4" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div> -->
        </div>          
        <div style="display: flex; position: relative">
            <div>
                <img src="/img/footer.png" alt="" class="footer" style="width: 100vw; height: 8vh; top: 24vh">
            </div>
            <div class="footer_icon">
                <img src="/img/hmif.png" alt="" class="hmif" style="top: 27vh">
                <img src="/img/if.png" alt="" class="if" style="top: 27vh">
                <img src="/img/usk.png" alt="" class="usk" style="top: 27vh">
                <p class="footer_t" style="top: 28vh; font-size: 1.8vh">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
            </div>  
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
        <title>Vote | MUBES 2024</title>
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
        <style>
            #candidates {
                display: flex;
                flex-wrap: wrap; /* Agar elemen bisa turun ke baris berikutnya jika tidak muat */
                background-color: #ffffff;
                justify-content: center;
                gap: 8vh; /* Memberikan jarak antar elemen */
            }
            .candidate-box {
                background-color: #ffffff;
                padding: 2vh;
                width: 52vh;
                height: 64vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                border-radius: 2vh;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .candidate-box img {
                width: 36vh;
                border-radius: 2vh;
            }
            .candidate-box .info {
                text-align: center;
            }
            .candidate-box .name_p {
                font-size: 3.2vh;
                margin: 0;
                margin-top: 2vh;
            }
            .candidate-box .let {
                font-size: 1.8vh;
                margin: 0;
            }
            .candidate-box button {
                padding: 1vh 2vh;
                font-size: 1.8vh;
            }
        </style>
    </head>
    <body class="vote" style="overflow-x: hidden">
        <div class="menu">
            <span class="menu"><button class="pseudo_btn"><img src="/img/menu.png" alt="" class="menu_img" style="width: 3.2vh; height: 3.2vh;
                                                                                                                  left: 1vh; top: 1vh">
            </button></span>
            <div class="menu_content" style="width: 16vh; height: 22vh; border-radius: 2vh">
                <img src="/img/close.png" alt="" class="cross" style="width: 2.8vh; height: 2.8vh">
                <a href="home" class="link_content"><p class="text_content" style="font-size: 1.8vh">Home</p></a>
                <a href="look" class="link_content"><p class="text_content" style="font-size: 1.8vh">Candidate</p></a>
            </div>
        </div>
        <div class="countdown" style="top: 18vh; width: 12vh; text-align: center; justify-content: center; font-size: 1.6vh; left: 17vh">
            <p id="demo"></p>

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Dec 10, 2024 18:20:00").getTime();
                
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
        <div style="width: 28vh; justify-content: center; align-items: center;">
            <div class="text_v" style="position: relative; display: flex; animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite; left: 8vh; top: 8vh">
                <h1 style = "font-size: 7.4vh; right: 50vw; left: 2vw; margin: 0; padding: 0">Voting</h1>
            </div>
        </div>
        <div id='candidates' style="margin-top: 24vh; margin-bottom: 24vh">
            <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; margin-bottom: 6vh">
                <img src="/img/Kandidat1.jpeg" alt="" class="cndt" style="width: 36vh; height: 38vh; object-fit: cover; object-position: center">
                <div class="box_vb" style="width: 36vh; height: 18vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">Glenn Hakim</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=1>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v1" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div>
            <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; margin-bottom: 6vh">
                <img src="/img/Kandidat2.JPG" alt="" class="cndt" style="width: 36vh; height: 38vh; object-fit: cover; object-position: center">
                <div class="box_vb" style="width: 36vh; height: 18vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">M. Syahidal Akbar</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=2>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v2" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
                
            </div>
            <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; margin-bottom: 6vh">
                <img src="/img/Kandidat3.jpeg" alt="" class="cndt" style="width: 36vh; height: 38vh; object-fit: cover; object-position: center">
                <div class="box_vb" style="width: 36vh; height: 18vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">T. Farhan Syah</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=3>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v3" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div>
            <!-- <div class="candidate-box box_va box_vai" style="width: 36vh; height: 50vh; margin: 0; padding: 0; border-radius: 2vh; margin-bottom: 4vh">
                <img src="/img/sampl2.png" alt="" class="cndt" style="width: 36vh">
                <div class="box_vb" style="width: 36vh; height: 24vh; top: -2vh; border-radius: 2vh; border-top-right-radius: 0; border-top-left-radius: 0;">
                    <div class="info" style="height: 12vh">
                        <div class="name">
                            <p class="name_p" style="font-size: 3.2vh; margin: 0; margin-top: 4vh; margin-bottom: 2vh">Kandidat 4</p>
                            <p class="let" style="font-size: 1.8vh; margin: 0">Informatika 22</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value=2>
                    <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                    <button class="btn_v btn_v4" style="left: -0.6vh; top: 52vh; width: 36vh; margin-top: 2vh">VOTE</button>
                </form>
            </div> -->
        </div>
        <div style="display: flex; position: relative; margin: 0">
            <div>
                <img src="/img/footer.png" alt="" class="footer" style="top: 0; margin: 0; width: 110%">
            </div>
            <div class="footer_icon" style="top: 0; margin: 0; bottom: 0">
                <img src="/img/hmif.png" alt="" class="hmif" style="top: 0; margin: 0">
                <img src="/img/if.png" alt="" class="if" style="top: 0; margin: 0">
                <img src="/img/usk.png" alt="" class="usk" style="top: 0; margin: 0">
                <p class="footer_t" style="top: 0; margin: 0; padding: 0; top: 2.2vh">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
            </div>  
        </div>
    </body>
    </html>

@endif