<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//dashborad Admin
Route::group(['middleware' => ['auth','checkAdmin']], function() {
    // view dashborad admin
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    // view show users
    Route::get('/showUser', [App\Http\Controllers\UserController::class, 'index'])->name('show.user');

});




