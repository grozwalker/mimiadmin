<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Poiret One', cursive;
                font-weight: 100;
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
            }

            .title {
                font-size: 84px;
            }

            .links {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            li {
                list-style-type: none;
            }

            .social {
                margin-top: 50px;
            }

            .social__title {
                margin-bottom: 20px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/admin') }}">Admin</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mimi Home
                </div>

                <div class="links">
                    Магазинчик милых вещей
                </div>
                <div class="social">
                    <div class="social__title">
                        Мы в социальных сетях:
                    </div>
                    <!-- /.social__title -->
                    <ul class="social__links">
                        <li><a href="http://vk.com/mimi_home_krd" target="_blank">vk.com/mimi_home_krd</a></li>
                        <li><a href="instagram.com/_mimi_home_" target="_blank">http://instagram/_mimi_home_</a></li>
                    </ul>
                    <!-- /.social__links -->
                </div>
                <!-- /.social -->
            </div>
        </div>
    </body>
</html>
