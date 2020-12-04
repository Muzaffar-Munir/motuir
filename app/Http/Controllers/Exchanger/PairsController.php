<?php

namespace App\Http\Controllers\Exchanger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PairsController extends Controller
{    
    public function pairs()
    {
        return view('exchanger.pairs.pairs');
    }
    
    public function postponed()
    {
        return view('exchanger.postponed_exchange.postponed');
    }
    public function block()
    {
        return view('exchanger.block.list');
    }
}
