<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('news.index');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/category/{name}', 'CategoryController@show')->name('categories');

Route::get('/signin', function (){
    return view('auth');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::get('/store', 'NewsController@store')->name('news.store');
    Route::post('/update/{id}', 'NewsController@update')->name('news.update');
    Route::get('/edit/{news}', 'NewsController@edit')->name('news.edit');
    Route::get('{name}/show', 'NewsController@show')
    ->where('name', '\w+')->name('news.show');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/store', 'CategoryController@store')->name('categories.store');
    Route::get('/edit/{category}', 'CategoryController@edit')->name('categories.edit')
        ->where('id', '\d+');
    Route::put('/update/{category}', 'CategoryController@update')->name('categories.update')
        ->where('id', '\d+');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/order', 'OrderController@index')->name('order.index');

//Auth::routes();
