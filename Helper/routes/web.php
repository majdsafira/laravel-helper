<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VolenteerController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\DonateController;
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

Route::get('/','App\Http\Controllers\TemplateController@index' );
Route::get('/about','App\Http\Controllers\TemplateController@about' );
Route::get('/services','App\Http\Controllers\TemplateController@services' );
Route::get('/contact','App\Http\Controllers\TemplateController@contact' );




Route::resource('admin', AdminController::class);
Route::resource('users', RegisterController::class);
Route::resource('volenteers', VolenteerController::class);
Route::resource('/', HelpController::class);
Route::resource('donate', DonateController::class);


Route::get('don', [DonateController::class , 'create']);
Route::get('/profile/{id}','App\Http\Controllers\RegisterController@profileShow')->name('profile');
Route::get('/userform','App\Http\Controllers\RegisterController@loginForm')->name('userform');
Route::post('/userlogin','App\Http\Controllers\RegisterController@userlogin')->name('userlogin');
Route::put('/update','App\Http\Controllers\RegisterController@update')->name('update');