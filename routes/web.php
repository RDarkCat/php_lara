<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'NewsController@index')->name('news.index');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/signin', function (){
    return view('auth');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/add', 'NewsController@add')->name('news.add');
    Route::get('/item/{id}', 'NewsController@item')->name('news.item')
        ->where('id', '\d+');
    Route::post('/save', 'NewsController@save')->name('news.save');
    Route::get('/edit/{id}', 'NewsController@edit')->name('news.edit')
        ->where('id', '\d+');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/view/{id}', 'CategoryController@view')->name('categories.view')
        ->where('id', '\d+');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('categories.edit')
        ->where('id', '\d+');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/order', 'OrderController@index')->name('order.index');

Auth::routes();
