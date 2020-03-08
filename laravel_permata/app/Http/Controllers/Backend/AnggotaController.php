<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AnggotaImport;
use App\Models\Anggota;
use Harisa;
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

    function edit($id){
        $model  = new Anggota();
        $data   = $model->get_anggota($id);
        $anggota    = (array)$data;

        $pekerjaan  = Harisa::get_pekerjaan();
        $sektor     = Harisa::get_sektor();
        $marga      = Harisa::get_marga();
        $pendidikan = Harisa::get_pendidikan();

        // Prevent anggota lain edit sementara

        if(Session::get('uuid') != $anggota['uuid']){
            // echo 'ga boleh bukan id kamu';die;
        }

        return view('anggota.edit',compact('pendidikan','anggota','sektor','marga','pekerjaan','total'));
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
            Session::flash('notification', 'Your data has been updated');
            return redirect()->back();
        } 
        Session::flash('notification', 'ERROR!!!!!!');
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
        
        $status         = $request->input('status');

        $output         = $model->get_datatable($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }

    function updateProcess(Request $request){
        // echo json_encode($request->all());die;
        $data['nama'] = $request->input('nama');
        $data['marga'] = $request->input('marga');
        $data['jenis_kelamin'] = $request->input('jenis_kelamin');
        $data['tempat_lahir'] = $request->input('tempat_lahir');
        $data['tanggal_lahir'] = $request->input('tanggal_lahir');
        $data['sekolah'] = $request->input('sekolah');
        $data['pendidikan'] = $request->input('pendidikan');
        $data['jurusan'] = $request->input('jurusan');
        $data['pekerjaan'] = $request->input('pekerjaan');
        $data['telepon'] = $request->input('telepon');
        $data['email'] = $request->input('email');
        $data['domisili'] = $request->input('domisili');
        $data['alamat'] = $request->input('alamat');
        $data['tahun_ngawan'] = $request->input('tahun_ngawan');
        $data['lokasi_ngawan'] = $request->input('lokasi_ngawan');
        $data['instagram'] = $request->input('instagram');
        $data['sektor'] = $request->input('sektor');
        $data['hobi'] = $request->input('hobi');
        $data['perusahaan'] = $request->input('kantor');

        $id = $request->input('id_anggota');

        if (Anggota::where('id',$id)->update($data)) { 
            Session::flash('notification', 'Your data has been updated');
        }else{
            Session::flash('notification', 'ERROR!!!!!!');    
        } 
        
        return redirect()->back();
    }
    
}
