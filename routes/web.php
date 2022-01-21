<?php

use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    return view('layouts.app');
});


require __DIR__.'/auth.php';
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('layouts.app');
    })->name('dashboard');
    // UserController
    Route::resource('users', UserController::class);
    Route::get('users/{user}/change-role', [UserController::class, 'changeStatus'])->name('users.change_status');
    // AboutController
    Route::resource('about', AboutController::class);
    
});