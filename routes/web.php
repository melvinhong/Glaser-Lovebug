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

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');

Route::get('/home', 'HomeController@index')->name('home');

// Routes for Admin
Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->name('admin.')->middleware(['auth', 'auth.admin'])->group(function() {
  Route::resource('/admin', 'UserController', ['except' => ['show', 'create', 'store']]);
});

// Routes for managing profile.
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::view('/profile/info', 'user.profile.info');
Route::post('/profile/info', 'ProfileController@store');

// Routes for Messenger
Route::view('/messenger', 'user.chatpage');

// Route for About Us
Route::view('/about', 'about');

// Routes for restrcting user to enter Admin panel.
Route::view('/restricted', 'restricted');

// Routes for Settings.
Route::view('/settings', 'user.settings');

Route::view('/settingupdate', 'user.settingupdate');
