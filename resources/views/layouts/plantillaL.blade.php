<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="nav-item nav-link active">Inicio</a></li>
                    <li><a href="#" class="nav-item nav-link">Llegadas vuelos</a></li>
                    <li><a href="#" class="nav-item nav-link">Salidas vuelos</a></li>
                    <li><a href="#" class="nav-item nav-link">Información inadmitidos</a></li>
                    <li><a href="#" class="nav-item nav-link">Sugerencias</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    < class="nav navbar-nav navbar-right">
                        <li class="nav-item nav-link">{{ Auth::user()->name }}</li>
                        <li><a href="{{ route('register') }}"  class="nav-item nav-link">{{ __('Register') }}</a></li>
              </ </ul>
                            </div> </div> </nav> <div class="container text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="well">
                                    @yield('contenido')

                                </div>
                            </div>

                        </div>
            </div>

            <footer class="container-fluid text-center">

            </footer>

</body>

</html>
