<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\UserController;
use Illuminate\Console\Scheduling\Event;
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

Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('auth');
Route::get('/users', [UserController::class, 'users'])->name('users')->middleware('auth');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
