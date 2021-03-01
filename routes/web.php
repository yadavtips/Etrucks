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
    return view('auth.login');
});
Route::resource('lead','LeadController');
Route::resource('job','JobController');
Route::resource('account','AccountController');
Route::resource('status','StatusController');
Route::resource('sales','SalesController');
Route::resource('/leads-assigned-to-you','AssignedController');
Route::get('new/{id}', ['as' => 'get.slug','uses' => 'AssignedController@index']);
Auth::routes();
Route::resource('leads-you-posted','EditController');

Route::get('/post-new-lead', 'HomeController@index')->name('home');
/* Route::get('/job', 'JobController@index')->name('job'); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'JobController@index')->name('job');
Route::get('/lead-assigned-to-you', 'AssignedController@index')->name('assigned');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});