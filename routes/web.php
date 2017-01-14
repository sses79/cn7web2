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

Route::get('/', array('as' => 'home', function () {
    return view('welcome');
}));

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/timeline', 'FrontEndController@showTimeline');
Route::get('/portfolio', 'FrontEndController@showPortfolio');
Route::get('/feature', 'FrontEndController@showFeature');

Route::group(array('prefix' => 'backend', 'middleware' => 'auth'), function () {
//Route::group(array('prefix' => 'backend'), function () {
    Route::get('/', array('as' => 'dashboard', 'uses' => 'BackendController@showDashboard'));

//# Users
//    Route::group(array('prefix' => 'users'), function () {
//        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
//    });
//# News
//    Route::group(array('prefix' => 'news'), function () {
//        Route::get('/', array('as' => 'newses', 'uses' => 'NewsController@getIndex'));
//        Route::get('create', array('as' => 'create/news', 'uses' => 'NewsController@getCreate'));
//        Route::post('create', 'NewsController@postCreate');
//        Route::get('{news}/edit', array('as' => 'update/news', 'uses' => 'NewsController@getEdit'));
//        Route::post('{news}/edit', 'NewsController@postEdit');
//        Route::get('{news}/delete', array('as' => 'delete/news', 'uses' => 'NewsController@getDelete'));
//        Route::get('{news}/confirm-delete', array('as' => 'confirm-delete/news', 'uses' => 'NewsController@getModalDelete'));
//        Route::get('{news}/restore', array('as' => 'restore/news', 'uses' => 'NewsController@getRestore'));
//        Route::get('{news}/show', array('as' => 'news/show', 'uses' => 'NewsController@show'));
//    });
//
//    Route::group(array('prefix' => 'phone'), function () {
//        Route::get('/', array('as' => 'phone', 'uses' => 'PhoneController@getIndex'));
//        Route::get('create', array('as' => 'create/phone', 'uses' => 'PhoneController@getCreate'));
//        Route::get('{phone}/confirm-delete', array('as' => 'confirm-delete/phone', 'uses' => 'PhoneController@getModalDelete'));
//    });

//    Route::get('{name?}', 'BackendController@showView');

});
