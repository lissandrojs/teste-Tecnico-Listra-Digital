<?php

use App\Http\Controllers\VehicleController;
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
    return view('searchvehicle');
});

Route::get('/form', function () {
    return view('vehicle.form');
});

Route::post('/create-vehicle',[VehicleController::class,'create'])->name('create-vehicle');

Route::get('/vehicle-model/{model}',[VehicleController::class,'findByModel'])->name('vehicle-model');

Route::get('/vehicles', [VehicleController::class,'index'])->name('vehicles');