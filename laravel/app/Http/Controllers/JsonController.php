<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Anggota;
use App\Helpers\Harisa;
use Session;
use DB;


class JsonController extends Controller
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
        echo "No Direct Access Allowed";die();
    }

    public function list_anggota(Request $request){
       $data =   DB::table('anggotas')
                    ->select('id','nama');

        if(!empty($request->Input('q'))){
            $data->whereRaw("UPPER(nama) like '%".strtoupper($request->Input('q'))."%'");
        }
        
        echo json_encode($data->get()); 
    }

    
}
