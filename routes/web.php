<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GamerController;
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

Route::resource('/Gamers', GamerController::class);

Route::resource('/characters', CharacterController::class);

