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

// Route::get('/home', 'HomeController@index')
//     ->middleware('auth')
//     ->name('home');


// Rotas para a Dashboard ---------------------
Route::middleware(['auth','can:admin'])->group(function(){
    Route::get('/dashboard', 'DashboardController@index')
        ->middleware('auth')
        ->name('dashboard');
    Route::get('/dashboard/create', 'DashboardController@create')
        ->middleware('auth')
        ->name('dashboard.create');
    Route::post('/dashboard/create', 'DashboardController@store')
        ->middleware('auth')
        ->name('dashboard.store');
    Route::get('/dashboard/edit/{id}', 'DashboardController@edit')
        ->middleware('auth')
        ->name('dashboard.edit');
    Route::post('/dashboard/edit/{id}', 'DashboardController@update')
        ->middleware('auth')
        ->name('dashboard.update');
    Route::get('/dashboard/delete/{id}', 'DashboardController@destroy')
        ->middleware('auth')
        ->name('dashboard.delete');
});

// ---------------------------------------------

// Rotas para a área vip ----------------------------
Route::get('/vip', 'vipController@index')
    ->middleware('auth')
    ->name('vip');
Route::get('/vip/read/{id}', 'vipController@getFullPost')
    ->middleware('auth')
    ->name('vip.read');

// --------------------------------------------------

// Rotas Produtos----------------
Route::get('/products', 'ProductsController@index')
    ->name('products');
//---------

//Rotas Servicos----------------
Route::get('/services', 'ServicesController@index')
    ->name('services');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//Rotas Contact Us-----------
Route::get('contact-us', 'ContactUsController@contactUs');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactUsPost']);
//----------------

Route::resource('/consultations','ConsultationController');
