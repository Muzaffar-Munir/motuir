<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{ 
    public function admin()
    {
        return view('users.admin.admin');
    }

    public function privilege()
    {
        return view('users.admin.privilege');
    }
    
}
