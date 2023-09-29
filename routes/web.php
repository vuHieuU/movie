<?php


use App\Http\Controllers\cityController;
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

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('index');

    // roles
    Route::prefix('role')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\roleController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\roleController::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\roleController::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\roleController::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\roleController::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\roleController::class, 'destroy']);
    });
    // Users
    Route::prefix('user')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\userController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\userController::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\userController::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\userController::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\userController::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\userController::class, 'destroy']);
    });
    //Coupon (ma giam gia)
    Route::prefix('coupon')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\couponController::class, 'index'])->name('coupon.index');
        Route::get('create', [App\Http\Controllers\admin\couponController::class, 'create'])->name('coupon.create');
        Route::post('store', [App\Http\Controllers\admin\couponController::class, 'store'])->name('coupon.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\couponController::class, 'edit'])->name('coupon.edit');
        Route::put('update/{id}', [App\Http\Controllers\admin\couponController::class, 'update'])->name('coupon.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\couponController::class, 'destroy'])->name('coupon.delete');
    });
<<<<<<< HEAD
    // food
    Route::prefix('food')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\foodController::class, 'index'])->name('food.index');
        Route::get('create', [App\Http\Controllers\admin\foodController ::class, 'create'])->name('food.create');
        Route::post('store', [App\Http\Controllers\admin\foodController ::class, 'store'])->name('food.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\foodController ::class, 'edit'])->name('food.edit');
        Route::put('update/{id}', [App\Http\Controllers\admin\foodController ::class, 'update'])->name('food.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\foodController ::class, 'destroy'])->name('food.delete');
    });
});
=======
>>>>>>> 84fdccabd5475ca38266330949aa1b1397d70b1e

    // Thể loại Phim
    Route::prefix('categories')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\categoryController::class, 'index'])->name('categories.index');
        Route::get('create', [App\Http\Controllers\admin\categoryController::class, 'create'])->name('categories.create');
        Route::post('store', [App\Http\Controllers\admin\categoryController::class, 'store'])->name('categories.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\categoryController::class, 'edit'])->name('categories.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\categoryController::class, 'update'])->name('categories.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\categoryController::class, 'destroy'])->name('categories.destroy');
    });

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
>>>>>>> 8626456f29486ff7dad1f338eb3b6d90a649dccc
=======
    // Danh sách Phim
    Route::prefix('films')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\filmController::class, 'index'])->name('films.index');
        Route::get('create', [App\Http\Controllers\admin\filmController::class, 'create'])->name('films.create');
        Route::post('store', [App\Http\Controllers\admin\filmController::class, 'store'])->name('films.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\filmController::class, 'edit'])->name('films.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\filmController::class, 'update'])->name('films.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\filmController::class, 'destroy'])->name('films.destroy');
    });
      //city
    Route::prefix('city')->group(function(){
        Route::get('index',[App\Http\Controllers\admin\CityController::class,"index"]);
        Route::get('create',[App\Http\Controllers\admin\CityController::class,"create"]);
        Route::post('store',[App\Http\Controllers\admin\CityController::class,"store"]);
        Route::get('edit/{id}',[App\Http\Controllers\admin\CityController::class,"edit"]);
        Route::post('update/{id}',[App\Http\Controllers\admin\CityController::class,"update"]);
    });
    // cinemas
    Route::prefix('cinemas')->group(function(){
        Route::get('index',[App\Http\Controllers\admin\CinemasController::class,"index"]);
        Route::get('create',[App\Http\Controllers\admin\CinemasController::class,"create"]);
        Route::post('store',[App\Http\Controllers\admin\CinemasController::class,"store"]);
        Route::get('edit/{id}',[App\Http\Controllers\admin\CinemasController::class,"edit"]);
        Route::post('update/{id}',[App\Http\Controllers\admin\CinemasController::class,"update"]);
    });
});
>>>>>>> 84fdccabd5475ca38266330949aa1b1397d70b1e
