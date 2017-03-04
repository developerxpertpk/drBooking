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

// Route::get('/', function () {
//     return view('welcome');
//   });

Route::get('/', function () {
    return view('homenew');
});
Route::post('/', 'HomenewController@index')->name('home1.home1');
// Route::get('/','AdminController@index')->name('admin.dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function(){
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');
  // Route::post('/', 'AdminController@index')->name('home1.home1');
  Route::get('/add-admin', 'AdminController@add')->name('admin.add');
  Route::post('/add-admin', 'AdminController@insert')->name('admin.add.submit');
    Route::delete('/add-admin/{id}', 'AdminController@destroy')->name('admin.destroy');
    Route::get('/add-admin/{id}', 'AdminController@show')->name('admin.show');
      Route::get('/add-admin/{id}/edit', 'AdminController@edit')->name('admin.edit');
});

  Route::get('/medical-center', 'Auth\MedicalCenterRegisterController@showMedicalRegistrationForm')->name('medical.center.regester');
  Route::post('/medical-center', 'Auth\MedicalCenterRegisterController@register')->name('medical.center.regester.submit');

  Route::get('/patient', 'Auth\MedicalCenterRegisterController@showPatientRegistrationForm')->name('patient.regester');
  Route::post('/patient', 'Auth\MedicalCenterRegisterController@register')->name('patient.regester.submit');

Route::any ( '/search', function () {
    $q = Input::get ( 'search' );
    $user = Admin::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'homenew' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'homenew' )->withMessage ( 'No Details found. Try to search again !' );
} );
