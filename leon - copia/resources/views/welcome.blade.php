<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leon</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #60413b;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img{
                margin-top:10%;

            }
            .Button {                
                background-color: rgb(240, 215, 210, 1);
                padding: 12px 24px;
                color: hsl(38, 80%, 62%);
                border-radius: 2px;
                border-bottom: 5px solid rgb(155, 77, 69, 0.8);
                border-top: 0px solid rgba(249, 250, 251);
                transition: all 0.1s ease-in-out;
            }

            .Button:hover {

                border-bottom-width: 0;
                border-top-width: 5px;
            }
  

            

        </style>
    </head>
    <body>


            <div class="content" >
<!--                 <div class="title m-b-md">
                    Leon
                </div> -->
                <img src="{{ asset('img/leon.png') }}" alt="" >
            </div>


            <div class="flex-center position-ref f">
            @if (Route::has('login'))
                <div class="bot-center links">   
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="Button">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        
    </body>
</html>

