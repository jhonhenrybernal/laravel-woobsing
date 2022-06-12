<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherHumidityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WeatherHumidityController::class, 'index'])->name('index');

Route::post('/locate-moisture', [WeatherHumidityController::class, 'locateMoisture'])->name('locate-moisture');
Route::get('/history-moisture', [WeatherHumidityController::class, 'history'])->name('history-moisture');
