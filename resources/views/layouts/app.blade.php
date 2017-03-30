<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="app">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tubo Norte</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link href="/css/slick.css" rel="stylesheet" type="text/css">
    <link href="/css/slick-theme.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
</head>

<body>


    <header>

        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <h4>Tubo Norte</h4>
                </div>
                <div class="col-xs-6 menu hidden-xs col-sm-6">
                    <a href="#"><i class="fa fa-home"></i> <span>Ubicanos</span> 
                    </a>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span>Catalogo</span> 
                    </a>
                    <a href="#"><i class="fa fa-rss"></i> <span>Noticias</span> 
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 menu">
                    <a href="#"><i class="fa fa-phone-square"></i> 051-949210851</a>
                </div>
            </div>
        </div>

    </header>
    <menu class="visible-xs">
        <a href="#"><i class="fa fa-home"></i> <span>Ubicanos</span> 
                    </a>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span>Catalogo</span> 
                    </a>
                    <a href="#"><i class="fa fa-rss"></i> <span>Noticias</span> 
                    </a>
    </menu>

    <div class="content">
        <div class="container">
             @yield('content')
        </div>
    </div>


    <br>
    <br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 redes">
                    Visita Nuestras redes sociales: <br>
                    <a href="#"><i class="fa fa-facebook"></i> Facebook</a><br>
                    <a href="#"><i class="fa fa-twitter"></i> Twitter</a> <br>
                    <a href="#"><i class="fa fa-instagram"></i> Instagram</a> <br>
                </div>
                <div class="col-md-4 hidden-sm centrado">
                    <h3>Tubo Norte</h3>
                    <p>Todo los derechos reservdaos, Tubo Norte del Peru SAC, 2016</p>
                </div>
                <div class="col-sm-6 col-md-4 redes derecha">
                    <a href="#"><i class="fa fa-whatsapp"></i> Telefono: 051 949293945</a><br>
                    <a href="#"><i class="fa fa-envelope"></i> Correo: empresa@mail.com</a> <br>
                    <a href="#"><i class="fa fa-map-marker"></i> Direccion: Av. Javier Prado 2334, La Molina, Lima</a> <br>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>