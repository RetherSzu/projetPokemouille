<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('home.apropos');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

require __DIR__.'/auth.php';

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['autauthh', 'verified'])->group(function () {
    Route::resource('/pokemons', PokemonController::class);
    //Route::get('/pokemons', [PokemonController::class, 'indexCookie'])->name('pokemons.index');
    Route::post('pokemons/{id}/upload', [PokemonController::class, 'upload'])->name('pokemons.upload');
});
