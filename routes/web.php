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

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/ministries/{id?}', function($id = 0){
    return view('ministries.ministries');
})->name('ministries');

Route::get('/about-{id}', function($id){
    return view('ministries.about-ministry');
})->name('ministry.show');

Route::get('event/{id}', function ($id) {
    return view('ministries.event-details');
})->name('event.show');

Route::get('gallery/{id}', function ($id) {
    return view('ministries.gallery');
})->name('gallery.show');

Route::get('videos/{id}', function ($id) {
    return view('ministries.videos');
})->name('video.show');

Route::get('video/{id}', function ($id) {
    return view('ministries.video');
})->name('video.view');

Route::get('members/{id}', function ($id) {
    return view('ministries.members');
})->name('members.show');

Route::get('library/{id}', function ($id) {
    return view('ministries.library');
})->name('library.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
