<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        if (Session::get('lang')) {
            App::setLocale(Session::get('lang'));
        }
        if (view()->exists('backup.template_ui_blades.'.$request->path())) {
            return view('backup.template_ui_blades.'.$request->path());
        }
        return view('backup.template_ui_blades.pages-404');
    }

    public function root()
    {
        if (Session::get('lang')) {
            App::setLocale(Session::get('lang'));
        }
        return view('backup.template_ui_blades.index');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }
}
