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

Route::view('/chickens','chickens');

Route::view('.../rice', 'rice');

Route::view('/noodles', 'noodles');

Route::view('/sidedishes', 'sidedishes');

Route::view('/desserts', 'desserts');

Route::view('/beverages', 'beverages');

Route::view('/bookatable','bookatable');

Route::post('/bookatable','BookingController@storeForm');

Route::view('/homepage','homepage');

/////////////////
// ADMIN
//
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

  Route::get('/',function(){
    return redirect('/admin/dashboard');
  });

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/home', 'HomeController@index')->name('dashboard');

  Route::get('/masterdetail', 'AdminController@masterdetail');

  Route::view('/react', 'admin.react');

  Route::view('/react', 'admin.react');

  Route::resource('tasks','AdminTasksController',['as'=>'admin']);


});
