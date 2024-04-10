<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index()
    {
        return view('admin\dashboard');
    }
    public function userTable()
    {
        return view('admin\user_table');
    }
    public function profile()
    {
        return view('admin\profile');
    }
}
