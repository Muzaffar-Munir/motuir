<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuspiciousActivityController extends Controller
{
    public function activity()
    {
        return view('support.suspicious_activity.activity');
    }
}
