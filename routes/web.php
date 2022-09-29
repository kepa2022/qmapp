<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->middleware(['auth','isAdmin'])->group (function(){
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::post('/userdata', [App\Http\Controllers\Admin\UserController::class, 'userdata'])->name('admin_userdata');
    Route::post('/userupdate', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_userupdate');
    Route::get('/userlist', [App\Http\Controllers\Admin\UserController::class, 'userList'])->name('admin_userlist');
    Route::post('/changerole', [App\Http\Controllers\Admin\UserController::class, 'changerole'])->name('admin_changerole');
});

Route::prefix('/')->middleware(['auth'])->group (function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers\User'],function(){
    Route::post('/userdata', [App\Http\Controllers\User\UserController::class, 'userdata'])->name('userdata');
    Route::post('/userupdate', [App\Http\Controllers\User\UserController::class, 'update'])->name('userupdate');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
