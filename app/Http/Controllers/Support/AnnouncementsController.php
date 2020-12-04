<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function list()
    {
        return view('support.announcement.list');
    }
    public function new()
    {
        return view('support.announcement.new');
    }
}
