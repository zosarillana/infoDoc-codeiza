<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Dashboard'], function () {
    Route::get('dashboard', [adminController::class, 'index'])->name('admin.dashboard');
    Route::get('userTable', [adminController::class, 'userTable'])->name('admin.user_table');
    Route::get('profile', [adminController::class, 'profile'])->name('admin.profile');
});
