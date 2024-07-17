<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\TrainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotta welcome
Route::get('', function(){
    return view('welcome');
});

// Rotte trians
Route::resource('trains', TrainController::class);