<?php

use App\Http\Controllers\Admin\CoffeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CoffeeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'showLoginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('coffeeshop', [CoffeeController::class, 'index'])->name('user.coffeeshop.index');
Route::get('coffeeshop/recommend', [CoffeeController::class, 'create'])->name('user.coffeeshop.recommend');
Route::get('coffeeshop/recommendation', [CoffeeController::class, 'store'])->name('user.coffeeshop.recommend.store');

Route::middleware('auth')
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::resource('coffees', CoffeController::class);
    });
