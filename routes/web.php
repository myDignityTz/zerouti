<?php

Route::get("/", "WelcomeController");
Route::get("about", "AboutController")->name("about");
Route::get('home', 'HomeController@index')->name('home');
Route::get('symptoms', 'SymptomController')->name('symptoms');
Route::get('preventions', 'PreventionController')->name('preventions');
Route::get('treatments', 'TreatmentController')->name('treatments');
