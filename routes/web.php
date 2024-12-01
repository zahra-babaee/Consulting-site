<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\CheckoutController;
use App\Http\Controllers\ourteam\OurteamController;
use App\Http\Controllers\pages\DashboardController;
use App\Http\Controllers\pages\AppointmentController;
use App\Http\Controllers\auth\ForgetPasswordController;

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

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/about', AboutController::class )->name('about');

Route::get('/contact',[ContactController::class , 'index'])->name('contact');
Route::post('/contact',[ContactController::class , 'store'])->name('contact_post');

Route::get('/blog', [BlogController::class , 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class , 'show'])->name('blog');

Route::get('/ourteam', [OurteamController::class , 'index'])->name('ourteam');
Route::get('/ourteam_single/{slug}', [OurteamController::class , 'show'])->name('ourteam_single');

Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard')->Middleware('client_login');
Route::post('/dashboard', [DashboardController::class , 'update'])->name('dashboard_edit')->Middleware('client_login');


Route::get('/appointment', [AppointmentController::class , 'index'])->name('appointment');
Route::post('/appointment', [AppointmentController::class , 'store'])->name('appointment_post');

Route::get('/checkout', [CheckoutController::class , 'index'])->name('checkout');



Route::prefix('auth')->group(function () {

    Route::get('/login', [LoginController::class , 'index'])->name('login');
    Route::post('/login', [LoginController::class , 'store'])->name('login_post');
    Route::get('/logout', [LoginController::class , 'logout'])->name('logout');


    Route::get('/register', [RegisterController::class , 'index'])->name('register');
    Route::post('/register', [RegisterController::class , 'store'])->name('register_post');

    Route::get('/forget_password', [ForgetPasswordController::class , 'index'])->name('Forget_password');
    Route::post('/forget_password', [ForgetPasswordController::class , 'update'])->name('Forget_password_post');

    Route::get('/reset_password/{link}', [ForgetPasswordController::class , 'reset_password'])->name('reset_password');
    Route::post('/reset_password', [ForgetPasswordController::class , 'store'])->name('reset_password_post');

});


Route::group(['prefix' => '/admin'], function () {
    Voyager::routes();
});
