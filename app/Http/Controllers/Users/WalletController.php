<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{    
    public function balances()
    {
        return view('users.wallet.balances');
    }
    
    public function cryptoswab()
    {
        return view('users.wallet.cryptoswab');
    }
    
    public function transactions()
    {
        return view('users.wallet.transactions');
    }
    

}
