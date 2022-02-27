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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'Bookcontroller@create')->name('create');
Route::post('create', 'Bookcontroller@showForm')->name('createForm');
Route::get('/view', 'Bookcontroller@Viewall')->name('Viewall');
Route::get('update/{id}','Bookcontroller@UpdateForm')->name('updateForm');
Route::patch('/update/{id}','Bookcontroller@UpdateForm')->name('UpdateForm');
Route::patch('/update/{id}','Bookcontroller@ShowUpdateForm')->name('FormUpdate');
Route::delete('/delete/{id}','Bookcontroller@DeleteBuku')->name('DeleteBuku');
