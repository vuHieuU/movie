<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\GitHubController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\cityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/', [App\Http\Controllers\client\homeController::class, 'index'])->name('home');
// Route::get('/contact', [App\Http\Controllers\client\ContactController::class, 'index']);

// Route::get('/', [App\Http\Controllers\client\homeController::class, 'index']);

Route::get('/contact', [App\Http\Controllers\client\ContactController::class, 'index'])->name("contact");
Route::post('/contact', [App\Http\Controllers\client\ContactController::class, 'store'])->name("contact.store");

Route::get('/home/{id}', [App\Http\Controllers\client\homeController::class, 'show'])->name('homeCinema');
// Route::get('/contact', [App\Http\Controllers\client\ContactController::class, 'index'])->name('contact');

Route::get('/detailblog', [App\Http\Controllers\client\DetailBlogController::class, 'index'])->name("detailblog");
Route::get('/detailblog/{blog_slug}', [App\Http\Controllers\client\DetailBlogController::class, 'show'])->name("detailblog");

Route::get('/weeklyshowtime', [App\Http\Controllers\client\WeeklyShowtimeController::class, 'index']);
Route::get('/weeklyshowtime/{id}', [App\Http\Controllers\client\WeeklyShowtimeController::class, 'show'])->name("weeklyshowtime");

// comment detail film
Route::post('/addComment', [App\Http\Controllers\client\CommentController::class, 'store'])->name("comment.store");

Route::get('/chi-tiet-phim/{slug}', [App\Http\Controllers\client\DetailFilmController::class, 'index'])->name("filmDetail");

Route::get('/dang-phat', [App\Http\Controllers\client\DangphatController::class, 'index'])->name("dang-phat");
Route::get('/sap-ra-mat', [App\Http\Controllers\client\SapramatController::class, 'index'])->name("sap-ra-mat");
Route::get('/movie', [App\Http\Controllers\client\AllfilmController::class, 'index'])->name("movie");
Route::get('/movie/{id}', [App\Http\Controllers\client\AllfilmController::class, 'show'])->name("movie");

// Route::get('/myaccount', [App\Http\Controllers\client\MyaccountController::class, 'index'])->name("myaccount");
// Route::get('/editaccount', [App\Http\Controllers\client\EditaccountController::class, 'index'])->name("editaccount");
Route::get('/introduction', [App\Http\Controllers\client\InTroDucTionController::class, 'index'])->name("introduction");



Route::get('auth/google', [GoogleController::class, "redirectToGoogle"])->name("loginGoogle");
Route::get('auth/google/callback', [GoogleController::class, "handleGoogleCallback"]);

Route::get('/auth/redirect', [GitHubController::class, "redirectToGitHub"])->name('loginGithub');
Route::get('/auth/callback', [GitHubController::class, "handleGitHubCallback"]);

// Route::get('/detail_film/pay/{id}', [App\Http\Controllers\client\Detail_filmController::class, 'show']);

// Route::get('/pay/{id}', [App\Http\Controllers\client\Detail_filmController::class, 'show']);/



Route::post('add-rating', [App\Http\Controllers\client\RatingController::class, 'add'])->middleware(['auth']);



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes([
    'verify' => true
]);
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::middleware(['auth','verified'])->group(function () {    //profile của user
    Route::get('/myaccount', [AuthController::class, 'index'])->name("myaccount");
    Route::get('/editaccount', [AuthController::class, 'edit'])->name("editaccount");
    Route::post('/myaccount', [AuthController::class, 'profile'])->name('profile');
    Route::get('/history', [AuthController::class, 'historyTicket'])->name('history');
    Route::get('/detail-show/{id}', [AuthController::class, 'show'])->name('detail.show');
    // roles
    // cart
    Route::get('/seat-food/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'seatFood'])->name('chair');
    Route::get('/pay/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'Pay'])->name('pay');
    Route::post('/apply-coupon', [App\Http\Controllers\client\cart\CouponController::class, 'applyCoupon'])->name('applyCoupon');
    Route::post('/payment-success/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'PaymentSuccess'])->name('payment_success');
    Route::get('/success/{film_id}', [App\Http\Controllers\client\cart\PayController::class, 'show'])->name('success');
    Route::post('/updates/{showtime_seat_id}', [App\Http\Controllers\client\cart\PayController::class, 'updates']);

    //Favarite Film
    Route::post('/addFavoFilm', [App\Http\Controllers\client\FavoriteController::class, 'store']);
    Route::get('/deleteFavoFilm/{id}', [App\Http\Controllers\client\FavoriteController::class, 'destroy']);
    Route::get('/unLikeFilm/{id}', [App\Http\Controllers\client\FavoriteController::class, 'unLike']);
    Route::get('/FavoFilm/{id}', [App\Http\Controllers\client\FavoriteController::class, 'show']);

    //vnpay
    Route::post('/vnpay_payment/{film_id}', [App\Http\Controllers\client\cart\PaymentController::class, 'vnpay_payment']);

    //momo
    Route::post('/momo_payment/{film_id}', [App\Http\Controllers\client\cart\PaymentController::class, 'momo_payment']);

    //onepay
    Route::post('/onepay_payment', [App\Http\Controllers\client\cart\PaymentController::class, 'onepay_payment']);
});

Route::middleware('auth')->group(function () {
    // Các route được bảo vệ bởi middleware 'admin' nên được định nghĩa ở đây
    // ...
    Route::get('/admin', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('index');
    Route::prefix('role')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\roleController::class, 'index'])->middleware('permission:show-role');
        Route::get('create', [App\Http\Controllers\admin\roleController::class, 'create'])->middleware('permission:create-role');
        Route::post('store', [App\Http\Controllers\admin\roleController::class, 'store'])->middleware('permission:create-role');
        Route::get('edit/{id}', [App\Http\Controllers\admin\roleController::class, 'edit'])->middleware('permission:show-role');
        Route::post('update/{id}', [App\Http\Controllers\admin\roleController::class, 'update'])->middleware('permission:update-role');
        Route::get('delete/{id}', [App\Http\Controllers\admin\roleController::class, 'destroy'])->middleware('permission:delete-role');
    });
    // Users
    Route::prefix('user')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\userController::class, 'index'])->name('index_user')->middleware('permission:show-user');
        Route::get('show/{id}', [App\Http\Controllers\admin\userController::class, 'show'])->name('show.user')->middleware('permission:create-user');
        Route::get('edit/{id}', [App\Http\Controllers\admin\userController::class, 'edit'])->middleware('permission:create-user');
        Route::post('update/{id}', [App\Http\Controllers\admin\userController::class, 'update'])->middleware('permission:show-user');
        Route::get('delete/{id}', [App\Http\Controllers\admin\userController::class, 'destroy'])->name('remove_user')->middleware('permission:update-user');
        Route::get('showTicketUser/{id}', [App\Http\Controllers\admin\userController::class, 'showTicketUser'])->name('showTicketUser.user')->middleware('permission:delete-user');
    });
    Route::prefix('admin')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\userController::class, 'admin_index'])->name('index_admin')->middleware('permission:show-user');
        Route::get('create', [App\Http\Controllers\admin\userController::class, 'create'])->middleware('permission:create-user');
        Route::post('store', [App\Http\Controllers\admin\userController::class, 'store'])->middleware('permission:create-user');
        Route::get('edit/{id}', [App\Http\Controllers\admin\userController::class, 'edit_admin'])->name('edit_admin')->middleware('permission:show-user');
        Route::post('update/{id}', [App\Http\Controllers\admin\userController::class, 'update_admin'])->name('update_admin')->middleware('permission:update-user');
        Route::get('delete/{id}', [App\Http\Controllers\admin\userController::class, 'destroy_admin'])->name('remove_admin')->middleware('permission:delete-user');
    });
    //Coupon (ma giam gia)
    Route::prefix('coupon')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\couponController::class, 'index'])->name('coupon.index')->middleware('permission:show-coupon');
        Route::get('create', [App\Http\Controllers\admin\couponController::class, 'create'])->name('coupon.create')->middleware('permission:create-coupon');
        Route::post('store', [App\Http\Controllers\admin\couponController::class, 'store'])->name('coupon.store')->middleware('permission:create-coupon');
        Route::get('edits/{id}', [App\Http\Controllers\admin\couponController::class, 'edit'])->name('coupon.edit')->middleware('permission:show-coupon');
        Route::put('update/{id}', [App\Http\Controllers\admin\couponController::class, 'update'])->name('coupon.update')->middleware('permission:update-coupon');
        Route::get('delete/{id}', [App\Http\Controllers\admin\couponController::class, 'destroy'])->name('coupon.delete')->middleware('permission:delete-coupon');
    });
    // food
    Route::prefix('food')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\foodController::class, 'index'])->name('food.index')->middleware('permission:show-food');
        Route::get('create', [App\Http\Controllers\admin\foodController::class, 'create'])->name('food.create')->middleware('permission:create-food');
        Route::post('store', [App\Http\Controllers\admin\foodController::class, 'store'])->name('food.store')->middleware('permission:create-food');
        Route::get('show/{id}', [App\Http\Controllers\admin\foodController::class, 'show'])->name('food.show')->middleware('permission:show-food');
        Route::get('edit/{id}', [App\Http\Controllers\admin\foodController::class, 'edit'])->name('food.edit')->middleware('permission:show-food');
        Route::put('update/{id}', [App\Http\Controllers\admin\foodController::class, 'update'])->name('food.update')->middleware('permission:update-food');
        Route::get('delete/{id}', [App\Http\Controllers\admin\foodController::class, 'destroy'])->name('food.delete')->middleware('permission:delete-food');
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
        Route::get('index', [App\Http\Controllers\admin\categoryController::class, 'index'])->name('categories.index')->middleware('permission:show-categories');
        Route::get('create', [App\Http\Controllers\admin\categoryController::class, 'create'])->name('categories.create')->middleware('permission:create-categories');
        Route::post('store', [App\Http\Controllers\admin\categoryController::class, 'store'])->name('categories.store')->middleware('permission:create-categories');
        Route::get('edit/{id}', [App\Http\Controllers\admin\categoryController::class, 'edit'])->name('categories.edit')->middleware('permission:show-categories');
        Route::put('update/{id}', [App\Http\Controllers\admin\categoryController::class, 'update'])->name('categories.update')->middleware('permission:update-categories');
        Route::get('delete/{id}', [App\Http\Controllers\admin\categoryController::class, 'destroy'])->name('categories.destroy')->middleware('permission:delete-categories');
    });
    // Danh sách Phim
    Route::prefix('films')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\filmController::class, 'index'])->name('films.index')->middleware('permission:show-films');
        Route::get('create', [App\Http\Controllers\admin\filmController::class, 'create'])->name('films.create')->middleware('permission:create-films');
        Route::post('store', [App\Http\Controllers\admin\filmController::class, 'store'])->name('films.store')->middleware('permission:create-films');
        Route::get('show/{id}', [App\Http\Controllers\admin\filmController::class, 'show'])->name('films.show')->middleware('permission:show-films');
        Route::get('edit/{id}', [App\Http\Controllers\admin\filmController::class, 'edit'])->name('films.edit')->middleware('permission:show-films');
        Route::post('update/{id}', [App\Http\Controllers\admin\filmController::class, 'update'])->name('films.update')->middleware('permission:update-films');
        Route::get('delete/{id}', [App\Http\Controllers\admin\filmController::class, 'destroy'])->name('films.destroy')->middleware('permission:delete-films');
    });
    //city
    Route::prefix('city')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\CityController::class, "index"])->middleware('permission:show-city');
        Route::get('create', [App\Http\Controllers\admin\CityController::class, "create"])->middleware('permission:create-city');
        Route::post('store', [App\Http\Controllers\admin\CityController::class, "store"])->middleware('permission:create-city');
        Route::get('edit/{id}', [App\Http\Controllers\admin\CityController::class, "edit"])->middleware('permission:show-city');
        Route::post('update/{id}', [App\Http\Controllers\admin\CityController::class, "update"])->middleware('permission:update-city');
        Route::get('delete/{id}', [App\Http\Controllers\admin\CityController::class, 'destroy'])->middleware('permission:delete-city');
    });
    // cinemas
    Route::prefix('cinemas')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\CinemasController::class, "index"])->middleware('permission:show-cinemas');
        Route::get('create', [App\Http\Controllers\admin\CinemasController::class, "create"])->middleware('permission:create-cinemas');
        Route::post('store', [App\Http\Controllers\admin\CinemasController::class, "store"])->middleware('permission:create-cinemas');
        Route::get('edit/{id}', [App\Http\Controllers\admin\CinemasController::class, "edit"])->middleware('permission:show-cinemas');
        Route::post('update/{id}', [App\Http\Controllers\admin\CinemasController::class, "update"])->middleware('permission:update-cinemas');
        Route::get('delete/{id}', [App\Http\Controllers\admin\CinemasController::class, 'destroy'])->middleware('permission:delete-cinemas');
    });
    // seats
    Route::prefix('seats')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\SeatController::class, 'index'])->name('seats.index')->middleware('permission:show-seats');
        Route::get('create', [App\Http\Controllers\admin\SeatController::class, 'create'])->name('seats.create')->middleware('permission:create-seats');
        Route::post('store', [App\Http\Controllers\admin\SeatController::class, 'store'])->name('seats.store')->middleware('permission:create-seats');
        Route::get('edit/{id}', [App\Http\Controllers\admin\SeatController::class, 'edit'])->name('seats.edit')->middleware('permission:show-seats');
        Route::post('update/{id}', [App\Http\Controllers\admin\SeatController::class, 'update'])->name('seats.update')->middleware('permission:update-seats');
        Route::get('delete/{id}', [App\Http\Controllers\admin\SeatController::class, 'destroy'])->name('seats.destroy')->middleware('permission:delete-seats');
    });
    // typeseats
    Route::prefix('typeseats')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\TypeSeatController::class, 'index'])->name('typeseats.index')->middleware('permission:show-typeseats');
        Route::get('create', [App\Http\Controllers\admin\TypeSeatController::class, 'create'])->name('typeseats.create')->middleware('permission:create-typeseats');
        Route::post('store', [App\Http\Controllers\admin\TypeSeatController::class, 'store'])->name('typeseats.store')->middleware('permission:create-typeseats');
        Route::get('edit/{id}', [App\Http\Controllers\admin\TypeSeatController::class, 'edit'])->name('typeseats.edit')->middleware('permission:show-typeseats');
        Route::post('update/{id}', [App\Http\Controllers\admin\TypeSeatController::class, 'update'])->name('typeseats.update')->middleware('permission:update-typeseats');
        Route::get('delete/{id}', [App\Http\Controllers\admin\TypeSeatController::class, 'destroy'])->name('typeseats.destroy')->middleware('permission:delete-typeseats');
    });

    // room
    Route::prefix('rooms')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\RoomController::class, 'index'])->name('rooms.index')->middleware('permission:show-rooms');
        Route::get('create', [App\Http\Controllers\admin\RoomController::class, 'create'])->name('rooms.create')->middleware('permission:create-rooms');
        Route::post('store', [App\Http\Controllers\admin\RoomController::class, 'store'])->name('rooms.store')->middleware('permission:create-rooms');
        Route::get('edit/{id}', [App\Http\Controllers\admin\RoomController::class, 'edit'])->name('rooms.edit')->middleware('permission:show-rooms');
        Route::post('update/{id}', [App\Http\Controllers\admin\RoomController::class, 'update'])->name('rooms.update')->middleware('permission:update-rooms');
        Route::get('delete/{id}', [App\Http\Controllers\admin\RoomController::class, 'destroy'])->name('rooms.destroy')->middleware('permission:delete-rooms');
    });
    // showtime
    Route::prefix('showtime')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\showtimeController::class, 'index'])->name('showtime.index')->middleware('permission:show-showtime');
        Route::get('create', [App\Http\Controllers\admin\showtimeController::class, 'create'])->name('showtime.create')->middleware('permission:create-showtime');
        Route::post('store', [App\Http\Controllers\admin\showtimeController::class, 'store'])->name('showtime.store')->middleware('permission:create-showtime');
        Route::get('edit/{id}', [App\Http\Controllers\admin\showtimeController::class, 'edit'])->name('showtime.edit')->middleware('permission:show-showtime');
        Route::post('update/{id}', [App\Http\Controllers\admin\showtimeController::class, 'update'])->name('showtime.update')->middleware('permission:update-showtime');
        Route::get('delete/{id}', [App\Http\Controllers\admin\showtimeController::class, 'destroy'])->name('showtime.destroy')->middleware('permission:delete-showtime');
    });
    // comment
    Route::prefix('comment')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\commentController::class, 'index'])->name('comment.index');
        Route::get('hidden/{id}', [App\Http\Controllers\admin\commentController::class, 'hidden'])->name('comment.hidden');
        Route::get('restore/{id}', [App\Http\Controllers\admin\commentController::class, 'restore'])->name('comment.restore');
    });
    // tickit
    Route::prefix('ticket')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\TicketController::class, 'index'])->name('ticket.index')->middleware('permission:show-ticket');
        Route::get('delete/{id}', [App\Http\Controllers\admin\TicketController::class, 'destroy'])->name('destroy.index')->middleware('permission:delete-ticket');
        Route::get('show/{id}', [App\Http\Controllers\admin\TicketController::class, 'show'])->name('show.index')->middleware('permission:show-ticket');
        Route::post('/tickets/{id}/updatePaymentStatus', [App\Http\Controllers\admin\TicketController::class, 'updatePaymentStatus'])->name('updatePaymentStatus')->middleware('permission:show-ticket');
    });

    // Danh sách Tin tức
    Route::prefix('news')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\NewController::class, 'index'])->name('news.index')->middleware('permission:show-news');
        Route::get('create', [App\Http\Controllers\admin\NewController::class, 'create'])->name('news.create')->middleware('permission:create-news');
        Route::post('store', [App\Http\Controllers\admin\NewController::class, 'store'])->name('news.store')->middleware('permission:create-news');
        Route::get('show/{id}', [App\Http\Controllers\admin\NewController::class, 'show'])->name('news.show')->middleware('permission:show-news');
        Route::get('edit/{id}', [App\Http\Controllers\admin\NewController::class, 'edit'])->name('news.edit')->middleware('permission:show-news');
        Route::post('update/{id}', [App\Http\Controllers\admin\NewController::class, 'update'])->name('news.update')->middleware('permission:update-news');
        Route::get('delete/{id}', [App\Http\Controllers\admin\NewController::class, 'destroy'])->name('news.destroy')->middleware('permission:delete-news');
    });
    // Hội viên
    Route::prefix('rank')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\rankController::class, 'index'])->name('rank.index')->middleware('permission:show-rank');
        Route::get('create', [App\Http\Controllers\admin\rankController::class, 'create'])->name('rank.create')->middleware('permission:create-rank');
        Route::post('store', [App\Http\Controllers\admin\rankController::class, 'store'])->name('rank.store')->middleware('permission:create-rank');
        Route::get('edit/{id}', [App\Http\Controllers\admin\rankController::class, 'edit'])->name('rank.edit')->middleware('permission:show-rank');
        Route::post('update/{id}', [App\Http\Controllers\admin\rankController::class, 'update'])->name('rank.update')->middleware('permission:update-rank');
        Route::get('delete/{id}', [App\Http\Controllers\admin\rankController::class, 'destroy'])->name('rank.destroy')->middleware('permission:delete-rank');
    });

    //Banner
    Route::prefix('sliders')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\SliderController::class, "index"])->name('sliders.index');
        Route::get('create', [App\Http\Controllers\admin\SliderController::class, "create"])->name('sliders.create');
        Route::post('store', [App\Http\Controllers\admin\SliderController::class, "store"]);
        Route::get('edit/{id}', [App\Http\Controllers\admin\SliderController::class, "edit"]);
        Route::put('update/{id}', [App\Http\Controllers\admin\SliderController::class, "update"]);
        Route::get('delete/{id}', [App\Http\Controllers\admin\SliderController::class, 'destroy'])->name('sliders.destroy');
    });
    //Statistical
    Route::prefix('statistical')->group(function () {
        Route::get('index', [App\Http\Controllers\admin\StatisticalController::class, "index"])->name('statistical.index')->middleware('permission:show-statistical');
        Route::get('indexFood', [App\Http\Controllers\admin\StatisticalController::class, "indexFood"])->name('statistical.indexFood')->middleware('permission:show-statistical');
        Route::get('indexFilm', [App\Http\Controllers\admin\StatisticalController::class, "indexFilm"])->name('statistical.indexFilm')->middleware('permission:show-statistical');
        Route::get('cinema/{name}', [App\Http\Controllers\admin\StatisticalController::class, "detailCinema"])->name('cinema.name')->middleware('permission:show-statistical');
        Route::get('detailFilm/{name}', [App\Http\Controllers\admin\StatisticalController::class, "detailFilm"])->name('detailFilm.name')->middleware('permission:show-statistical');
        Route::get('detailFood/{days}', [App\Http\Controllers\admin\StatisticalController::class, "detailFood"])->name('detailFilm.food')->middleware('permission:show-statistical');
        Route::get('detailFoodCinema/{name}', [App\Http\Controllers\admin\StatisticalController::class, "detailFoodCinema"])->name('detailFilm.food')->middleware('permission:show-statistical');
        Route::get('detailFoodCinemas/{name}', [App\Http\Controllers\admin\StatisticalController::class, "detailFoodCinemas"])->name('detailFilm.food')->middleware('permission:show-statistical');
        Route::get('detailFilms/{days}', [App\Http\Controllers\admin\StatisticalController::class, "detailFilms"])->name('detailFilm.food')->middleware('permission:show-statistical');
        Route::get('detailFilmCinemasDay/{days}', [App\Http\Controllers\admin\StatisticalController::class, "detailFilmCinemasDay"])->name('detailFilmCinemasDay.film')->middleware('permission:show-statistical');
    });
    
     // tổng quan
        Route::get('overview', [App\Http\Controllers\admin\OverviewController::class, 'index'])->name('overview');
        Route::get('overview/{name}', [App\Http\Controllers\admin\OverviewController::class, 'show'])->name('overview.cinema');


    //setting
    Route::get('/smtp-settings',[App\Http\Controllers\admin\SettingController::class,'smtp_settings'])->name('smtp_settings.index');
    Route::post('/env_key_update',[App\Http\Controllers\admin\SettingController::class,'env_key_update'])->name('smtp_settings.update');
    Route::get('/NotificationList', [App\Http\Controllers\admin\NotificationController::class, 'index'])->middleware('permission:show-Notification');
    Route::get('/admin/contact', [App\Http\Controllers\admin\ContactController::class, 'index'])->name('contact.index');
    Route::get('/admin/contacts/{id}', [App\Http\Controllers\admin\ContactController::class, 'show'])->name('contact.show');


     // *********** cinema //
    Route::get('allCinema', [App\Http\Controllers\admin\StatisticalController::class, "allCinema"])->name('allCinema')->middleware('permission:show-statistical');
    Route::get('allCinemaDay/{day}', [App\Http\Controllers\admin\StatisticalController::class, "allCinemaDay"])->middleware('permission:show-statistical');
     // *********** film //
    Route::get('allFilm', [App\Http\Controllers\admin\StatisticalController::class, "allFilm"])->name('allFilm')->middleware('permission:show-statistical');
    Route::get('allCinemaFilm/{id}', [App\Http\Controllers\admin\StatisticalController::class, "allCinemaFilm"])->name('allCinemaFilm')->middleware('permission:show-statistical');
});