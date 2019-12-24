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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {

Route::resource('companies','CompaniesController');
Route::resource('projects/create/{company_id?}','ProjectsController@create');
Route::resource('projects','ProjectsController');
Route::resource('tasks','TasksController');
Route::resource('roles','rolesController');
Route::resource('users','usersController');
    
});

