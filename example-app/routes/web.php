<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

Route::get('/',[\App\Http\Controllers\MainController::class, 'index'])->name('welcome');

Route::get('/login', [\Controllers\UserController::class, 'login'])->name('login');
Route::post('/login', [\Controllers\UserController::class, 'loginPost']);

Route::get('/register', [\Controllers\UserController::class, 'register'])->name('register');
Route::post('/register', [\Controllers\UserController::class, 'registerPost']);
