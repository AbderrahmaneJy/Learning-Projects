<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('test', function () {
//     return view('testview');
// });

// Route::get('/article', function () {
//     return view('article');
// });

// Route::get('/facture', function () {
//     return view('facture');
//    });

// Route::get('contact', function () {
//     return view('pages/contact');
//     });

// Route::get('home', function () {
//     return view('pages/home');
//     });

Route::get('/', function () {
    return view('welcome');
    });

// Route::get('/infos', function () {
//     return view('infos');
//     });
   
// Route::get('users', [UsersController::class,'getInfos'] );

// Route::post('infos', [UsersController::class,'postInfos'] );

Route::get('contact', [ContactController::class, 'getForm']);
Route::post('contact', [ContactController::class, 'postForm']);