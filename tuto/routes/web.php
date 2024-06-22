<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () { //callback function
    return view('welcome');
});


Route::get('/test', [BlogController::class , 'index']);
