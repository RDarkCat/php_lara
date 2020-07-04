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
        ->where('id', '\d+');;
    Route::get('/edit/{id}', 'NewsController@edit')->name('news.edit')
        ->where('id', '\d+');;
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoriesController@index')->name('categories.index');
    Route::get('/view/{id}', 'CategoriesController@view')->name('categories.view')
        ->where('id', '\d+');
    Route::get('/edit/{id}', 'CategoriesController@edit')->name('categories.edit')
        ->where('id', '\d+');
});

Auth::routes();

