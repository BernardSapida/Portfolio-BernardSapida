<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::post('/sendFeedback', [MailController::class, 'sendMail']);
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any','.*');
date_default_timezone_set('Asia/Manila');