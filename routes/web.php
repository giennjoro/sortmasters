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

//client side page routes.
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/properties','PagesController@properties');
Route::get('/events','PagesController@events');
Route::get('/show_property/{slug}','PagesController@show')->name('show_property');//for viewing purpose only.This route should be removed.


//admin routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administrator', 'HomeController@index')->name('admin.login');
Auth::routes();

Route::group(['prefix' => 'administrator', 'middleware' => ['auth',]], function(){
    Route::get('/home', 'HomeController@index')->name('dashboard');
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('/users', 'UsersController');
    Route::post('/users/edit/{slug}', 'UsersController@update')->name('admin.update');
    Route::resource('/subscribers','SubscribersController');
    Route::resource('/properties','PropertiesController');
    Route::get('/properties/{property}/{image}/make-cover-photo','PropertiesController@cover_photo')->name('cover_photo');
    Route::get('/properties/{property}/{image}/delete-photo','PropertiesController@delete_photo')->name('delete_photo');
    Route::resource('/categories','CategoriesController');
    Route::resource('/events','EventsController');
    Route::get('/upcoming_events','EventsController@upcoming_events')->name('upcoming_events');
    Route::resource('/agents','AgentController');
});







