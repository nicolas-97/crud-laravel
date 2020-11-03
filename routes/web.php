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

Route::middleware(['auth'])->group(function (){

    Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::prefix('panel')->middleware(['checkAdmin'])->group(function () {

        Route::get('/', \App\Http\Controllers\Panel\PanelController::class)->name('panel');
        Route::resource('book', \App\Http\Controllers\Book\BookController::class);

        Route::resource('user',\App\Http\Controllers\User\UserController::class);
    });

});

Auth::routes();
