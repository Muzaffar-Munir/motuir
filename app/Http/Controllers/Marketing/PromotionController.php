<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionController extends Controller
{    
    public function promotion()
    {
        return view('marketing.promotion.promotion');
    }    

}
