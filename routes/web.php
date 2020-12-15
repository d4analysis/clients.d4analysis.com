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

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');;

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/users','UserController@index')->middleware('auth');
Route::get('/users/{id}','UserController@show')->middleware('auth');

//Route::resource('investigations', 'investigationController');

Route::get('/investigations','InvestigationController@index')->middleware('auth');
Route::post('/investigations','InvestigationController@store')->middleware('auth')->name('investigation.store');

Route::get('/investigations/add',function() {
    return view('investigation.new');
})->middleware('auth');

Route::get('/investigation/add/single/{company_number}/{title}','InvestigationController@create')->middleware('auth');

Route::get('/investigation/{id}/edit','InvestigationController@edit')->middleware('auth');
Route::put('/investigation/{id}','InvestigationController@update')->middleware('auth')->name('investigation.update');
Route::delete('/investigation/{id}','InvestigationController@destroy')->middleware('auth')->name('investigation.destroy');

Route::get('/companies','CompanyController@index')->middleware('auth');

Route::get('/companies/search', 'CompanyController@search', function() {
    return view('company.search');
})->middleware('auth')->name('company.search');

Route::post('/companies/search','CompanyController@search')->middleware('auth');

Route::get('/company/profile/{id}','CompanyController@show')->middleware('auth');

Auth::routes(['register' => false]);
