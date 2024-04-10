<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

// Login Routes
require __DIR__ . '/web/login/login.php';

// Register Routes
require __DIR__ . '/web/register/register.php';

// User Routes
require __DIR__ . '/web/user/user.php';

// Admin Routes
require __DIR__ . '/web/admin/admin.php';
