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
Route::get('welcome', function ()
{
    return view('welcome');
});
//Route::get('/contact/{name}', 'ContactController@get_data');

//Insert Data
Route::get('contact/create', 'ContactController@index');
Route::post('contact/store', 'ContactController@store');
Route::get('contact', 'ContactController@contact_list');

//Edit And Delete
Route::get('contact/edit/{id}', 'ContactController@edit');
Route::post('contact/update/{id}', 'ContactController@update');
Route::get('contact/delete/{id}', 'ContactController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
