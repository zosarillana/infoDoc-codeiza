<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Dashboard'], function () {
    Route::get('admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/user/table', [adminController::class, 'userTable'])->name('admin.user_table');
    Route::get('admin/profile', [adminController::class, 'profile'])->name('admin.profile');
});
