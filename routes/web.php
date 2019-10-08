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

Route::get('/', "GuestController@index");
Route::get("/register","GuestController@register");
Route::get("/login","GuestController@login");
Route::post("/proses-register","GuestController@do_register");
