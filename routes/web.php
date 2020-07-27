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

Route::get('javascript', 'JavascriptController@index');
Route::get('ajax-get', 'JavascriptController@ajax_get')->name('ajax.get');
Route::post('ajax-post', 'JavascriptController@ajax_post')->name('ajax.post');
Route::get('image', 'JavascriptController@ajax_get_image');

