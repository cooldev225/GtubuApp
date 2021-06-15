<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listing', 'HomeController@listing')->name('listing');
Auth::routes();
Route::get('/login', 'AuthController')->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::get('/forgot', 'AuthController@forgot')->name('forgot');
Route::post('/forgot', 'AuthController@forgot');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/ads', 'HomeController@ads')->name('ads');
Route::group(['middleware' => ['login']], function () {
    
});
Route::post('/developer', 'Util\\DbUtil@developer');
Route::post('/notify/read', 'Util\\NotifyUtil@read');
//Route::post('/v1/api/config', 'API\\CommonController@config');