<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Dashboard Routes
require __DIR__ . '/web/login/login.php';
