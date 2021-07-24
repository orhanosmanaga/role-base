<?php

use Illuminate\Support\Facades\Route;

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
    return view('test');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/rololustur', [App\Http\Controllers\HomeController::class, 'rololustur']);

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/adminyap', [App\Http\Controllers\HomeController::class, 'adminyap']);
    Route::get('/yoneticiyap', [App\Http\Controllers\HomeController::class, 'yoneticiyap']);
    Route::get('/saticiyap', [App\Http\Controllers\HomeController::class, 'saticiyap']);
});

