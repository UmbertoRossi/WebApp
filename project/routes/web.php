<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::resource('clients', ClientController::class)->middleware('auth');

Route::resource('projects', ProjectController::class)->middleware('auth');

Route::resource('orders', OrderController::class)->middleware('auth');

Route::resource('users', UserController::class);

Route::resource('images', DropzoneController::class)->middleware('auth');

Route::get('register', [UserController::class, 'create'])->middleware('auth');

Route::get('logout',[SessionController::class, 'destroy'])->middleware('auth');

Route::post('login', [SessionController::class, 'store'])->middleware('guest');