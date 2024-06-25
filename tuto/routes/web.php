<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () { //callback function
    return view('welcome');
});


Route::get('/posts', [BlogController::class , 'index'])->name('posts.index');

Route::get('/posts/create', [BlogController::class ,'create'])->name('posts.create');

Route::post('/posts', [BlogController::class , 'store'])->name('posts.store');

Route::get('/posts/{post}', [BlogController::class ,'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [BlogController::class ,'edit'])->name('posts.edit');

Route::put('/posts/{post}' , [BlogController::class ,'update'])->name('posts.update');

Route::delete('/posts/{post}' , [BlogController::class ,'destroy'])->name('posts.destroy');

