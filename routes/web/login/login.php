<?php

use App\Http\Controllers\Login\loginController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Register'], function () {
    Route::get('login', [loginController::class, 'index'])->name('login.index');
});
