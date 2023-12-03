<?php

use App\Http\Controllers\trainsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tarif-train', function () {
    return view('tarif-train');
});

Route::get('/lokasi-train', [trainsController::class, 'showlokasi']);
Route::get('/jadwal-train', [trainsController::class, 'showtrain']);
Route::get('/lokasi-train/{id}', [trainsController::class, 'show']);
Route::get('/tarif-train', [trainsController::class, 'showtarif']);

