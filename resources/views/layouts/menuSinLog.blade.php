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
                <a href="{{ route('login') }}" class="nav-item nav-link">{{ __('Login') }}</a>
                <a href="{{ route('register') }}"  class="nav-item nav-link">{{ __('Register') }}</a>
            </div>
        </div>
    </div>
</nav>
