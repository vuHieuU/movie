<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;

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

Route::get('/', [App\Http\Controllers\client\homeController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\client\ContactController::class, 'index']);
Route::get('/detail_blog', [App\Http\Controllers\client\Detail_blogController::class, 'index']);
Route::get('/detail_film', [App\Http\Controllers\client\Detail_filmController::class, 'index']);
Route::get('/dang-phat', [App\Http\Controllers\client\DangphatController::class, 'index']);
Route::get('/sap-ra-mat', [App\Http\Controllers\client\SapramatController::class, 'index']);
Route::get('/film', [App\Http\Controllers\client\AllfilmController::class, 'index']);
Route::get('/chair-food', [App\Http\Controllers\client\Chairs_FoodController::class, 'index']);
Route::get('/pay', [App\Http\Controllers\client\PayController::class, 'index']);
Route::get('/payment_success', [App\Http\Controllers\client\Payment_successController::class, 'index']);






Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::middleware(['auth'])->group(function (){
Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('index');

    // roles
    Route::prefix('role')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\roleController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\roleController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\roleController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\roleController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\roleController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\roleController ::class, 'destroy']);
    });
      // Users
     Route::prefix('user')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\userController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\userController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\userController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\userController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\userController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\userController ::class, 'destroy']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
