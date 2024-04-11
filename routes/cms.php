<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\EnquiryController;
use App\Http\Controllers\cms\DashboardController;


Route::get('/dashboard',                    [DashboardController::class,'dashboard'])->name('dashboard');
// Enquiry Routes
Route::get('/enquiry/view',                 [EnquiryController::class,'index'])->name('enquiryList');
