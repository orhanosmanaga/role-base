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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/rololustur', [App\Http\Controllers\HomeController::class, 'rololustur']);


Route::get('/urun', [App\Http\Controllers\UrunController::class, 'urunsayfa']);
Route::POST('/urunolustur', [App\Http\Controllers\UrunController::class, 'urunolustur']);
Route::get('/urunsil/{id}', [App\Http\Controllers\UrunController::class, 'urunsil']);





Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/adminyap', [App\Http\Controllers\HomeController::class, 'adminyap']);
    Route::get('/yoneticiyap', [App\Http\Controllers\HomeController::class, 'yoneticiyap']);
    Route::get('/saticiyap', [App\Http\Controllers\HomeController::class, 'saticiyap']);
});

