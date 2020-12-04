<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SegragateController extends Controller
{
    public function history()
    {
        return view('finance.segragated.history');
    }

    public function list()
    {
        return view('finance.segragated.list');
    }
}
