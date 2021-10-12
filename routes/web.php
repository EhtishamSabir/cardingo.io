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

//** Main Routes**/
// Route::get('/', function () {
//     return view('index');
// });
Route::post('/register','MainController@register');
Route::get('/signup','MainController@signup');
Route::get('/signin','MainController@login');
Route::post('login','MainController@check_login');
Route::get('dashboard','MainController@dashboard')->name('dashboard');
Route::get('logout','MainController@logout');
Route::get('/','MainController@main');
Route::post('/upload_image','MainController@upload_image');
Route::get('/all-images','MainController@all_images');
Route::get('/do_filter','MainController@do_filter');
Route::get('/view/{id}','MainController@view');
Route::get('/buy/{id}/{amount}','MainController@buy');
Route::post('/sold','MainController@sold');
Route::get('/delete/{id}/','MainController@delete');
Route::get('/payments','MainController@payments');
Route::get('/confirm/{id}/{image_id}','MainController@confirm');
Route::get('/profile','MainController@profile');
Route::get('/logout','MainController@logout');
Route::get('/privacy','MainController@privacy');
Route::get('/hoskeychains','MainController@hoskeychains');
/********/
Route::post('check_id','MainController@check_id');
Route::post('check_name','MainController@check_name');