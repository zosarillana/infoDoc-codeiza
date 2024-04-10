<?php

use App\Http\Controllers\user\userController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Dashboard'], function () {
    Route::get('user/dashboard', [userController::class, 'index'])->name('user.dashboard');
    Route::get('upload', [userController::class, 'upload'])->name('user.upload');
    Route::get('user/profile', [userController::class, 'profile'])->name('user.profile');
});
