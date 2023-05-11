<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\UserController;
use App\Models\Categoria;
use App\Models\Filme;
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


Route::put('/filme/{id}', [FilmeController::class, 'update'])->name('filme.update');
Route::delete('/filme/{id}', [FilmeController::class, 'destroy'])->name('filme.destroy');
Route::get('/filme/{id}/edit', [FilmeController::class, 'edit'])->name('filme.edit');
Route::post('/filme', [FilmeController::class, 'store'])->name('filme.store');
Route::get('/filme/create', [FilmeController::class, 'create'])->middleware('auth');
Route::get('/filme/{id}', [FilmeController::class, 'show'])->name('filme.show');
Route::get('/filme', [FilmeController::class, 'index'])->name('filme.index')->middleware('auth');
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->middleware('auth');
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index')->middleware('auth');
Route::get('/users', [UserController::class, 'users'])->name('users')->middleware('auth');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
