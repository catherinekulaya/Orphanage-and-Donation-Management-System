<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ORPHANAGE AND DONATION MANAGEMENT SYSTEM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* position:ablsolute; */
                background-color: #fff;
                /* opacity:1 */
                background-image:url('images/orphanage.JPG');
                color: #ffffff;
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
                font-size:10px;
                font-weight:100;
                color:rgb(255, 255, 255);
                text-align:left;
                allign: left;
            }
            .welcome h2{
                text-align: center;
            }

            body {
  font: 20px "Helvetica";
}

a {
  display: inline-block;
  margin: 20px;
  position: relative;
  text-decoration: none;
}

.donate {
  background: #51ff00;
  background: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,0.4) 100%),
              -webkit-linear-gradient(left, lighten(#7e5959, 15%) 0%, #ff0000 50%, lighten(#00684d, 15%) 100%);
  background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.4) 100%),
              linear-gradient(to right, lighten(#00684d, 15%) 0%, #00684d 50%, lighten(#00684d, 15%) 100%);
  background-position: 0 0;
  background-size: 200% 100%;
  border-radius: 4px;
  color: #fff;
  padding: 15px 65px 15px 15px;
  left: 600px;
  top:45px;
  text-shadow: 1px 1px 5px #666;
  -webkit-transition: all 800ms;
  transition: all 800ms;

  &:after {
    border-left: 1px solid darken(#00684d, 5%);
    color: darken(#00684d, 10%);
    content: "\f004";
    font: 20px "FontAwesome";
    padding: 10px 0;
    padding-left: 15px;
    position: absolute;
    right: 16px;
    top: 7px;
    -webkit-transition: all 600ms 200ms;
    transition: all 600ms 200ms;
  }

  &:hover {
    background-position: -100% 0;

    &:after {
      border-left: 1px solid lighten(#00684d, 5%);
      color: #fff;
      text-shadow: 0 0 10px #000;
    }
  }
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
position: fixed;">


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

                <marquee width="100%" direction="left" height="100px"style="color: #ff0000;"><strong style="font-size: 40px;">Welcome to Orphanage and Donation Management System!</marquee>
<h2 style="color: #ffffff;"><strong style="font-size: 23px;">Orphanage and Donation Management System is an online system that aims to digitize orphanage centers to conduct more reliable processes and management such as request for donations, easy donors payment through e-payments, system make process to be easy for Admins on management of Orphanage centers. </h2>
                        <a href="#" class="donate" class="after" style="color: #ff0000;href="><strong style="font-size: 50px;"> DONATE</a>

                </div>

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

            </div> -->
        </div>
    </body>
</html>
