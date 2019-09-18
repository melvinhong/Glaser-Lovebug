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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->name('admin.')->middleware(['auth', 'auth.admin'])->group(function() {
  Route::resource('/admin', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/restricted', function () {
    return view('restricted');
});

Route::get('/settings', function () {
    return view('settings');
});
