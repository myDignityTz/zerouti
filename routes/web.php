<?php

Auth::routes();

Route::view('/', "welcome");
Route::view("about", "about")->name("about");

Route::get('/home', 'HomeController@index')->name('home');