<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Imports\AnggotaImport;
use App\Anggota;
use App\Helpers\Harisa;
use Session;
use Excel;
use File;


class AnggotaController extends Controller
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
        $pekerjaan  = Harisa::get_pekerjaan();
        $sektor     = Harisa::get_sektor();
        $marga      = Harisa::get_marga();
        return view('anggota.list',compact('sektor','marga','pekerjaan'));
    }

    function upload_anggota(){
        return view('anggota.upload');
    }

    function detail($id){
        $model  = new Anggota();
        $data   = $model->get_anggota($id);
        $data = (array)$data;

        $pekerjaan  = Harisa::get_pekerjaan();
        $sektor     = Harisa::get_sektor();
        $marga      = Harisa::get_marga();
        $pendidikan = Harisa::get_pendidikan();
        return view('anggota.detail',compact('pendidikan','data','sektor','marga','pekerjaan'));
    }

    function profile($id){
        $model  = new Anggota();
        $data   = $model->get_anggota($id);
        return view('anggota.profile',compact('data'));
    }

    function upload_anggota_process(Request $request){
         //VALIDASI
        // $this->validate($request, [
        //     'data_anggota' => 'required|mimes:xls,xlsx'
        // ]);

        if ($request->hasFile('data_anggota')) {
            $file = $request->file('data_anggota'); //GET FILE
            Excel::import(new AnggotaImport, $file); //IMPORT FILE 
            Session::flash('notif', 'Your data has been updated');
            return redirect()->back();
        } 
        Session::flash('notif', 'ERROR!!!!!!');
        return redirect()->back();
    }

    public function datatable_anggota(Request $request){
        $model  = new Anggota();
        $length         = $request->input('length');
        $start          = $request->input('start');
        $searchValue    = trim(strtoupper($_POST['search']['value']));
        $orderColumn    = $_POST['order']['0']['column'];
        $orderDir       = $_POST['order']['0']['dir'];
        $order          = $request->input('order');
        
        $status = Input::get('status');

        $output         = $model->get_datatable($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }
    
}
