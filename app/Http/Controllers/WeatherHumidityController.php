<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;
use App\Models\WeatherHumidityHistory;

/**
 * @author Jhon Bernal
 * @description consultar humedad 
 */
class WeatherHumidityController extends Controller
{
   /**
     * La función se llama índice y devuelve una vista llamada bienvenida
     *
     * @return Se está devolviendo la vista.
     */
    public function index(){
        $la = '37.09024';
        $lon = '-95.712891';
        $humidity ='';
        $code = '';
        return view('pages.consult',compact('la','lon','humidity','code'));
    }

   /**
      * Toma las coordenadas del formulario, encuentra la latitud y longitud correspondientes, y luego
      * utiliza la API de OpenWeatherMap para obtener la humedad de esa ubicación
      *
      * @param Request request Este es el objeto de solicitud que se envía al controlador.
      *
      * @return La humedad de la ciudad.
      */
    public function locateMoisture(Request $request){

        $validator = Validator::make($request->all(), [
            'coordinates' => 'required|min:2|max:255'
        ]);
        if ($validator->fails())
        {
            return redirect()->action([WeatherHumidityController::class, 'index']);
        }
        $cities = [
            ['code'=>'Miami','name'=>'miami','lat'=> '25.7934','lo'=>'-80.1349'],
            ['code'=>'Orlando','name'=>'orlando','lat'=> '28.5383','lo'=>'-81.3792'],
            ['code'=>'New York','name'=>'new_york','lat'=> '40.7143','lo'=>'-74.006'],
        ];
        $coordinates = $request['coordinates'];
        $aCities = collect($cities)->first(function ($item) use ($coordinates) {
            return $item['name'] == $coordinates;
        });
        $la = $aCities['lat'];
        $lon = $aCities['lo'];
        $code = $aCities['code'];
        $responseCoordinates = Http::get('https://api.openweathermap.org/data/2.5/weather?lat='.$la.'&lon='.$lon.'&appid=58f28a178278752497232426569b1d97');
        $resultWeather = json_decode($responseCoordinates->getBody());
        $humidity = $resultWeather->main->humidity;

        $weatherHumidityHistory = WeatherHumidityHistory::create([
            'name' => $code,
            'url' => 'https://openweathermap.org/city/'.$resultWeather->id,
            'humidity' => $humidity
        ]);
        return view('pages.consult',compact('la','lon','humidity','code'));
    }

  /**
     * Devuelve una vista llamada historial, que es una plantilla de hoja, y le pasa la variable
     * weatherHumidityHistory, que es una colección de todos los registros en WeatherHumidityHistory
     * mesa
     *
     * @return Se está devolviendo la vista con todo el historial
     */
    public function history(){
        $weatherHumidityHistory = WeatherHumidityHistory::all();
        return view('pages.history',compact('weatherHumidityHistory'));
    }
}
