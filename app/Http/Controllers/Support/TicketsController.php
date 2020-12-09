<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function read()
    {
        return view('support.tickets.read');
    }

    public function all()
    {
        $title = "All";
        $api_action=env('API_URL').'tickets';
       $tickets= (json_decode(file_get_contents('http://localhost:9090/api/tickets')))->data;
        return view('support.tickets.list', compact('title'),compact('tickets'));
    }

    public function unread()
    {
        $title = "Unread";
        return view('support.tickets.list', compact('title'));
    }

    public function replied()
    {
        $title = "Replied";
        return view('support.tickets.list', compact('title'));
    }

    public function starred()
    {
        $title = "Starred";
        return view('support.tickets.list', compact('title'));
    }

    public function escalated()
    {
        $title = "Escalated";
        return view('support.tickets.list', compact('title'));
    }

    public function closed()
    {
        $title = "Closed";
        return view('support.tickets.list', compact('title'));
    }
}
