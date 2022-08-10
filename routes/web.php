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

//landing page
Route::get('/', 'UmumController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

//Login dan logout
Auth::routes();
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');

Route::get('/admin/ubah-password', 'AdminController@ubah_password')->name('ubah-password');
Route::post('/admin/updatePw/{id}', 'AdminController@updatePw')->name('updatePw');

//Kelola Profil
Route::get('/admin/profil', 'AdminController@profil')->name('profil');
Route::get('/admin/profil/edit/', 'AdminController@edit_profil')->name('edit-profil');
Route::post('/admin/profil/update/{id}', 'AdminController@update_profil')->name('update-profil');


//predict
Route::post('/predict', 'UmumController@predict');

//isu
Route::get('/issues','IsuController@index');

//report
Route::get('/report','LaporanController@index');
Route::post('/laporan', 'LaporanController@store');

//data laporan
Route::get('/admin/data-laporan','DataLaporanController@index');
