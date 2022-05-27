<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::view('/messageForm', 'messageForm')->name('messageForm');
Route::post('/send', [ContactController::class, 'send'])->name('send.email');
Route::get('send-mail', [MailController::class, 'index']);