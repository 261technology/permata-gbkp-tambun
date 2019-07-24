<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
use Harisa;
use Session;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model  = new Dashboard();
        $chartAnggota = $model->getChartAnggota();
        //echo json_encode($chartAnggota);
        return view('dashboard.index',compact('chartAnggota'));
    } 
}
