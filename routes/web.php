<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\FrontOfficeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin')->middleware('superadmin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/frontoffice', [FrontOfficeController::class, 'index'])->name('frontoffice')->middleware('frontoffice');
Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice')->middleware('backoffice');
Route::get('/sales', [SalesController::class, 'index'])->name('sales')->middleware('sales');
Route::get('/instructor', [InstructorController::class], 'index')->name('instructor')->middleware('instructor');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
