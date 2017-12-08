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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index')->name('/');

Route::get('signup', 'PagesController@signup')->name('signup');

Route::get('pricing_plan', 'PagesController@pricing')->name('pricing_plan');

Route::resource('/', 'ContactController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

	Route::get('subschools/create/{school_id?}', 'SubSchoolsController@create');
	Route::resource('schools','SchoolsController');
	Route::resource('subschools','SubSchoolsController');
	Route::resource('teachers','TeachersController');
	Route::resource('students','StudentsController');
	Route::resource('classes','ClassesController');
	Route::resource('roles','RolesController');
	Route::resource('users', 'UsersController');

});

