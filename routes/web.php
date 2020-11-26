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



// new route for crud practice

Route::get('/crud-app', 'crudController@showform' ) ;

// new route for crud all data show

 Route::get('/all', 'crudController@showdatapage');

// data collect from form 
Route::post('/crud-data', 'crudController@addCrudData');

// single data show route 
Route::get('single/{id}', 'crudController@singleDataView')->name('single.data.show');

// delete data from database 
Route::get('deleted/{id}', 'crudController@dataRemove')->name('single.data.remove');

// data edit from to db route
Route::get('edit/{id}', 'crudController@DataEdit')->name('single.data.edit') ;

// data update
Route::post('update/{id}', 'crudController@dataUpdate')->name('single.data.update');

// resource controller

Route::resource('student', 'StudentController');

Route::resource('catagory', 'CatagoryController');

Route::resource('post', 'PostController');

Route::resource('teacher', 'TeacherController');

Route::resource('course', 'CourseController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
