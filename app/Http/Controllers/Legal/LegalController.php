<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalController extends Controller
{    
    public function cases()
    {
        return view('legal.cases');
    }
    public function history()
    {
        return view('legal.history');
    }
    

}
