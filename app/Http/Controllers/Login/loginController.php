<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

class loginController extends Controller
{
    //
    public function index()
    {
        return view("login\index");
    }
}
