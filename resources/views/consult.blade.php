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
                <section class="vh-100">
                    <div class="container-fluid h-custom">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-9 col-lg-6 col-xl-5">
                                <div id="map"></div>
                                @if ($code != '')
                                <span style="font-size: 21pt;">Humedad {{$code}} {{$humidity}}%</span>
                                @endif
                            </div>
                            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <p class="lead fw-normal mb-0 me-3">Consultar humedad </p>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0"></p>
                                </div>

                                <!-- Email input -->
                                <form action="{{url('locate-moisture')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Ciudad</label>
                                        <input type="hidden" name="lon" id="lon" value="{{$lon}}">
                                        <input type="hidden" name="la" id="la" value="{{$la}}">
                                        <select class="form-control" name="coordinates" id="">
                                            <option value="">Seleccione</option>
                                            <option value="miami">Miami</option>
                                            <option value="orlando">Orlando</option>
                                            <option value="new_york">New York</option>
                                        </select>
                                    </div>
                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Consultar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer class="container">
      <p>&copy; 2022</p>
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