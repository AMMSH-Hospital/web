<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('about', 'about')->name('about');
Route::view('appointment', 'appointment')->name('appointment');
Route::view('contact', 'contact')->name('contact');
Route::view('departments', 'departments')->name('departments');
Route::view('doctor-profile', 'doctor-profile')->name('doctor-profile');
Route::view('doctors', 'doctors')->name('doctors');
