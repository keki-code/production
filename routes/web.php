<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountyController;
use App\Http\Controllers\Material_ConsumptionsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\UserController;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    /* ::post, ::put, ::patch, ::delete */
    Route::resource('countries', CountyController::class);
    Route::resource('roles', SupplierController::class);
    Route::resource('groups', Material_ConsumptionController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('workplaces', WorkplaceController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('users', UserController::class);
 
});

require __DIR__.'/auth.php'; 
