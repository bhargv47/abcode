<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/email', function () {
    Mail::to('bhalu.developer@gmail.com')->send(new WelcomeMail());    
});
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\HomeController@home']);
Route::match(['get', 'post'], '/contact', ['as' => 'home', 'uses' => 'frontend\ContactController@index']);


Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'backend\LoginController@login']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'backend\LoginController@logout']);
Route::match(['get', 'post'], 'createpassword', ['as' => 'createpassword', 'uses' => 'backend\LoginController@createpassword']);




$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function () {
    Route::match(['get', 'post'], 'admin/dashboard', ['as' => 'dashboard', 'uses' => 'backend\DashboardController@dashboard']);
});