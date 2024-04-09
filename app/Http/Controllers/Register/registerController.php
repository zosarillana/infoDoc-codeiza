<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;

class registerController extends Controller
{
    public function index()
    {
        return view("register\index");
    }
}
