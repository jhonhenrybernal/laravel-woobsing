@extends('layouts.default')
@section('content')

    <main role="main">
            <div class="container">
            <div class="table table-responsive table-bordered">
                    <table class="table">
                        <caption>Historial</caption>
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
                        {!! $weatherHumidityHistory->links('pagination::bootstrap-4') !!}
                    </div>
            </div>
        </div>
    </main>
    @stop