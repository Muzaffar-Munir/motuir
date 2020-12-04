<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DailyMailController extends Controller
{    
    public function mail()
    {
        return view('marketing.mail.mail');
    }    

}
