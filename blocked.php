<!doctype html>
<html lang="en">

<head>
    <title>Access Blocked</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <style>
    html,
    body {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
    }

    * {
        box-sizing: border-box;
    }

    .blink_print {
        animation: blinker 2s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

    body {
        background: #d6433b;
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    article {
        width: 100%;
        max-width: 1000px;
        padding: 50px;
        margin: 0 auto;
    }

    h1 {
        font-size: 48px;
        font-weight: 700;
    }

    p {
        font-size: 20px;
        font-weight: 300;
    }

    a {
        color: #fff;
        font-weight: bold;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    svg {
        width: 170px;
    }

    .countdown {
        font-weight: 600;
        color: #e2e2e2;
        margin-top: 20px;
    }

    .timer-number {
        font-size: 2.5em;
        margin: 0 0.25em;
    }

    @media (min-width: 960px) {
        .countdown {
            font-size: 20px;
        }
    }
    </style>
</head>

<body>
    <article>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202.24 202.24">
            <path fill="#fff"
                d="M101.12,0A101.12,101.12,0,1,0,202.24,101.12,101.12,101.12,0,0,0,101.12,0ZM159,148.76H43.28a11.57,11.57,0,0,1-10-17.34L91.09,31.16a11.57,11.57,0,0,1,20.06,0L169,131.43a11.57,11.57,0,0,1-10,17.34Z" />
            <path fill="#fff"
                d="M101.12,36.93h0L43.27,137.21H159L101.13,36.94Zm0,88.7a7.71,7.71,0,1,1,7.71-7.71A7.71,7.71,0,0,1,101.12,125.63Zm7.71-50.13a7.56,7.56,0,0,1-.11,1.3l-3.8,22.49a3.86,3.86,0,0,1-7.61,0l-3.8-22.49a8,8,0,0,1-.11-1.3,7.71,7.71,0,1,1,15.43,0Z" />
        </svg>
        <h1 class="blink_print">ACCESS TEMPORARILY BLOCKED</h1>
        <p>IP Anda <strong>183.23.32.33</strong> telah melakukan terlalu banyak permintaan ke server.</p>
        <p>Silakan coba kembali dalam waktu:</p>
        <div id="timer" class="countdown">
            <span class="timer-number" id="hours"></span>h :
            <span class="timer-number" id="minutes"></span>m :
            <span class="timer-number" id="seconds"></span>s
        </div>
        <p>Jika Anda merasa ini kesalahan, hubungi administrator <strong>SEKOLAH UTSMAN DEV</strong>.</p>
    </article>

    <script>
    let CountDownTimer = (dt, id) => {
        let end = new Date(dt);
        let _second = 1000,
            _minute = _second * 60,
            _hour = _minute * 60;
        let timer;

        let showRemaining = () => {
            let now = new Date();
            let distance = end - now;
            if (distance < 0) {
                clearInterval(timer);
                document.getElementById(id).innerHTML = 'Silakan refresh halaman.';
                return;
            }
            let hours = Math.floor((distance) / _hour);
            let minutes = Math.floor((distance % _hour) / _minute);
            let seconds = Math.floor((distance % _minute) / _second);
            document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');
        }

        timer = setInterval(showRemaining, 1000);
    };

    // Set timer to 1 hour from now
    let now = new Date();
    let oneHourLater = new Date(now.getTime() + (60 * 60 * 1000));
    CountDownTimer(oneHourLater, 'timer');
    </script>
</body>

</html>