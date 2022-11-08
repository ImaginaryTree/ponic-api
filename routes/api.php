<?php

use App\Http\Controllers\API\data_statistikController;
use App\Http\Controllers\API\hydroController;
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
Route::get('data_statistik',[data_statistikController::class,'index']);
Route::post('data_statistik/insert',[data_statistikController::class,'store']);
Route::post('controller/update/{column}',[hydroController::class,'update']);
Route::get('data_statistik/destroy',[data_statistikController::class,'destroy']);
Route::get('controller',[hydroController::class,'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
