<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/adminpage', [HomeController::class, 'index']);     

Route::group(['middleware' => ['auth']],function (){

    Route::group(['middleware' => ['admin']],function (){

        Route::get('/phone', [PhoneController::class, 'index'])->name('phone.indexAdmin');
        Route::get('/phone/create', [PhoneController::class, 'create'])->name('phone.createAdmin');
        Route::post('/phone', [PhoneController::class, 'store'])->name('phone.storeAdmin');
        
    });

    Route::group(['middleware' => ['user']],function (){



        Route::get('/phone/{phone}/edit', [PhoneController::class, 'edit'])->name('phone.edit');
        Route::put('/phone/{phone}/update', [PhoneController::class, 'update'])->name('phone.update');
        Route::delete('/phone/{phone}/destroy', [PhoneController::class, 'destroy'])->name('phone.destroy');
        });
    
});