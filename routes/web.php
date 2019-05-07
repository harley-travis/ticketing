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
// });

Route::get('/', function () {
	
	if( auth()->check() == null ) {
		return redirect('/login');
	} else {
		return view('dashboard.dashboard');
	}
    
});

Route::get('dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard.dashboard');

Route::group(['prefix' => 'tickets'], function() {
	$c = 'TicketController';

	Route::get('', [
		'uses'	=> "$c@index",
		'as'	=> 'tickets.overview'
    ]);
    
    Route::get('view/{id}', [
		'uses'	=> "$c@show",
		'as'	=> 'tickets.view'
	]);

});

Route::group(['prefix' => 'submit'], function() {
	$c = 'TicketController';

	Route::get('company/{id}', [
		'uses'	=> "$c@submitIndex",
		'as'	=> 'submission.submit'
    ]);
    
    Route::post('company/submit/success', [
		'uses'	=> "$c@create",
		'as'	=> 'submit.ticket'
	]);

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');