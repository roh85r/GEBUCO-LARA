<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; // mise à jour de l'espace de noms 

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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/connexion', function () {
    return view('login');
})->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register'); // mise à jour du nom de contrôleur
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit'); // mise à jour du nom de contrôleur

