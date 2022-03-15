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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'PagesController@index')->name('adib');
Route::get('/home', 'PagesController@index')->name('home');
Route::get('/createstore', 'PagesController@store')->name('store');
Route::get('/showcourse/{id}', 'PagesController@showcourse')->name('showcourses');
Route::get('/create', 'PagesController@create')->name('create');
Route::get('/contact', 'PagesController@contact')->name('contact');

//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {
      Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
});

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
      Route::get('dashboard', 'UserController@index')->name('user.dashboard');
      Route::get('/showallcourses', 'UserController@show')->name('usershow');
      Route::get('/deletecourses/{id}', 'UserController@delete')->name('delete');
      Route::get('/addfiles', 'UserController@addfiles')->name('addfiles');
      Route::post('/storefiles', 'UserController@storefiles')->name('storefiles');
      Route::get('/create', 'UserController@create')->name('admincreate');


});