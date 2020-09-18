<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alpha Gadgets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url('images/home.jpg');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: -145px;
            }

            .title {
                font-size: 84px;
                border-radius: 25px;
                background-color: #8d98a7;
                color: #250000;
                padding: 0px 14px;
                opacity: 0.6;
                font-size: 100;
                font-weight: bold;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .cta > a {
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn {
                cursor: pointer;
                border-radius: 25px;
            }

            .btn-info {
                background-color: #78b383;
                color: #250000;
            }

            .countdown {
                display: flex;
                justify-content: center;
            }

            .countdown div {
                border-radius: 10px;
                background-color: #000000;
                font-size: 30px;
                opacity: 0.6;
                margin: 5px;
                padding: 5px;
                font-weight: 900;
                color: white;
            }

            .message {
                color: red;
                text-transform: uppercase;
                font-size: 50px;
            }

            .timer-board {
                margin-bottom: 30px;
            }

            .timer-board h2 {
                margin: 0;
                font-size: 30px;
                color: #afc1c5;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="timer-board">
                    <h2>Wait for it...</h2>
                </div>
                <div class="title m-b-md">
                    alpha gadgets
                </div>

                @guest
                    <div class="cta">
                        <a href="{{ route('preorder.create') }}" class="btn btn-info">Pre Order Now</a>
                    </div>
                @endguest
            </div>
        </div>

        <script>
            var countDownDate = new Date("Sep 30, 2020 00:00:00").getTime();

            var x = setInterval(function() {
                let now = new Date().getTime();
                let duration = countDownDate - now;
                let days = Math.floor((duration / (1000 * 60 * 60 * 24)));
                let hours = Math.floor((duration % (1000 * 60 * 60 * 24)) / (60 * 60 * 1000));
                let minutes = Math.floor((duration % (1000 * 60 * 60)) / (60 * 1000));
                let seconds = Math.floor((duration % (1000 * 60)) / (1000));
                let timerDisplay = document.querySelector('.timer-board');
                let message = '';

                if(duration < 0) {
                    message = "<div class=\"message\">Sorry. Time has expired for preorder!</div>";
                } else {
                    message = `<div class="countdown">
                                    <div id="days">${days} days</div>
                                    <div id="hours">${hours} hrs</div>
                                    <div id="minutes">${minutes} mins</div>
                                    <div id="seconds">${seconds} secs</div>
                                </div>
                                <h2>Remaining</h2>`;
                }

                timerDisplay.innerHTML = message;
            }, 1000);
        </script>
    </body>
</html>
