<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clima - Humedad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5ZvuisFk864xhJW9n-vP0KVmCORC4eQo&callback=initMap&libraries=&v=weekly"
        defer
      ></script>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/index.css') }}" />
      <script src="{{ URL::asset('assets/js/index.js') }}"></script>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <div id="map"></div>
                    @if ($code != '')
                        <span>Humedad {{$code}} {{$humidity}}%</span>    
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
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>
</body>
</html>