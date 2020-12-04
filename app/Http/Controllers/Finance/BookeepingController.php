<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookeepingController extends Controller
{
    public function sheet()
    {
        return view('finance.bookeeping.sheet');
    }
    public function history()
    {
        return view('finance.bookeeping.history');
    }
}
