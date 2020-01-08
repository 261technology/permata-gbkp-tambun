<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Member;
use Session;

class LandingController extends Controller
{

    public function index()
    {
        return view('frontend.landing');
    }

    public function login()
    {
        return view('frontend.login');
    }


    public function register()
    {
        // Session::flash('result', 'active');
        // Session::flash('data','Harisa' );
        // Session::flash('email', 'harisaginting@gmail.com');
        // Session::flash('url', 'https://kitapermata.com');

        // $runggun = Config::where('type', 'runggun')->get();

        return view('frontend.register');
    }

}
