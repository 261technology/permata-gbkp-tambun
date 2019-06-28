<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Keuangan;
use App\Helpers\Harisa;
use Session;
use Excel;
use File;


class keuanganController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {   
        $sektor     = Harisa::get_sektor();
        return view('keuangan',compact('sektor'));
    }

    function upload_kas(){
        return view('keuangan.upload_kas');
    }

    public function datatable_pemasukan_kas(Request $request){
        $model  = new Keuangan();
        $length         = $request->input('length');
        $start          = $request->input('start');
        $searchValue    = trim(strtoupper($_POST['search']['value']));
        $orderColumn    = $_POST['order']['0']['column'];
        $orderDir       = $_POST['order']['0']['dir'];
        $order          = $request->input('order');
        
        $status = Input::get('status');

        $output         = $model->get_datatable_pemasukan_kas($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }
}
