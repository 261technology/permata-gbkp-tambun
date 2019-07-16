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
use DB;


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
        
        $tahun  = Input::get('tahun');
        $sektor = Input::get('sektor');

        $output         = $model->get_datatable_iuran_kas($length, $start, $searchValue, $orderColumn, $orderDir, $order,$tahun,$sektor);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }

    public function datatable_persembahan_pa(Request $request){
        $model  = new Keuangan();
        $length         = $request->input('length');
        $start          = $request->input('start');
        $searchValue    = trim(strtoupper($_POST['search']['value']));
        $orderColumn    = $_POST['order']['0']['column'];
        $orderDir       = $_POST['order']['0']['dir'];
        $order          = $request->input('order');

        $output         = $model->get_datatable_persembahan_pa($length, $start, $searchValue, $orderColumn, $orderDir, $order);  
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

    function add_iuran_kas(Request $request){
        $model          = new Keuangan();
        $result['data'] = 'failed';
        $data           = array();
        $data['id_anggota'] = $request->input('anggota');
        $data['nominal']    = $request->input('nominal');
        $data['tahun']      = $request->input('tahun');
        $data['tanggal_pembayaran'] = $request->input('tanggal_pembayaran');
        $data['keterangan'] = !empty($request->input('keterangan')) ? $request->input('keterangan') : "dibayarkan pada tanggal ".date('dd/mm/YYYY');

        if($model->add_iuran_kas($data)){
            $result['data']  = 'success';
            Session::flash('notification', 'Berhasil mencatat pembayaran kas'); 
        }
        echo json_encode($result);
    }

    function delete_iuran_kas(Request $request){
        $model          = new Keuangan();
        $result['data'] = 'failed';
        $id             = $request->input('id');

        if($model->delete_iuran_kas($id)){
            $result['data']  = 'success';
            Session::flash('notification', 'Berhasil menghapus pembayaran kas'); 
        }
        echo json_encode($result);

    }


    // Kantin
    function addPemasukanKantin(Request $request){
        $result['data'] = 'failed';
        $data['tanggal'] = $request->input('kantin_tanggal');
        $data['pemasukan'] = $request->input('pemasukan');
        $data['tujuan'] = $request->input('kantin_tujuan');
        $data['keterangan'] = $request->input('kantin_keterangan');
        $data['created_by'] = Harisa::getUser('id');

        $id_kantin = DB::table('kantin')->insertGetId($data);

        foreach ($request->input('kantin_petugas') as $key => $value) {
             $data_petugas['peran']         = 'petugas';
             $data_petugas['id_jadwal']     = $id_kantin;
             $data_petugas['id_anggota']    = $value;
             DB::table('aktivitas_kantin')->insert($data_petugas);
        }
        if($id_kantin){
            $result['data'] = 'success';
        }
        echo json_encode($result);
    }

    function updatePemasukanKantin(Request $request){
        $result['data'] = 'failed';
        $id = $request->input('id');
        $data['tanggal'] = $request->input('kantin_tanggal');
        $data['pemasukan'] = $request->input('pemasukan');
        $data['tujuan'] = $request->input('kantin_tujuan');
        $data['keterangan'] = $request->input('kantin_keterangan');
        $data['updated_by'] = Harisa::getUser('id');

                DB::table('kantin')
                ->where('id', $id)
                ->update($data);
        DB::table('aktivitas_kantin')->where('id_jadwal','=',$id)->delete();
        foreach ($request->input('kantin_petugas') as $key => $value) {
             $data_petugas['peran']         = 'petugas';
             $data_petugas['id_jadwal']     = $id;
             $data_petugas['id_anggota']    = $value;
             DB::table('aktivitas_kantin')->insert($data_petugas);
        }
        if($id){
            $result['data'] = 'success';
        }
        echo json_encode($result);
    }

    function datatablePemasukanKantin(Request $request){
        $model  = new Keuangan();
        $length         = $request->input('length');
        $start          = $request->input('start');
        $searchValue    = trim(strtoupper($_POST['search']['value']));
        $orderColumn    = $_POST['order']['0']['column'];
        $orderDir       = $_POST['order']['0']['dir'];
        $order          = $request->input('order');

        $output         = $model->get_datatable_pemasukanKantin($length, $start, $searchValue, $orderColumn, $orderDir, $order);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }

    function getPemasukanKantin(Request $request){
        $id     = $request->input('id');
        $data = new keuanganController;
        $data               = DB::table('kantin as m')->find($id);
        $data->petugas      = DB::table('aktivitas_kantin as m')
                                    ->select('a.id  as id_anggota','a.nama as nama_anggota')
                                    ->join('anggotas as a','a.id','=','m.id_anggota')
                                    ->where('m.id','=',$id)
                                    ->get();
        echo json_encode($data);
    }
}
