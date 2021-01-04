<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountyController;
use App\Http\Controllers\Material_ConsumptionsController;
use App\Http\Controllers\SuppliersController;

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

Route::resource('counties', CountyController::class);
Route::resource('material_consumptions', Material_ConsumptionsController::class);
Route::resource('suppliers', SuppliersController::class);
