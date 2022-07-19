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

//--------Laravel 効果測定3---------------------
Route::get('kouka3', 'Kouka3Controller@index');
Route::get('kouka3/show', 'Kouka3Controller@show');
Route::get('kouka3/add', 'Kouka3Controller@add');
Route::post('kouka3/create', 'Kouka3Controller@create');
Route::get('kouka3/edit', 'Kouka3Controller@edit');
Route::post('kouka3/update', 'Kouka3Controller@update');
Route::get('kouka3/del', 'Kouka3Controller@del');
Route::post('kouka3/remove', 'Kouka3Controller@remove');



