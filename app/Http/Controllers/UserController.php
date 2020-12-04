<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
}
