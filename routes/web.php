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

//welcome laravel route
Route::get('/welcome', function () {
    return view('welcome');
});

//pages routes
Route::get('/apply/{job}', 'ApplicationsController@apply')->middleware('applicant');
Route::get('/', 'PagesController@index');
Route::get('/jobs','PagesController@jobs');
Route::get('/about','PagesController@about');
Route::get('/application','PagesController@application');
Route::get('/profile','PagesController@profile');
Route::get('/contact','PagesController@contact');
Route::post('/client_application/save','ApplicationsController@store')->name('store_application');
Route::post('/subscribe', 'SubscribersController@subscribe')->name('subscribe');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show/{job}', 'JobsController@client_show');
Route::get('/search/jobs', 'JobsController@search_jobs');


Route::resource('/applications', 'ApplicationsController');
Auth::routes(['verify' => true]);

Route::group(['prefix' => 'administrator', 'middleware' => ['auth',]], function(){
    Route::get('/home', 'HomeController@index')->name('dashboard');
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('/users', 'UsersController');
    // Route::get('/admin/add_admin/create', 'UsersController@add_admin')->name('add_admin');
    Route::post('/users/add_admin/store', 'UsersController@admin_store')->name('admin.store');
    Route::post('/users/edit/{slug}', 'UsersController@update')->name('admin.update');
    Route::resource('/subscribers','SubscribersController');
    Route::resource('/applications','ApplicationsController');
    Route::resource('/jobs','JobsController');
    Route::resource('/properties','PropertiesController');
});
Route::get('/administrator', 'HomeController@index')->name('admin.login');
//subscriber store
Route::post('/subscribe', 'PagesController@subscriber_store');

//contact Us
Route::post('/contact-us', 'ContactController@store');











