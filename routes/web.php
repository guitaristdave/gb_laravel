<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WeatherController;
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

