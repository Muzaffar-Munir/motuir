<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashStationController extends Controller
{    
    public function list()
    {
        return view('users.cash_station.list');
    }

    public function reported()
    {
        return view('users.cash_station.reported');
    }
    
    public function suspended()
    {
        return view('users.cash_station.suspended');
    }
}
