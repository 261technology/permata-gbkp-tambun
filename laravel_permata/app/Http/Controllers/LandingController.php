<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Member;
use Session;
use Harisa;

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
        $marga      = Harisa::get_marga();
        return view('frontend.register',compact('marga'));
    }

}
