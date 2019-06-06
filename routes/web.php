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

Route::get('/home', 'HomeController@index')
    ->middleware('auth')
    ->name('home');

Route::get('/products', 'ProductsController@index')
    ->middleware('auth')
    ->name('products');

Route::get('/services', 'ServicesController@index')
    ->middleware('auth')
    ->name('services');

    Route::get('/contact', 'ContactUsController@index')
    ->name('contact');


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::get('contact-us', 'ContactUsController@contactUs');
Route::post('contact-us',[
            'as'=>'contactus.store',
            'uses'=>'ContactUsController@contactUsPost'
            ]);
