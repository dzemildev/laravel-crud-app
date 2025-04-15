<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\booksController;

use App\Http\Controllers\membersController;

use App\Http\Controllers\loansController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    

    Route::get('/books', [booksController::class, 'index'])->name('books.index');
    Route::get('/books/create', [booksController::class, 'create'])->name('books.create');
    Route::post('/books', [booksController::class, 'store'])->name('books.store');
    Route::get('/books/{books}/edit', [booksController::class, 'edit'])->name('books.edit');
    Route::put('/books/{books}/update', [booksController::class, 'update'])->name('books.update');
    Route::delete('/books/{books}/delete', [booksController::class, 'Delete'])->name('books.delete');
    Route::get('/books/{books}', [booksController::class, 'show'])->name('books.show');



    Route::get('/members', [membersController::class, 'index'])->name('members.index');
    Route::get('/members/create', [membersController::class, 'create'])->name('members.create');
    Route::post('/members', [membersController::class, 'store'])->name('members.store');
    Route::get('/members/{members}/edit', [membersController::class, 'edit'])->name('members.edit');
    Route::put('/members/{members}/update', [membersController::class, 'update'])->name('members.update');
    Route::delete('/members/{members}/delete', [membersController::class, 'Delete'])->name('members.delete');
    Route::get('/members/{members}', [membersController::class, 'show'])->name('members.show');



    Route::get('/loans', [loansController::class, 'index'])->name('loans.index');
    Route::get('/loans/create', [loansController::class, 'create'])->name('loans.create');
    Route::post('/loans', [loansController::class, 'store'])->name('loans.store');
    Route::get('/loans/{loans}/edit', [loansController::class, 'edit'])->name('loans.edit');
    Route::put('/loans/{loans}/update', [loansController::class, 'update'])->name('loans.update');
    Route::delete('/loans/{loans}/delete', [loansController::class, 'Delete'])->name('loans.delete');
    Route::get('/loans/{loan}', [loansController::class, 'show'])->name('loans.show');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*use App\Http\Controllers\booksController;

Route::get('/books', [booksController::class, 'index'])->name('books.index');
Route::get('/books/create', [booksController::class, 'create'])->name('books.create');
Route::post('/books', [booksController::class, 'store'])->name('books.store');
Route::get('/books/{books}/edit', [booksController::class, 'edit'])->name('books.edit');
Route::put('/books/{books}/update', [booksController::class, 'update'])->name('books.update');
Route::delete('/books/{books}/delete', [booksController::class, 'Delete'])->name('books.delete');

use App\Http\Controllers\membersController;

Route::get('/members', [membersController::class, 'index'])->name('members.index');
Route::get('/members/create', [membersController::class, 'create'])->name('members.create');
Route::post('/members', [membersController::class, 'store'])->name('members.store');
Route::get('/members/{members}/edit', [membersController::class, 'edit'])->name('members.edit');
Route::put('/members/{members}/update', [membersController::class, 'update'])->name('members.update');
Route::delete('/members/{members}/delete', [membersController::class, 'Delete'])->name('members.delete');

use App\Http\Controllers\loansController;

Route::get('/loans', [loansController::class, 'index'])->name('loans.index');
Route::get('/loans/create', [loansController::class, 'create'])->name('loans.create');
Route::post('/loans', [loansController::class, 'store'])->name('loans.store');
Route::get('/loans/{loans}/edit', [loansController::class, 'edit'])->name('loans.edit');
Route::put('/loans/{loans}/update', [loansController::class, 'update'])->name('loans.update');
Route::delete('/loans/{loans}/delete', [loansController::class, 'Delete'])->name('loans.delete');*/