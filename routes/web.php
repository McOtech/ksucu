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

Auth::routes();

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

//Administrator routes
Route::get('/admin', function (){
    return view('admin.dashboard');
})->name('dashboard-admin');


/* ADMINISTRATOR ROUTES */

//displays cohorts index page
Route::get('/cohort/{cohort}/show', 'CohortController@show')->name('cohort.show');

//Creates new ministry
Route::post('/cohort', 'CohortController@store')->name('cohort.store');

//Updates ministry
Route::patch('/cohort/{cohort}', 'CohortController@update')->name('cohort.update');

//Deletes ministry
Route::delete('/cohort/{cohort}/delete', 'CohortController@delete')->name('cohort.delete');

//show create new ministry page
Route::get('/ministry/create', 'CohortController@createMinistry')->name('ministry.create');

//show create new committee page
Route::get('/committee/create', 'CohortController@createCommittee')->name('committee.create');

//show create new board page
Route::get('/board/create', 'CohortController@createBoard')->name('board.create');

//avails create new leader page
Route::get('/leaders/create', 'MembershipController@create')->name('leader.create');

//createS new leader
Route::post('/leaders', 'MembershipController@store')->name('leader.store');

//shows leader profile
Route::get('/leaders/{user}/show', 'MembershipController@show')->name('leader.show');

//updates leader profile
Route::patch('/leaders/{leader}', 'MembershipController@update')->name('leader.update');

//delete leader profile
Route::delete('/leaders/{leader}/delete', 'MembershipController@delete')->name('leader.delete');

// Route::get('/register', function (){
//     return view('auth.register');
// })->name('register.show');

// Route::get('/login', function (){
//     return view('auth.login');
// })->name('login.show');

//shows past events
Route::get('/past-events/{cohort}/edit', 'EventsController@show')->name('event.edit');

//shows scheduled events
Route::get('/events/{cohort}/create', 'EventsController@create')->name('event.create');

//stores new events
Route::post('/events/{cohort}', 'EventsController@store')->name('event.store');

Route::get('/admin/{category}/{id}/past-event/{eventId}/video', function ($category, $id, $eventId){
    return view('admin.videos');
})->name('videos.edit');

Route::get('/admin/{category}/{id}/past-event/{eventId}/gallery', function ($category, $id, $eventId){
    return view('admin.gallery');
})->name('gallery.edit');

Route::get('/admin/{category}/{id}/profile', function ($category, $id){
    return view('admin.group-profile');
})->name('group-profile.edit');

//user

Route::get('/user-dashboard', function(){
 return view('admin.userDashboard');
})->name('user-dashboard.show');

/*user settings */

//user details
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile/details', 'ProfileController@storeDetails')->name('details.store');
Route::patch('/profile/details/{profile}', 'ProfileController@updateDetails')->name('details.update');

//user contacts
Route::post('/profile/contacts', 'ProfileController@storeContacts')->name('contacts.store');
Route::patch('/profile/contacts/{user}', 'ProfileController@updateContacts')->name('contacts.update');

//user image
Route::post('/profile/image', 'ProfileController@storeImage')->name('image.store');
Route::patch('/profile/image/{user}', 'ProfileController@updateImage')->name('image.update');

Route::get('/user/profile', function (){
    return view('admin.user-profile');
})->name('user-profile.show');

Route::get('/admin/{category}/{id}/membership', function ($category, $id){
    return view('admin.members.member-dashboard');
})->name('member-dashboard');

Route::get('/admin/{category}/{id}/active-members', function ($category, $id){
    return view('admin.members.members');
})->name('active-members.show');

Route::get('/admin/{category}/{id}/membership-requests', function ($category, $id){
    return view('admin.members.requests');
})->name('requests.show');

Route::get('/admin/{category}/{id}/alumni', function ($category, $id){
    return view('admin.members.alumni');
})->name('alumni.show');

Route::get('/home', 'HomeController@index')->name('home');
