<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pizzaController;

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

Route::get('/p', [pizzaController::class,'index']);
Route::get('/s/{id}', [pizzaController::class,'show']);
Route::get('/ss/create',[pizzaController::class,'create']);
Route::post('/ss',[pizzaController::class,'store']);
Route::delete('/s/{id}',[pizzaController::class,'destroy']);