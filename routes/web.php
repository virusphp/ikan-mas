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
    return redirect('/admin/home');
});

//membuat login
Route::get('panel', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('panel', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function()
{

    Route::get('/home', 'HomeController@home')->name('home');

});