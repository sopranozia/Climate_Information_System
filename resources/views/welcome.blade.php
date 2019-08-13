<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
               
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


            .content{
                text-align: center;


            }


            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
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

            <div class="content" >
		      <div class = "numOne"><img src = "tumblr_n55t88X2e81r1tezoo3_500.gif" width = "1300" height = "300"/></div>


                <div class="title m-b-md">

                    Climate Information System

                </div>
              
                <div class="links">
                    <a href="{{route('Climate')}}">Climate Change</a>
                    <a href="https://climate.nasa.gov/earth-now">News</a>
                    <a href="{{route('Temperatures')}}">Global Temperatures</a>
                    <a href="{{route('About')}}">About Us</a>
                    <a href="{{route('Contact')}}">Contact Us</a>
                    <a href="{{('media')}}">Media</a>
                    <a href="{{url('/posts')}}">Blog</a>
                </div>
            </div>
        </div>
    </body>
</html>



