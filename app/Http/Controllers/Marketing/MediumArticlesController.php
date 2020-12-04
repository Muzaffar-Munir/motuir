<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediumArticlesController extends Controller
{    
    public function articles()
    {
        return view('marketing.articles.articles');
    }    

}
