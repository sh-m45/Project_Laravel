<?php

use App\Http\Controllers\GymCityManagerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CityManager/index', [GymCityManagerController::class, 'index']);
Route::get('/CityManager/create', [GymCityManagerController::class, 'create']);

Route::post('/CityManager/index', [GymCityManagerController::class, 'store']);
Route::get('/CityManager/show/{id}', [GymCityManagerController::class, 'show']);

Route::get('/CityManager/edit/{id}', [GymCityManagerController::class, 'edit']);
Route::post('/CityManager/edit/{id}', [GymCityManagerController::class, 'update']);

Route::get('/CityManager/delete/{id}', [GymCityManagerController::class, 'delete']);