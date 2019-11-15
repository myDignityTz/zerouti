<?php

Auth::routes();

Route::view('/', "welcome");
Route::view("about", "about")->name("about");

Route::get('home', 'HomeController@index')->name('home');
Route::get('symptoms', 'SymptomController')->name('symptoms');
Route::get('preventions', 'PreventionController')->name('preventions');
