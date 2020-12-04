<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersInboxController extends Controller
{
    public function inbox()
    {
        return view('support.users_inbox.inbox');
    }

    public function read()
    {
        return view('support.users_inbox.read');
    }
}
