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
                position: absolute; 
                left:90%;
                bottom: 700px;  

                text-decoration: none;
                padding: 3px;
                padding-left: 20px;
                padding-right: 20px;
                font-family: helvetica;
                font-weight: 300;
                font-size: 25px;
                font-style: italic;
                color: #F27405;
                background-color: #283B40;
                border-radius: 15px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img{
                position: relative;
                z-index:0;
                width:100% ;
                height: 765px;


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
                opacity: 0.6;
                text-decoration: none;
            }
  

            

        </style>
    </head>
    <body>


            <div class="content" >
<!--                 <div class="title m-b-md">
                    Leon
                </div> -->
                <img src="{{ asset('img/skate.jpg') }}" alt="" >
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

