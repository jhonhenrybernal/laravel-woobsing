@extends('layouts.default')
@section('content')

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
    @stop