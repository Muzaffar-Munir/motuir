<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class NotificationsController extends Controller
{
    public function notifications()
    {
        return view('notifications');
    }
}
