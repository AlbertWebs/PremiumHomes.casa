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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    echo "Done";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Users Routes
Auth::routes();
Route::group(['prefix'=>'vendors'], function(){
    // SocialMedia
    Route::get('/facebook', [LoginController::class, 'facebook'])->name('facebook-login');
    Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
    Route::get('/google', [LoginController::class, 'google'])->name('google-login');
    Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);
    Route::get('/linkedin', [LoginController::class, 'linkedin'])->name('linkedin-login');
    Route::get('/linkedin/redirect', [LoginController::class, 'linkedinRedirect']);
});
