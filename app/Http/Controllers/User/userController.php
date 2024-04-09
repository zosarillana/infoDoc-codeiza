<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class userController extends Controller
{
    //
    public function index()
    {
        return view('user\dashboard');
    }
    public function upload()
    {
        return view('user\upload');
    }
    public function profile()
    {
        return view('user\profile');
    }
}
