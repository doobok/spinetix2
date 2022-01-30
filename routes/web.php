<?php

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

    Route::get('/', 'App\Http\Controllers\PagesController@mainPage')->name('main-page');
    Route::get('/{slug}', 'App\Http\Controllers\PagesController@page')->name('page');

});


Route::get('setlocale/{lang}', 'App\Http\Controllers\LangController@setLocale')->name('setlocale');
