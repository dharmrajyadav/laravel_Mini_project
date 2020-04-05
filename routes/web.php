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


//Route::get('/userlist', function () {
  //  return view('/userlist/userlist');
//});

Route::get('/userlist','UserDetails@index');


Route::get('/create','UserDetails@create')->name('abc.create');

Route::post('/create','UserDetails@store')->name('abc.store');

//Route::get('/delete','UserDetails@delete')->name('userdata.delete');
Route::get('/delete/{id}/userlist','UserDetails@delete')->name('userdata.delete');
Route::get('/create','UserDetails@store');



Route::post('/create','EmployeeController@store')->name('employees.store');










 