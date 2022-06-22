<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

/**
 * Auth
 */
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'authenticate'])->name('login');
    Route::post('register', [AuthController::class, 'registerUser'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [AuthController::class, 'authenticated']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('add-product',[ProductController::class,'index']);
    Route::post('add-product',[ProductController::class,'store']);
});




Route::get('/', function () {
    return view('welcome');
});
