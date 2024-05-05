<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [DashboardController::class, 'viewDashboardNew'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/admin.php';
