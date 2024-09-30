<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/{bookId}/show', [BookController::class, 'show'])->name('books.show');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/book', [BookController::class, 'store'])->name('books.store');
Route::delete('/{bookId}/delete', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('books/search', [BookController::class, 'search'])->name('books.search');
Route::get('books/update/{bookId}', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/update/{bookId}', [BookController::class, 'update'])->name('books.update');