<?php

use App\Http\Controllers\Register\registerController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Register'], function () {
    Route::get('register', [registerController::class, 'index'])->name('register.index');
});
