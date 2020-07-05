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
    return view('layouts.app1');
});

Route::resource('job','JobController');
Route::resource('assigned','AssignedController');
Route::get('new/{id}', ['as' => 'get.slug','uses' => 'AssignedController@index']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/job', 'JobController@index')->name('job');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});