<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Química do ENEM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{--  Charts  --}}
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('charts/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('charts/css/mdb.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                background-image: url("../public/img/back_light_green.png");
                color: #636b6f;
                /* color: #f0f0f0; */
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
                color: #636b6f;
                /* color: #f0f0f0; */
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

            .social {
                position: fixed;
                left: 0;
                right: 0;
                bottom: 20%;
                width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Início</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Química do ENEM
                </div>

                <div class="links">
                    <a href="{{ route('questoes.index') }}">Itens Elaborados</a>
                    <a href="{{ route('tri.index') }}">Entenda a T.R.I</a>
                    <a href="{{ route('guias.index') }}">Guia de Elaboração de itens</a>
                    <a href="{{ route('questoes.create') }}">Elabore seu item</a>
                    <a href="{{ route('conteudos.index') }}">Conteúdos frequentes</a>
                    <a href="#">Provas de química anteriores</a>
                </div>
            </div>

            {{--  <div class="social">
                <!--Facebook-->
                <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
                <!--Twitter-->
                <a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
                <!--Google +-->
                <a class="btn-floating btn-lg btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
                <!--Linkedin-->
                <a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!--Instagram-->
                <a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
                <!--Pinterest-->
                <a class="btn-floating btn-lg btn-pin" type="button" role="button"><i class="fab fa-pinterest"></i></a>
            </div>  --}}
        </div>
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src={{ asset('charts/js/jquery-3.3.1.min.js') }}></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src={{ asset('charts/js/popper.min.js') }}></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src={{ asset('charts/js/bootstrap.min.js') }}></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src={{ asset('charts/js/mdb.min.js') }}></script>
    </body>
</html>
