<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;

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

Route::get('/', [GuestController::class, 'index'])->name('welcome');
Route::get('/aboutUs', [GuestController::class, 'aboutUs'])->name('aboutUs');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Route::get('/dashboard', function(){
        //     return view('dashboard');
        // })->name('dashboard');
        
        // Route::get('/admin', function(){
            //     return view('admin.index');
            // })->name('admin.index');
});