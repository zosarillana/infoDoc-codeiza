<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.dashboard');
});

// Login Routes
require __DIR__ . '/web/login/login.php';

// Register Routes
require __DIR__ . '/web/register/register.php';

// User Routes
require __DIR__ . '/web/user/user.php';
