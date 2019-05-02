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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {

    // $first_time_login = false;
    // if (Auth::user()->first_time_login) {
    //     $first_time_login = true;
    //     Auth::user()->first_time_login = 1; // Flip the flag to true
    //     Auth::user()->save(); // By that you tell it to save the new flag value into the users table
    // }

    // return view('dashboard.overview', ['first_time_login' => $first_time_login]);
    return view('dashboard.overview');
})->name('dashboard.overview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');