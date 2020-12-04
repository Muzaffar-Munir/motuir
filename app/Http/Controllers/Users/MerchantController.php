<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantController extends Controller
{    
    public function list()
    {
        return view('users.merchant.list');
    }
    public function qrcodes()
    {
        return view('users.merchant.qrcodes');
    }
    public function subscriptions()
    {
        return view('users.merchant.subscriptions');
    }
    public function limited()
    {
        return view('users.merchant.limited');
    }
    public function locked()
    {
        return view('users.merchant.locked');
    }
    public function terminated()
    {
        return view('users.merchant.terminated');
    }

}
