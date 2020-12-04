<?php

namespace App\Http\Controllers\Exchanger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{    
    public function list()
    {
        return view('exchanger.currencies.list');
    }
    
    public function request()
    {
        return view('exchanger.currencies.request');
    }

    public function rejected()
    {
        return view('exchanger.currencies.rejected');
    }
}
