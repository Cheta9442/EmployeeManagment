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
    if(\Illuminate\Support\Facades\Auth::check())
        return redirect('/home');
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('users/dashboard', 'HomeController@usersDashboard')->name('users.home');

Route::resource('employees','EmployeeController');
Auth::routes();


