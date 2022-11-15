<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search-home', [App\Http\Controllers\HomeController::class, 'search'])->name('search-home');
Route::get('/listed-properties/{id}', [App\Http\Controllers\HomeController::class, 'properties'])->name('properties-home');
Route::get('/plots-for-sale/{id}', [App\Http\Controllers\HomeController::class, 'plots'])->name('plots-home');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    echo "Done";
});


Auth::routes();

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
});



// Users Routes
Auth::routes();
Route::group(['prefix'=>'vendors'], function(){
    Route::get('/', [App\Http\Controllers\VendorController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor.home');
    Route::get('/user-profile', [App\Http\Controllers\VendorController::class, 'user_profile'])->name('user-profile');
    Route::get('/my-listings', [App\Http\Controllers\VendorController::class, 'my_listings'])->name('my-listings');
    Route::get('/add-property', [App\Http\Controllers\VendorController::class, 'add_property'])->name('add-property');
    Route::get('/payment-method', [App\Http\Controllers\VendorController::class, 'payment_method'])->name('payment-method');
    Route::get('/invoice', [App\Http\Controllers\VendorController::class, 'invoice'])->name('invoice');
    Route::get('/invoices', [App\Http\Controllers\VendorController::class, 'invoices'])->name('invoices');
    Route::get('/change-password', [App\Http\Controllers\VendorController::class, 'change_password'])->name('change-password');
    Route::get('/invoice', [App\Http\Controllers\VendorController::class, 'invoice'])->name('invoice');


    // SocialMedia
    Route::get('/facebook', [LoginController::class, 'facebook'])->name('facebook-login');
    Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
    Route::get('/google', [LoginController::class, 'google'])->name('google-login');
    Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);
    Route::get('/linkedin', [LoginController::class, 'linkedin'])->name('linkedin-login');
    Route::get('/linkedin/redirect', [LoginController::class, 'linkedinRedirect']);
});
