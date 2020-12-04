<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{    
    public function list()
    {
        return view('users.user.list');
    }
    public function details()
    {
        return view('users.user.details');
    }
    public function kyc()
    {
        return view('users.user.kyc');
    }
    public function rejected()
    {
        return view('users.user.rejected');
    }
}
