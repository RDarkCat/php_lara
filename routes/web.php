<?php

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


Route::group(['prefix' => 'admin'], function () {
    Route::resource('/categories', Admin\CategoryController::class);
    Route::resource('/news', Admin\NewsController::class);
});

Route::get('/order', 'OrderController@index')->name('order.index');

Auth::routes();
