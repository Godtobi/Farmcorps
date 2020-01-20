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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::post('/newsletter', 'AppController@newsletter')->name('newsletter');
Route::get('/newsletters', 'DashboardController@newsletters')->name('newsletters');
Route::get('/sendpassword/{id}', 'UsersController@sendPassword')->name('sendpassword');

Route::resource('users','UsersController');
Route::resource('farmers','FarmerController');
