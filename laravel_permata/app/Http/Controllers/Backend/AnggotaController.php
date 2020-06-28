<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AnggotaImport;
use App\Models\Anggota;
use Carbon\Carbon;
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
        $data   = $model->get_anggota(null,$id);
        $anggota    = (array)$data;

        $pekerjaan  = Harisa::get_pekerjaan();
        $sektor     = Harisa::get_sektor();
        $marga      = Harisa::get_marga();
        $pendidikan = Harisa::get_pendidikan();

        return view('anggota.edit',compact('pendidikan','anggota','sektor','marga','pekerjaan','total'));
    }
    
    function delete($id){
            $model  = new Anggota();
            Anggota::where('uuid',$id)->delete();
            Session::flash('notification', 'user data has been deleted');
            return redirect(url('/').'/application/anggota/');
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
        $orderColumn    = $request->input('order')['0']['column'];
        $orderDir       = $request->input('order')['0']['dir'];
        $order          = $request->input('order');
        
        $status         = $request->input('status');

        $output         = $model->get_datatable($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }

    function updateProcess(Request $request){
        $data['nama']               = $request->input('nama_depan')." ".$request->input('nama_belakang');
        $data['nama_depan']         = $request->input('nama_depan');
        $data['nama_belakang']      = $request->input('nama_belakang');
        $data['marga']              = $request->input('marga');

        $data['jenis_kelamin']      = $request->input('jenis_kelamin');
        $data['tempat_lahir']       = $request->input('tempat_lahir');
        $data['tanggal_lahir']      = $request->input('tanggal_lahir');

        $data['telepon']            = $request->input('telepon');
        $data['alamat']             = $request->input('alamat');
        $data['email']              = $request->input('email');

        $data['sekolah']            = $request->input('sekolah');
        $data['pendidikan']         = $request->input('pendidikan');
        $data['jurusan']            = $request->input('jurusan');
        $data['pekerjaan']          = $request->input('pekerjaan');
        
        $data['domisili_provinsi']  = $request->input('domisili_provinsi');
        $data['domisili_kota']      = $request->input('domisili_kabupaten');
        $data['domisili_kecamatan'] = $request->input('domisili_kecamatan');
        
        $data['tahun_ngawan']       = $request->input('tahun_ngawan');
        $data['runggun_ngawan']     = $request->input('lokasi_ngawan');
        $data['instagram']          = $request->input('instagram');
        $data['sektor']             = $request->input('sektor');
        $data['hobi']               = $request->input('hobi');
        $data['perusahaan']         = $request->input('kantor');
        $data['dengan_orang_tua']             = $request->input('dengan_orang_tua');
        $data['status']             = $request->input('status');
        $data['updated_at']         = Carbon::now();

        $id                         = $request->input('id_anggota');

        if (Anggota::where('uuid',$id)->update($data)) { 
            Session::flash('notification', 'Your data has been updated');
        }else{
            Session::flash('notification', 'ERROR!!!!!!');    
        } 
        
        return redirect(url('/').'/application/anggota/');
    }
    
}
