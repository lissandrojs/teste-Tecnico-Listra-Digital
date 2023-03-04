<?php

use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create-vehicle',[VehicleController::class,'create']);

Route::get('/vehicle/{model}',[VehicleController::class,'findByModel']);

Route::get('/vehicle/{year}',[VehicleController::class,'findByYear']);

Route::get('/vehicle', [VehicleController::class,'index']);
