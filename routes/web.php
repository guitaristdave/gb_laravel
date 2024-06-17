<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestTestController;
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

Route::get('/', fn() => view('main.index'))->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/people', [PeopleController::class, 'index'])->name('people');
Route::get('/people/create', [PeopleController::class, 'create'])->name('people.create');
Route::post('/people', [PeopleController::class, 'store'])->name('people.store');
Route::get('/people/{people}/edit', [PeopleController::class, 'edit'])->name('people.edit');
Route::patch('/people/{people}', [PeopleController::class, 'update'])->name('people.update');
Route::delete('/people/{people}', [PeopleController::class, 'destroy'])->name('people.destroy');


Route::get('/library', [BookController::class, 'index'])->name('library');
Route::get('/library/create', [BookController::class, 'create'])->name('library.create');
Route::post('/library', [BookController::class, 'store'])->name('library.store');
Route::get('/library/{book}/edit', [BookController::class, 'edit'])->name('library.edit');
Route::patch('/library/{book}', [BookController::class, 'update'])->name('library.update');
Route::delete('/library/{book}', [BookController::class, 'destroy'])->name('library.destroy');


Route::get('/games', [GameController::class, 'index'])->name('games');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::patch('/games/{game}', [GameController::class, 'update'])->name('games.patch');
Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
Route::get('/games/{game}/download', [\App\Http\Controllers\PdfGenerateController::class, 'generatePDF'])->name('games.download');
