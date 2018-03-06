<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rutas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        html,body {
                
                background-color: #ebe9e5;
                color: red;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                text-shadow: 5px 5px 15px 15px #434343;

            }
            #hola{
                /*background-color: rgba(0,0,0,0.8);
                filter:brightness(0.4);
                filter: blur(6px);
                width: 100%;
                height: 100%;*/
                
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img{
                position: fixed;
                filter: blur(4px);
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="{{ asset('images/maps.png') }}" alt="">
        
        <div  class="flex-center position-ref full-height">
            
           
            <div class="content">
                <div class="title m-b-md" style="text-shadow: 0px 0px 10px  #000;">
                    Sistema de Rutas
                </div>

                <div class="links" style="text-shadow: 0px 0px 15px  #000;">
                    @if (Route::has('login'))
                <div class=" links" style="text-shadow: 0px 0px 15px  #000;">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>
                        {{-- <a href="{{ route('register') }}">Registrarse</a> --}}
                    @endauth
                </div>
            @endif                </div>
            </div>
        </div>
        </div>
    </body>
</html>
