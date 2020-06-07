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

Route::get('/signout','HomeController@signout')->name('signout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard/{id}', 'DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/agent', 'DashboardController@dashboardAgent')->name('dashboard.agent');
Route::post('/newsletter', 'AppController@newsletter')->name('newsletter');
Route::get('/newsletters', 'DashboardController@newsletters')->name('newsletters');
Route::get('/sendpassword/{id}', 'UsersController@sendPassword')->name('sendpassword');
Route::get('/farmer/signup', 'AppController@farmerSignup')->name('farmer.signup');
Route::get('/agent/signup', 'AppController@agentSignup')->name('agent.signup');
Route::post('/agent/store', 'AppController@storeAgent')->name('agent.store');
Route::get('/get-started', 'AppController@getStartedPage')->name('getstarted');
Route::post('/find-farms', 'AppController@findFarm')->name('find-farm');
Route::get('/contact','AppController@contact');
Route::post('/contact', 'AppController@contactMessage')->name('contactMessage');

Route::get('/farmers/register', 'FarmerController@registerFarmer')->name('farmer.reg');
Route::post('/farmer/reg/store', 'FarmerController@regFarmerStore')->name('farmer.store-reg');
Route::get('/farmers/signup/success', 'FarmerController@successReg')->name('reg.suc');
Route::get('/farmers/register/ref/{id}', 'FarmerController@referredRegistration')->name('reg.ref');

Route::get('/blog', 'AppController@blogIndex')->name('blog.index');
Route::get('/blog/1', 'AppController@blogOne');
Route::get('/blog/2', 'AppController@blogTwo');
Route::get('/blog/3', 'AppController@blogThree');

Route::get('/user/{id}/interview', 'UsersController@interview')->name('users.interview');
Route::post('/user/interview/save/{id}', 'UsersController@interviewSave')->name('interview.save');
Route::resource('users','UsersController');
Route::resource('farmers','FarmerController');
Route::get('/farmer/donate', 'FarmerController@donate')->name('farmer.donate');
Route::get('/farmer/add', 'FarmerController@farmerIndex')->name('farmer.add');
Route::post('/farmer/add', 'FarmerController@storeFarm')->name('farm.store');


//Payments
Route::get('/payment', 'PaymentController@index')->name('payment.index');
Route::post('/payment/completed/', 'PaymentController@completedPayment')->name('payment.complete');
Route::post('/payment/store', 'PaymentController@storePayment')->name('payment.store');


Route::get('/map', 'DashboardController@map')->name('map');

Route::get('/mapped', 'DashboardController@map_details')->name('mapped');

Route::get('/foodcompany', 'AppController@foodCompany');

Route::get('/farms', 'DashboardController@farms')->name('farms');
Route::post('/farms/addfarms', 'DashboardController@addFarms')->name('add-farms');

//Agent
Route::get('/requests', 'AgentController@request')->name('farm.request');
Route::get('/requests/{id}', 'AgentController@viewRequest')->name('view.request');
Route::get('/requests/assign-farms/{id}', 'AgentController@assignFarm')->name('assign-farms');
Route::post('/check-quantity/{id}', 'AgentController@checkCropQuantity')->name('check-quantity');
Route::post('/assign-farmer', 'AgentController@storeAssigned')->name('assign-farmer');
Route::post('/negotiate/agent', 'AgentController@agentNegotiateStore')->name('agent-negotiate');
Route::get('/negotiate/confirm/{id}', 'AgentController@confirmNegotiate')->name('confirm-negotiation');
Route::get('/negotiations/{id}', 'AgentController@negotiations')->name('negotiation.show');

Route::get('/sitemap', 'AppController@sitemap')->name('sitemap');