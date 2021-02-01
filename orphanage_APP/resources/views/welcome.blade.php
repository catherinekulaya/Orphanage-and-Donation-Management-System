<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* position:ablsolute; */
                background-color: #fff;
                /* opacity:0.1; */
                background-image:url('images/orphanage.JPG');
                color: #342ae6;
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
                color: red;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .welcome h1{
                font-size:72px;
                font-weight:800;
                color:red;
            }
        </style>
    </head>
    <body>
   <!-- <img src="images/orphanage.jpg " alt="orphanage center">-->
        <div class="flex-center position-ref full-height" style="background: #0a1515d1;">
        <div class="top-right links" style="background: black;
width: -moz-available;
text-align: -moz-right;
height: 50px;
padding-top: 18px;
position: fixed;
top: 0px;">

            @if (Route::has('login'))
                    @auth
                        <a style="
color: white;" href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="
color: white;"  href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="
color: white;"  href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
               
            @endif
            <a style="
color: white;"  href="{{ url('/about-us') }}">ABOUT-US</a>
                    <a style="
color: white;" href="{{url('/service')}}">SERVICE</a>
            </div>
            <div class="links">
                   
                    <!-- <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
            </div>



            <div class="welcome">
              
                 <marquee >   <h2 style="color: #c8c4c4;"><strong style="font-size: 59px;">Welcome to donate!</strong></h2></marquee>
            
            </div>

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

            </div> -->
        </div>
    </body>
</html>
