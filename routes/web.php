<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::post('upazila-list', 'HomeController@upazilaList')->name('upazila.list');

Route::group(['prefix' => 'user', 'as'=>'user.'], function () {
    Route::post('store', 'HomeController@store')->name('store');
    Route::post('list', 'HomeController@userList')->name('list');
    Route::post('edit', 'HomeController@edit')->name('edit');
    Route::post('show', 'HomeController@show')->name('show');
    Route::post('delete', 'HomeController@destroy')->name('delete');
    Route::post('change-status', 'HomeController@changeStatus')->name('change.status');
});

Route::get('javascript', 'JavascriptController@index');
Route::get('ajax-get', 'JavascriptController@ajax_get')->name('ajax.get');
Route::post('ajax-post', 'JavascriptController@ajax_post')->name('ajax.post');
Route::get('image', 'JavascriptController@ajax_get_image');

Route::group(['prefix' => 'jquery', 'as' => 'jquery.'], function () {
    Route::get('index', 'JqueryController@index');
    Route::get('ajax-get', 'JqueryController@ajax_get')->name('ajax.get');
    Route::post('ajax-post', 'JqueryController@ajax_post')->name('ajax.post');
    Route::get('image', 'JqueryController@ajax_get_image')->name('ajax.image');
});

Route::view('json', 'json');
