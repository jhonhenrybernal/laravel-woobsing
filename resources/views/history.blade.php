<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Prueba woobsing</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5ZvuisFk864xhJW9n-vP0KVmCORC4eQo&callback=initMap&libraries=&v=weekly" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/index.css') }}" />
    <script src="{{ URL::asset('assets/js/index.js') }}"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Woobsing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Consultar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/history-moisture')}}">Historial</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
            <div class="table-responsive">
                    <table class="table">
                        <caption>List of users</caption>
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Humedad</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Consultar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($weatherHumidityHistory as $humidityHistory )
                            <tr>
                            
                                <th scope="row">{{$humidityHistory->id}}</th>
                                <td>{{$humidityHistory->name}}</td>
                                <td>{{$humidityHistory->humidity}}</td>
                                <td>{{$humidityHistory->created_at}}</td>
                                <td><a class="btn btn-primary" href="{{$humidityHistory->url}}" role="button">Link</a></td>
                           
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </main>
    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>