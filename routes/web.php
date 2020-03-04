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

if (env('APP_ENV') === 'production') {
    URL::forceScheme('http');
}

Route::get('/','HomeController@fix_index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::post('/newsletter', 'AppController@newsletter')->name('newsletter');
Route::get('/newsletters', 'DashboardController@newsletters')->name('newsletters');
Route::get('/sendpassword/{id}', 'UsersController@sendPassword')->name('sendpassword');
Route::get('/farmer/signup', 'AppController@farmerSignup')->name('farmer.signup');
Route::get('/agent/signup', 'AppController@agentSignup')->name('agent.signup');
Route::post('/agent/store', 'AppController@storeAgent')->name('agent.store');


Route::get('/user/{id}/interview', 'UsersController@interview')->name('users.interview');
Route::post('/user/interview/save/{id}', 'UsersController@interviewSave')->name('interview.save');
Route::resource('users','UsersController');
Route::resource('farmers','FarmerController');
Route::get('/farmer/donate', 'FarmerController@donate')->name('farmer.donate');

//Payments
Route::get('/payment', 'PaymentController@index')->name('payment.index');
Route::post('/payment/completed/', 'PaymentController@completedPayment')->name('payment.complete');
Route::post('/payment/store', 'PaymentController@storePayment')->name('payment.store');


Route::get('/map', 'DashboardController@map')->name('map');
Route::get('/mapped', 'DashboardController@map_details')->name('mapped');

Route::get('/foodcompany', 'AppController@foodCompany');
