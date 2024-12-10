@if ($agent->isDesktop())
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quick Count | MUBES 2024</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="count">
        <a href="{{ url('home') }}">
            <img src="/img/left-arrow.png" alt="" class="icon" style="width: 3.2vh; height: 3.2vh;">
        </a>
        <div style="width: 180vh; justify-content: center; align-items: center">
            <div class="text_v" style="position: relative; display: flex; animation: typing1 2s steps(8, end) forwards, blink-caret 1s infinite; left: 5vh; top: 11vh">
                <h1 style = "font-size: 9.4vh; right: 50vw; left: 50vw; margin: 0; padding: 0">Real Time Vote</h1>
            </div>
        </div>
        <div class="container_q" style="margin-bottom: 0">
            <div class="charta" style="margin-bottom: 0; width: 64vh; top: 24vh; left: 62vh;">
                <canvas id="chart"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>

                    const candidates = @json($candidates);

                    const labels = candidates.map(candidate =>  candidate.nama);
                    const votes = candidates.map(candidate => candidate.votes);
                    const ctx = document.getElementById('chart').getContext('2d');

                    const chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: labels, //['Kandidat 1', 'Kandidat 2', 'Kandidat 3', 'Kandidat4'],
                        datasets: [{
                        label: 'Jumlah Vote',
                        data: votes, //[30, 50, 80, 20],
                        backgroundColor: [
                            'rgba(0, 26, 171, 0.851)',
                            'rgba(225, 172, 0, 0.851)',
                            'rgba(29, 150, 7, 0.762)'
                            // 'rgba(70, 0, 255, 0.5)'
                        ],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                    });
                </script>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
        <div style="display: flex; position: absolute">
            <div>
                <img src="/img/footer.png" alt="" class="footer" style="height: 8vh; width: 100vw; margin-top: 12vh">
            </div>
            <div class="footer_icon">
                <img src="/img/hmif.png" alt="" class="hmif" style="top: 87vh; bottom: 0; margin: 0; top: 99vh">
                <img src="/img/if.png" alt="" class="if" style="top: 87vh; bottom: 0; margin: 0; top: 99vh">
                <img src="/img/usk.png" alt="" class="usk" style="top: 87vh; bottom: 0; margin: 0; top: 99vh">
                <p class="footer_t" style="width: 100vw; margin: 0; top: 100vh; font-size: 1.8vh">Copyright @ Himpunan Mahasiswa Informatika 2024. All Rights Reserved</p>
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
        <title>Quick Count | MUBES 2024</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" type="image/x-icon" href="/css/clock_bg.png">
    </head>
    <body class="count" style="overflow-x: hidden">
        <a href="{{ url('home') }}">
            <img src="/img/left-arrow.png" alt="" class="icon">
        </a>
        <div class="txt">
            <div class="txt_q"><p>Real Time Vote</p></div>
        </div>
        <div class="container_q">
            <div class="charta">
                <canvas id="chart"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const candidates = @json($candidates);

                    const labels = candidates.map(candidate =>  candidate.nama);
                    const votes = candidates.map(candidate => candidate.votes);
                    const ctx = document.getElementById('chart').getContext('2d');

                    const chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: labels, //['Kandidat 1', 'Kandidat 2', 'Kandidat 3', 'Kandidat4'],
                        datasets: [{
                        label: 'Jumlah Vote',
                        data: votes, //[30, 50, 80, 20],
                        backgroundColor: [
                            'rgba(0, 26, 171, 0.851)',
                            'rgba(225, 172, 0, 0.851)',
                            'rgba(29, 150, 7, 0.762)'
                            //'rgba(70, 0, 255, 0.5)'
                        ],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                    });
                </script>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>    
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