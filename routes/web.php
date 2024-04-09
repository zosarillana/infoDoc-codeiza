<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

// Dashboard Routes
require __DIR__ . '/web/login/login.php';

// Dashboard Routes
require __DIR__ . '/web/register/register.php';
