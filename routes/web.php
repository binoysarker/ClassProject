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

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@getHome');
Route::get('/login','PagesController@getLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * StudentProfileController and StudentResultController section
 */
Route::resource('/StudentProfile','StudentProfileController');
Route::resource('/StudentResult','StudentResultController');
/*
 *EducationInformationController section
 */
Route::resource('/EducationInformation','EducationInformationController');