<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// For authentication
// -- register / login
Auth::routes();

Route::get('/', function () {
    return view('homepage');
});

Route::view('/show_react','show_react');

Route::view('/aboutus','aboutus');

Route::view('/contactus','contactus');

Route::post('/contactus','ContactController@storeForm');

Route::get('/menu',function(){
  return redirect('/menu/chickens');
});

Route::view('/menu/chickens','chickens');

Route::view('/menu/rice', 'rice');

Route::view('/menu/noodles', 'noodles');

Route::view('/menu/sidedishes', 'sidedishes');

Route::view('/menu/desserts', 'desserts');

Route::view('/menu/beverages', 'beverages');

Route::get('/bookatable','BookingController@index');

Route::post('/bookatable','BookingController@storeForm');

Route::view('/homepage','homepage');


/////////////////
// ADMIN
//
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

  Route::get('/',function(){
    return redirect('/admin/dashboard');
  });

  Route::resource('/menus', 'AdminMenuController');

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/home', 'HomeController@index')->name('dashboard');

  Route::get('/masterdetail', 'AdminController@masterdetail');

  Route::view('/react', 'admin.react');

  Route::view('/react', 'admin.react');

  Route::resource('tasks','AdminTasksController',['as'=>'admin']);


});
