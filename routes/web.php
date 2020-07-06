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

//Route::resource('investments', 'InvestmentController');

Route::get('/investments','InvestmentController@index')->middleware('auth');
Route::post('/investments','InvestmentController@store')->middleware('auth')->name('investment.store');

Route::get('/investments/add',function() {
    return view('investment.new');
})->middleware('auth');

Route::get('/investment/add/single/{company_number}/{title}','InvestmentController@create')->middleware('auth');

Route::get('/investment/{id}/edit','InvestmentController@edit')->middleware('auth');
Route::put('/investment/{id}','InvestmentController@update')->middleware('auth')->name('investment.update');
Route::delete('/investment/{id}','InvestmentController@destroy')->middleware('auth')->name('investment.destroy');

Route::get('/companies','CompanyController@index')->middleware('auth');
Route::get('/companies/search', function() {
    return view('company.search');
})->middleware('auth')->name('company.search');
Route::post('/companies/search','CompanyController@search')->middleware('auth');

Route::get('/company/profile/{id}','CompanyController@show')->middleware('auth');

Auth::routes();
