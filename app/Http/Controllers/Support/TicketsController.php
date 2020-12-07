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
        // $api_action=env('API_URL').'tickets';


       $tickets= json_decode(file_get_contents('http://localhost:9090/api/tickets'));
//         $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://localhost:9090/api/tickets",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => array(
//     "Cache-Control: no-cache",
//   ),
// ));

//      $tickets = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);
        
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
