<?php

use Illuminate\Support\Facades\Route;

Route::view("home", "home");
Route::view("page_secrete", "page_secrete")
    ->name("page_secrete")
    ->middleware(CheckAge::class);
