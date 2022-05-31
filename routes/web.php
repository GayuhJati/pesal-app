<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign', function () {
    return view('sign');
});

Route::get('/konten', function () {
    return view('konten');
});

Route::get('/detail', [webController::class, 'detail' ]);
Route::get('/billing', [webController::class, 'payment' ]);