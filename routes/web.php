<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PhoneControllerAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/adminpage', [HomeController::class, 'index']);     

Route::group(['middleware' => ['auth']],function (){

    Route::group(['middleware' => ['admin']],function (){

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/adminpage', [HomeController::class, 'index'])->name('adminmain');


      
        Route::get('/phone_admin',[ PhoneControllerAdmin::class,'index_admin'])->name('admin');
        Route::get('/phones/create_admin',[PhoneControllerAdmin::class,'create_admin'])->name('phone.create.admin');
        Route::post('/phones/create_admin',[PhoneControllerAdmin::class,'create_admin'])->name('phone.create.admin');
    
        Route::post('/phone2_admin',[PhoneControllerAdmin::class,'store_admin'])->name('product.store.admin');
        
        Route::get('/phone/{phone}/edit_admin',[PhoneControllerAdmin::class,'edit_admin'])->name('phone.edit.admin');
        Route::put('/phone/{phone}/update_admin',[PhoneControllerAdmin::class,'update_admin'])->name('phone.update.admin');
        Route::delete('/phone/{phone}/destroy_admin',[PhoneControllerAdmin::class,'destroy_admin'])->name('phone.delete.admin');

        Route::get('/adminpage/users', [AdminController::class, 'showUsers'])->name('admin.users');
        
    });



    Route::group(['middleware' => ['user']],function (){



        // Route::get('/phone/{phone}/edit', [PhoneController::class, 'edit'])->name('phone.edit');
        // Route::put('/phone/{phone}/update', [PhoneController::class, 'update'])->name('phone.update');
        // Route::delete('/phone/{phone}/destroy', [PhoneController::class, 'destroy'])->name('phone.destroy');
        // });


         
        Route::get('/user',[ UserController::class,'user'])->name('user');

        
        Route::get('/phone_user',[ PhoneController::class,'index'])->name('user_phone');
        Route::get('/phone',[ PhoneController::class,'index'])->name('phone.index');
        Route::get('/phones/create',[PhoneController::class,'create'])->name('phone.create');

        Route::post('/phone2',[PhoneController::class,'store'])->name('phone.store');
        
        Route::get('/phone/{phone}/edit',[PhoneController::class,'edit'])->name('phone.edit');
        Route::put('/phone/{phone}/update',[PhoneController::class,'update'])->name('phone.update');
        Route::delete('/phone/{phone}/delete',[PhoneController::class,'delete'])->name('phone.delete');
    

    });

});