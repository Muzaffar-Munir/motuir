<?php

namespace App\Http\Controllers\Exchanger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmoneyController extends Controller
{
    public function all(){
        return view('exchanger.emoney.list');
    }

    public function request()
    {
        return view('exchanger.emoney.request');
    }

    public function rejected()
    {
        return view('exchanger.emoney.rejected');
    }
}
