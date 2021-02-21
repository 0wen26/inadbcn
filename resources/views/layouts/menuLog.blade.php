<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
    <a href="#" class="navbar-brand mr-3">Inadmitidos Barcelona</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Inicio</a>
                <a href="#" class="nav-item nav-link">Llegadas vuelos</a>
                <a href="#" class="nav-item nav-link">Salidas vuelos</a>
                <a href="#" class="nav-item nav-link">Información inadmitidos</a>
                <a href="#" class="nav-item nav-link">Sugerencias</a>
            </div>
            <div class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
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
                <li class="nav-item nav-link">{{ Auth::user()->name }}</li>
                <li><a href="{{ route('register') }}"  class="nav-item nav-link">{{ __('Register') }}</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-3 well">

    </div>
    <div class="col-sm-7">

      <div class="row">
        <div class="col-sm-12">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group input-group">
                  <input type="text" class="form-control" placeholder="Search..">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                  </span>
                </div>
              </form>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-12">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-12">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-12">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2 well">

    </div>
  </div>
</div>

<footer class="container-fluid text-center">

</footer>

</body>
</html>
