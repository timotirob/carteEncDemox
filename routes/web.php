<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdresseController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('demandeCarte','App\Http\Controllers\CarteEncController');
Route::resource('adresses','App\Http\Controllers\AdresseController');
Route::get('/adresses', [AdresseController::class, 'index'])->name('adresses.index-adresse');

