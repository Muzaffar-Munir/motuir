<?php

namespace App\Http\Controllers\Exchanger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArbitrationController extends Controller
{
    public function list()
    {
        return view('exchanger.arbitration.list');
    }
    
    public function history()
    {
        return view('exchanger.arbitration.history');
    }

    public function view()
    {
        return view('exchanger.arbitration.view');
    }
}
