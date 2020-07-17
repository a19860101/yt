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
Route::resource('/post','PostController');
Route::resource('/product','ProductController');




Route::prefix('trash')->group(function(){
    Route::get('/','TrashController@index')->name('trash.index');
    Route::get('/restore/{id}','TrashController@restore')->name('trash.restore');
    Route::delete('/delete','TrashController@delete')->name('trash.delete');
});