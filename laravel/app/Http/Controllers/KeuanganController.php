<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Imports\KasImport;
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

    public function pemasukan()
    {   
        $model      = new Keuangan();
        $sektor     = Harisa::get_sektor();
        
        $param_iuran = $model->get_iuran_kas();
        //echo json_encode($param_iuran);die;
        return view('keuangan.pemasukan',compact('sektor','param_iuran'));
    }

    function upload_kas(){
        return view('keuangan.upload_kas');
    }

    public function datatable_iuran_kas(Request $request){
        $model  = new Keuangan();
        $length         = $request->input('length');
        $start          = $request->input('start');
        $searchValue    = trim(strtoupper($_POST['search']['value']));
        $orderColumn    = $_POST['order']['0']['column'];
        $orderDir       = $_POST['order']['0']['dir'];
        $order          = $request->input('order');
        
        $iuran_pekerja = Input::get('iuran_pekerja');
        $iuran_pelajar = Input::get('iuran_pelajar');

        $output         = $model->get_datatable_iuran_kas($length, $start, $searchValue, $orderColumn, $orderDir, $order,$iuran_pekerja,$iuran_pelajar);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }

    function upload_kas_process(Request $request){
         //VALIDASI
        // $this->validate($request, [
        //     'data_anggota' => 'required|mimes:xls,xlsx'
        // ]);

        if ($request->hasFile('data_kas')) {
            $file = $request->file('data_kas'); //GET FILE
            Excel::import(new KasImport, $file); //IMPORT FILE 
            Session::flash('notif', 'Your data has been updated');
            return redirect()->back();
        } 
        Session::flash('notif', 'ERROR!!!!!!');
        return redirect()->back();
    }
}
