<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admins;

class adminscontroller extends Controller
{
    public function index()
    {
        $admin = admins::ALL();
        return view('admin.admin')->with('admins',$admin);
    }
    public function create()
    {
        return view('admin.create');
    }
}
