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
    return view('index');
});

Route::get('/ministries', function(){
    return view('ministries');
})->name('ministries.show');


Route::resource('leader', 'LeaderController');
Route::get('list', 'LeaderController@list')->name('list');
Route::resource('year', 'YearController');
Route::resource('position', 'PositionController');
Route::get('trashed-leader', 'LeaderController@trashed')->name('trashed-leader.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
