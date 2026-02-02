<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('appointment', [FrontendController::class, 'appointment'])->name('appointment');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact', [FrontendController::class, 'contactStore'])->name('contact.store');
Route::get('departments', [FrontendController::class, 'departments'])->name('departments');
Route::get('doctor-profile/{doctor}', [FrontendController::class, 'doctorProfile'])->name('doctor-profile');
Route::get('doctors', [FrontendController::class, 'doctors'])->name('doctors');
