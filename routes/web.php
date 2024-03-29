<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProfileController;
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

    // echo "Selamat Datang!";
});

Route::get('/halo', function() {
    echo "Halo, selamat datang di Laravel!";
});

Route::get('biodata', function() {
    return view('biodata');
});

Route::get('biodata/controller/{id}', [BiodataController::class, 'index']); 

Route::get('profile', [ProfileController::class, 'index']);
