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

Route::get('konten_detail/{$id}', function () {
    return view('konten_detail');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [webController::class, 'authenticate']);
Route::post('/logout', [webController::class, 'logout']);


Route::get('/sign', function () {
    return view('sign');
});
Route::post('/sign',[webController::class, 'store'])->middleware('guest');

Route::get('/konten', [webController::class, 'itemIndex'])->middleware('auth');

Route::get('/detail', [webController::class, 'detail' ]);

Route::get('/konten/{id}', [webController::class, 'itemCari'])->middleware('auth');
Route::post('/konten/{id}', [webController::class, 'itemBayar'])->middleware('auth');


Route::get('/billing', [webController::class, 'payment' ]);