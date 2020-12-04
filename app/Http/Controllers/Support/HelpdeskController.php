<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpdeskController extends Controller
{
    public function helpdesk()
    {
        return view('support.helpdesk.helpdesk');
    }
}
