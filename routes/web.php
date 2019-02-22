<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/** Route admin */

Route::group(['as'=>'admin.','prefix'=> 'admin', 'namespace'=>'admin', 'middleware'=>['auth','admin']],
    function (){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        //  Route::resource('tag', 'TagController');
    });

/** End Route admin  */

/** Route Author */

Route::group(['as' => 'author.','prefix'=>'author', 'namespace'=>'author', 'middleware'=>['auth','author']],
    function (){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });

/** End Route Author */

/** Route Consumer */

Route::group(['as' => 'consumer.','prefix'=>'consumer', 'namespace'=>'consumer', 'middleware' => ['auth', 'consumer']],
    function (){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });

/** End Route Consumer */