<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Woobsing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}">Consultar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Route::is('history-moisture') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/history-moisture')}}">Historial</a>
                </li>
            </ul>
        </div>
    </nav>