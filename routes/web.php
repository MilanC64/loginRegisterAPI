<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

/* Rendering mail templates */
Route::get('/mail_render', function () {
    return new App\Mail\MailableTest([1,2,3]);
});

/* Sending mail to mailtrap */
Route::get('/mail_send', function () {
    Mail::to('sojko@example.com')->send(new App\Mail\MailableTest([1,2,3]));
});
