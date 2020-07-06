<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','UserController@index')->middleware('auth');
Route::get('/users/{id}','UserController@show')->middleware('auth');

Route::resource('investments', 'InvestmentController');

Route::get('/investments','InvestmentController@index')->middleware('auth');
Route::get('/investments/create','InvestmentController@create')->middleware('auth');
Route::post('/investments','InvestmentController@store')->middleware('auth');
Route::get('/investments/{id}','InvestmentController@show')->middleware('auth');
Route::get('/investments/{id}/edit','InvestmentController@edit')->middleware('auth');
Route::put('/investments/{id}','InvestmentController@update')->middleware('auth')->name('investment.update');
Route::delete('/investments/{id}','InvestmentController@destroy')->middleware('auth')->name('investment.destroy');

Route::get('/companies','CompanyController@index')->middleware('auth');
Route::get('/companies/search', function() {
    return view('company.search');
})->middleware('auth')->name('company.search');
Route::post('/companies/search','CompanyController@search')->middleware('auth');

Auth::routes();
