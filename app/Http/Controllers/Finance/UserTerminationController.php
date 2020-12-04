<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTerminationController extends Controller
{
    public function review()
    {
        return view('finance.user_termination.review');
    }
    public function completed()
    {
        return view('finance.user_termination.completed');
    }
}
