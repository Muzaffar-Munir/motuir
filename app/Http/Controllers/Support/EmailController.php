<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email()
    {   
        $title = "Inbox";
        return view('support.email.email', compact('title'));
    }

    public function starred()
    {
        $title = "Starred";
        return view('support.email.email', compact('title'));
    }

    public function important()
    {
        $title = "Important";
        return view('support.email.email', compact('title'));
    }

    public function draft()
    {
        $title = "Draft";
        return view('support.email.email', compact('title'));
    }

    public function sent()
    {
        $title = "Sent";
        return view('support.email.email', compact('title'));
    }

    public function archived()
    {
        $title = "Archived";
        return view('support.email.email', compact('title'));
    }

    public function folder()
    {
        $title = "Folder";
        return view('support.email.email', compact('title'));
    }

    public function read()
    {
        return view('support.email.read');
    }

}
