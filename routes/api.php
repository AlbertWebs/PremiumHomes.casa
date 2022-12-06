<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MPESAController;
use App\Http\Controllers\PaymentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('v1/print-credentials',[MPESAController::class,'printCredentials']);
Route::get('v1/access-token',[MPESAController::class,'generateAccessToken']);
Route::get('v1/register/url',[MPESAController::class,'mpesaRegisterUrls']);
Route::post('v1/validation',[MPESAController::class,'mpesaValidation']);

// STK
Route::post('v1/stk/push',[MPESAController::class,'customerMpesaSTKPush'])->name('initiate-stk');
Route::post('v1/stk/push_call_back',[MPESAController::class,'customerMpesaSTKPushCallBack']);

// Pesapal


Route::post('v1/transaction/confirmation',[MPESAController::class,'mpesaConfirmation']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
