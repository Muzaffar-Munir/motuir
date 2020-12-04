<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{    
    public function notice()
    {
        return view('system.notice');
    }

    public function meetings()
    {
        return view('system.meetings');
    }

    public function plan()
    {
        return view('system.plan');
    }

}
