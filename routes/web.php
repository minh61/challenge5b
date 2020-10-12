<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::redirect('/', 'login');

Route::get('login', function () {
	return view('login');
})->name('login');

Route::post('getLogin', 'App\Http\Controllers\UserController@getLogin')->name('getLogin');

Route::get('add_user' , 'App\Http\Controllers\UserController@addUser')->name('add_user');

Route::post('post-user' , 'App\Http\Controllers\UserController@themuser')->name('post-user');

Route::get('logout','App\Http\Controllers\UserController@logout')->name('logout');

Route::get('home_page' , function() {
	if(session()-> has('id')) {
		return view('home_page');
	}
	return view('login');
})->name('home_page');

Route::get('list_of_users' , 'App\Http\Controllers\UserController@list')->name('list_of_users');

Route::get('detail/{id}', 'App\Http\Controllers\UserController@detail');

Route::get('deleteById/{id}', 'App\Http\Controllers\UserController@deleteById');

Route::get('edit/{id}', 'App\Http\Controllers\UserController@edit');

Route::post('update/{id}', 'App\Http\Controllers\UserController@update')->name('update');

Route::get('profile/{id}' , 'App\Http\Controllers\UserController@profile');

Route::get('message' , 'App\Http\Controllers\UserController@message')->name('message');

Route::get('deleteMess/{id}', 'App\Http\Controllers\UserController@deleteMess');

Route::post('send/{idSend}/{idReceive}' , 'App\Http\Controllers\UserController@send')->name('send');

Route::get('exercise' , 'App\Http\Controllers\UserController@exercise')->name('exercise');

Route::post('uploadHomeWork', 'App\Http\Controllers\UserController@uploadHomeWork')->name('uploadHomeWork');

Route::get('download2/{file}', 'App\Http\Controllers\UserController@download2')->name('download2');

Route::get('delete2/{name}', 'App\Http\Controllers\UserController@deleteFile2'); 

Route::post('submit/{id}', 'App\Http\Controllers\UserController@submit'); 

Route::get('delete3/{name}', 'App\Http\Controllers\UserController@deleteFile3');

Route::get('download22/{file}', 'App\Http\Controllers\UserController@download22');

Route::get('game' , 'App\Http\Controllers\UserController@challenge')->name('game');

Route::get('deleteChallenge/{id}', 'App\Http\Controllers\UserController@deleteChallenge')->name('deleteChallenge');

Route::post('create', 'App\Http\Controllers\UserController@create')->name('create');

Route::post('submitChallenge/{id}', 'App\Http\Controllers\UserController@submitChallenge')->name('submitChallenge');