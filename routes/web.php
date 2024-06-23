<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('guest.home');
});


//Route::get("{any?}", function () {
//    return view("guest.home");
//})->where("any", ".*");


Auth::routes();

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::resource('posts', PostController::class);
    });
