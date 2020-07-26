<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('news.index');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', ContactController::class)->name('contact');

Route::get('/category/{name}', 'CategoryController@show')->name('categories');

Route::get('/news/{news}/item', 'NewsController@item')->name('news.item');

Route::get('{name}/show', 'CategoryController@show')
    ->where('name', '\w+')->name('news.show');

Route::get('/signin', function (){
    return view('auth');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
    Route::get('/account', 'Account\IndexController@index')->name('account');
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/','Admin\IndexController@index')->name('admin');
        Route::resource('/categories', Admin\CategoryController::class);
        Route::resource('/news', Admin\NewsController::class);
        Route::resource('/users', Admin\UserController::class);
        Route::get('/externals/check', 'Admin\ExternalController@check')->name('externals.check');
        Route::get('/externals/data', 'Admin\ExternalController@getData')->name('externals.data');
        Route::resource('/externals', Admin\ExternalController::class);

    });
});
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/foreign/news', ParserController::class)->name('externals.index');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/vk/auth/redirect', 'SocialAuthcontroller@vkAuth')->name('vk.auth');
    Route::get('/vk/auth/callback', 'SocialAuthcontroller@vkAuthCallback')->name('vk.callback');
    Route::get('/facebook/auth/redirect', 'SocialAuthcontroller@facebookAuth')->name('facebook.auth');
    Route::get('/facebook/auth/callback', 'SocialAuthcontroller@facebookAuthCallback')->name('facebook.callback');
});

Auth::routes();
