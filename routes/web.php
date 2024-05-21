<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {return view('home');})->name('home');

Route::get('/movies', [MovieController::class,'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class,'show'])->name('movies.show');


Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class,'show'])->name('books.show');





Route::fallback(function () {
    return redirect()->route('home');
});
