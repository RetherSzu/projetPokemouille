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

//Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemons.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('home.apropos');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('pokemons', PokemonController::class);

Route::post('/pokemons/{id}/upload', [PokemonController::class, 'upload'])->name('pokemons.upload');



