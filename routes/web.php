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

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index')->name('index');

Route::get('/employee/{id}/edit', 'MainController@employeeEdit')->name('employee.edit');
Route::post('/employee/{id}/edit', 'MainController@employeeUpdate')->name('employee.update');

Route::get('/employee/create', 'MainController@employeeCreate')->name('employee.create');
Route::post('/employee/create', 'MainController@employeeStore')->name('employee.store');

Route::get('/employee/{ide}/task/{idt}/remove', 'MainController@taskRemove')->name('task.remove');

Route::get('/employee/{id}/delete', 'MainController@employeeDelete')->name('employee.delete');