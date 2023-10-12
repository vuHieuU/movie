<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('/contact', [App\Http\Controllers\client\ContactController::class, 'index'])->name("contact");

Route::get('/home/{id}', [App\Http\Controllers\client\homeController::class, 'show'])->name('homeCinema');
Route::get('/contact', [App\Http\Controllers\client\ContactController::class, 'index'])->name('contact');

Route::get('/detail_blog', [App\Http\Controllers\client\Detail_blogController::class, 'index']);
Route::get('/weeklyshowtime', [App\Http\Controllers\client\WeeklyShowtimeController::class, 'index']);
Route::get('/weeklyshowtime/{id}', [App\Http\Controllers\client\WeeklyShowtimeController::class, 'show'])->name("weeklyshowtime");



Route::get('/detail_film/{id}', [App\Http\Controllers\client\DetailFilmController::class, 'index'])->name("filmDetail");

Route::get('/dang-phat', [App\Http\Controllers\client\DangphatController::class, 'index'])->name("dang-phat");
Route::get('/sap-ra-mat', [App\Http\Controllers\client\SapramatController::class, 'index'])->name("sap-ra-mat");
Route::get('/film', [App\Http\Controllers\client\AllfilmController::class, 'index']);
Route::get('/film/{id}', [App\Http\Controllers\client\AllfilmController::class, 'show'])->name("film");

Route::get('/myaccount', [App\Http\Controllers\client\MyaccountController::class, 'index'])->name("myaccount");
Route::get('/editaccount', [App\Http\Controllers\client\EditaccountController::class, 'index'])->name("editaccount");

//Favarite Film
Route::post('/addFavoFilm', [App\Http\Controllers\client\FavoriteController::class, 'store']);
Route::get('/deleteFavoFilm/{id}', [App\Http\Controllers\client\FavoriteController::class, 'destroy']);
Route::get('/listFavoFilm/{id}', [App\Http\Controllers\client\FavoriteController::class, 'show']);
// Route::get('/detail_film/pay/{id}', [App\Http\Controllers\client\Detail_filmController::class, 'show']);

// Route::get('/pay/{id}', [App\Http\Controllers\client\Detail_filmController::class, 'show']);/



Route::post('add-rating', [App\Http\Controllers\client\RatingController::class, 'add'])->middleware(['auth']);



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/admin', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('index');
    //profile của user
    Route::get('/myaccount', [AuthController::class, 'index']);
    Route::get('/editaccount', [AuthController::class, 'edit']);
    Route::post('/myaccount', [AuthController::class, 'profile'])->name('profile');


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
    // food
    Route::prefix('food')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\foodController::class, 'index'])->name('food.index');
        Route::get('create', [App\Http\Controllers\admin\foodController::class, 'create'])->name('food.create');
        Route::post('store', [App\Http\Controllers\admin\foodController::class, 'store'])->name('food.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\foodController::class, 'edit'])->name('food.edit');
        Route::put('update/{id}', [App\Http\Controllers\admin\foodController::class, 'update'])->name('food.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\foodController::class, 'destroy'])->name('food.delete');
    });
    // combo
    Route::prefix('combo')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\comboController::class, 'index'])->name('combo.index');
        Route::get('create', [App\Http\Controllers\admin\comboController::class, 'create'])->name('combo.create');
        Route::post('store', [App\Http\Controllers\admin\comboController::class, 'store'])->name('combo.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\comboController::class, 'edit'])->name('combo.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\comboController::class, 'update'])->name('combo.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\comboController::class, 'destroy'])->name('combo.delete');
    });
    // Thể loại Phim
    Route::prefix('categories')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\categoryController::class, 'index'])->name('categories.index');
        Route::get('create', [App\Http\Controllers\admin\categoryController::class, 'create'])->name('categories.create');
        Route::post('store', [App\Http\Controllers\admin\categoryController::class, 'store'])->name('categories.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\categoryController::class, 'edit'])->name('categories.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\categoryController::class, 'update'])->name('categories.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\categoryController::class, 'destroy'])->name('categories.destroy');
    });
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
    Route::prefix('city')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\CityController::class, "index"]);
        Route::get('create', [App\Http\Controllers\admin\CityController::class, "create"]);
        Route::post('store', [App\Http\Controllers\admin\CityController::class, "store"]);
        Route::get('edit/{id}', [App\Http\Controllers\admin\CityController::class, "edit"]);
        Route::post('update/{id}', [App\Http\Controllers\admin\CityController::class, "update"]);
    });
    // cinemas
    Route::prefix('cinemas')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\CinemasController::class, "index"]);
        Route::get('create', [App\Http\Controllers\admin\CinemasController::class, "create"]);
        Route::post('store', [App\Http\Controllers\admin\CinemasController::class, "store"]);
        Route::get('edit/{id}', [App\Http\Controllers\admin\CinemasController::class, "edit"]);
        Route::post('update/{id}', [App\Http\Controllers\admin\CinemasController::class, "update"]);
    });
    // seats
    Route::prefix('seats')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\SeatController::class, 'index'])->name('seats.index');
        Route::get('create', [App\Http\Controllers\admin\SeatController::class, 'create'])->name('seats.create');
        Route::post('store', [App\Http\Controllers\admin\SeatController::class, 'store'])->name('seats.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\SeatController::class, 'edit'])->name('seats.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\SeatController::class, 'update'])->name('seats.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\SeatController::class, 'destroy'])->name('seats.destroy');
    });
    // typeseats
    Route::prefix('typeseats')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\TypeSeatController::class, 'index'])->name('typeseats.index');
        Route::get('create', [App\Http\Controllers\admin\TypeSeatController::class, 'create'])->name('typeseats.create');
        Route::post('store', [App\Http\Controllers\admin\TypeSeatController::class, 'store'])->name('typeseats.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\TypeSeatController::class, 'edit'])->name('typeseats.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\TypeSeatController::class, 'update'])->name('typeseats.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\TypeSeatController::class, 'destroy'])->name('typeseats.destroy');
    });

    // room
    Route::prefix('rooms')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\RoomController::class, 'index'])->name('rooms.index');
        Route::get('create', [App\Http\Controllers\admin\RoomController::class, 'create'])->name('rooms.create');
        Route::post('store', [App\Http\Controllers\admin\RoomController::class, 'store'])->name('rooms.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\RoomController::class, 'edit'])->name('rooms.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\RoomController::class, 'update'])->name('rooms.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\RoomController::class, 'destroy'])->name('rooms.destroy');
    });
    // showtime
    Route::prefix('showtime')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\showtimeController::class, 'index'])->name('showtime.index');
        Route::get('create', [App\Http\Controllers\admin\showtimeController::class, 'create'])->name('showtime.create');
        Route::post('store', [App\Http\Controllers\admin\showtimeController::class, 'store'])->name('showtime.store');
        Route::get('edit/{id}', [App\Http\Controllers\admin\showtimeController::class, 'edit'])->name('showtime.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\showtimeController::class, 'update'])->name('showtime.update');
        Route::get('delete/{id}', [App\Http\Controllers\admin\showtimeController::class, 'destroy'])->name('showtime.destroy');
    });
      // comment
    Route::prefix('comment')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\commentController::class, 'index'])->name('comment.index');
        Route::get('hidden/{id}', [App\Http\Controllers\admin\commentController ::class, 'hidden'])->name('comment.hidden');
        Route::get('restore/{id}', [App\Http\Controllers\admin\commentController ::class, 'restore'])->name('comment.restore');
    });

    // cart
        Route::get('/seat-food/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'seatFood'])->name('chair');
        Route::get('/pay/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'Pay'])->name('pay');
        Route::post('/payment-success/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'PaymentSuccess'])->name('payment_success');
        Route::get('/success/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'show'])->name('success');

        //vnpay
        Route::post('/vnpay_payment', [App\Http\Controllers\client\cart\PaymentController::class, 'vnpay_payment']);

        //momo
        Route::post('/momo_payment', [App\Http\Controllers\client\cart\PaymentController::class, 'momo_payment']);

                //onepay
                Route::post('/onepay_payment', [App\Http\Controllers\client\cart\PaymentController::class, 'onepay_payment']);


});
