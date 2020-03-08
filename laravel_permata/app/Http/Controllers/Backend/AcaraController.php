<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Imports\KasImport;
use App\Acara;
use Harisa;
use Session;
use Excel;
use File;
use DB;


class AcaraController  extends Controller
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


    public function index(){
        return view('acara.acara');
    }

    public function pa()
    {   
        
        return view('acara.pa');
    }

    function get_pa(Request $request){
        $model      = new Acara();
        $data       = $model->get_pa($request->input('id'));
        $data->tanggal_mulai = null;
        $data->jam_mulai = null;
        $data->tanggal_selesai = null;
        $data->jam_selesai = null;
        if(!empty($data->mulai)){
            $mulai = explode(' ', $data->mulai);
            $data->tanggal_mulai = $mulai[0];
            $data->jam_mulai = substr($mulai[1], 0,5);
        }
        if(!empty($data->selesai)){
            $selesai = explode(' ', $data->selesai);
            $data->tanggal_selesai = $selesai[0];
            $data->jam_selesai = substr($selesai[1], 0,5);;
        }
        echo json_encode($data);
    }

    function getPaView(Request $request){
        $model      = new Acara();
        $data       = $model->get_pa($request->input('id'));
        $data->tanggal_mulai = null;
        $data->jam_mulai = null;
        $data->tanggal_selesai = null;
        $data->jam_selesai = null;
        
        if(!empty($data->mulai)){
            $mulai = explode(' ', $data->mulai);
            $data->tanggal_mulai = $mulai[0];
            $data->jam_mulai = substr($mulai[1], 0,5);
        }
        if(!empty($data->selesai)){
            $selesai = explode(' ', $data->selesai);
            $data->tanggal_selesai = $selesai[0];
            $data->jam_selesai = substr($selesai[1], 0,5);;
        }

        $data->people = $model->getPaPeople($request->input('id'));
        echo json_encode($data);
    }

    function datatable_pa(Request $request){
        $model  = new Acara();
        $length         = $request->input('length');
        $start          = $request->input('start');
        $searchValue    = trim(strtoupper($_POST['search']['value']));
        $orderColumn    = $_POST['order']['0']['column'];
        $orderDir       = $_POST['order']['0']['dir'];
        $order          = $request->input('order');
        
        $status         = $request->input('status');

        $output         = $model->get_datatable_pa($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status);  
        $output['draw'] = $request->input('draw');

        echo json_encode($output); 
    }

    function update_pa(Request $request){
        $data_acara['nama']       = $request->input('pa_nama');
        $data_acara['deskripsi']  = $request->input('pa_deskripsi');
        $data_acara['mulai']      = $request->input('pa_tanggal_mulai').' '.$request->input('pa_jam_mulai').':00';
        $data_acara['selesai']    = $request->input('pa_tanggal_selesai').' '.$request->input('pa_jam_selesai').':00';
        $data_acara['tipe']       = 'pendalaman_alkitab';
        $data_acara['skala']      = $request->input('pa_skala');

        $data_pa['tema']        = $request->input('pa_tema');
        $data_pa['ayat']        = $request->input('pa_ayat');
        $data_pa['pendamping']  = $request->input('pa_pendamping');
        $data_pa['lokasi']      = $request->input('pa_lokasi');
        $data_pa['persembahan']      = $request->input('persembahan');


        if((empty($request->input('pa_id')))&&(empty($request->input('acara_id')))){
            $data_pa['created_by'] = $data_pa['created_by'] = Session::get('nama');
            $id_agenda  = DB::table('acara')->insertGetId($data_acara);
            $data_pa['id_acara'] = $id_agenda; 
            DB::table('pa')->insert($data_pa);
            Session::flash('notification', 'Agenda PA  has been added');
        }else{
            if(empty($request->input('pa_id'))){
                $data_pa['id_acara'] = $request->input('acara_id'); 
                DB::table('pa')->insert($data_pa);
            }else{
                DB::table('pa')
                ->where('id', $request->input('pa_id'))
                ->where('id_acara', $request->input('acara_id'))
                ->update($data_pa);
            }
            DB::table('acara')
            ->where('id', $request->input('acara_id'))
            ->update($data_acara);   
            Session::flash('notification', 'Agenda PA  has been updated');
        }

        
        $result['data'] = 'success';
        echo json_encode($result);
    }

    function updatePesertaPa(Request $request){
        $data['id_acara'] =  $request->input('acara_id');

        DB::table('aktivitas_anggota')->where('id_acara','=',$data['id_acara'])->delete();

        foreach ($request->input('pa_peserta') as $key => $value) {
             $data['peran']         = 'peserta';
             $data['id_anggota']    = $value;
             DB::table('aktivitas_anggota')->insert($data);
        }

        foreach ($request->input('pa_tuan_rumah') as $key => $value) {
             $data['peran']         = 'tuan rumah';
             $data['id_anggota']    = $value;
             DB::table('aktivitas_anggota')->insert($data);
        }
        Session::flash('notification', 'Peserta PA  has been updated');
        $result['data'] = 'success';
        echo json_encode($result);
    }

    function getPesertaPa(Request $request){
        $model      = new Acara();
        $id = $request->input('id');
        $data = $model->getPaPeople($id);
        echo json_encode($data);
    }

}
