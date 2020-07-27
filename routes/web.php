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
    return view('welcome');
});
// Route::get('/adminview', function () {
//     return view('admin.calendar');
// });
// Route::get('/userview', function () {
//     return view('user.calendar');
// });

Route::any('/events', 'EventsController@index');
Route::any('/store', 'EventsController@store');
 Route::any('/userstore', 'UserController@store');
 Route::any('/userindex', 'UserController@index');
// Route::any('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/userhome', 'HomeController@index')->name('home');
// Route::get('/uhome', 'HomeController@uindex')->name('home');
