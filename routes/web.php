<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
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
    return view('home', ['title' => 'Home']);
})->name('home');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('registeradmin', [AdminController::class, 'register'])->name('register.a');
Route::post('registeradmin', [AdminController::class, 'register_action'])->name('register.action.a');
Route::get('loginadmin', [AdminController::class, 'login'])->name('login.a');
Route::post('loginadmin', [AdminController::class, 'login_action'])->name('login.action.a');
Route::get('logoutadmin', [AdminController::class, 'logout'])->name('logout.a');
Route::get('catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('catalogadmin', [CatalogController::class, 'index'])->name('catalog.a');