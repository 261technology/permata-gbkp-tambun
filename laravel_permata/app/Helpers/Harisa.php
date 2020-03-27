<?php namespace App\Helpers;

use App;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Log;
use Auth;
use Cache;
use Carbon\Carbon;
use Session;
use Redirect;

class Harisa
{

    public static function get_marga(){
        return DB::table('m_parameter')->where('type','=','marga')->orderBy('nama','asc')->get()->toArray();
    }

    public static function get_sektor(){
        return DB::table('m_parameter')->where('type','=','sektor')->orderBy('nama','asc')->get()->toArray();
    }

    public static function get_pekerjaan(){
        return DB::table('m_parameter')->where('type','=','pekerjaan')->orderBy('nama','asc')->get()->toArray();
    }

    public static function get_pendidikan(){
        return DB::table('m_parameter')->where('type','=','pendidikan')->orderBy('nama','asc')->get()->toArray();
    }

    public static function getUser($param){
        return Session::get($param);
    }

    public static function getConfigByName($name){
        $id = null;
        $data = DB::table('m_parameter')->whereRaw("UPPER(nama) = '".trim($name)."'")->orderBy('nama','asc')->first();   
        
        if(!empty($data->id)){
            $id = $data->id;
        }
        return intval($id);

    }

    public static function get_provinsi($q = null){
        $provinsi = DB::table('m_provinsi')->select("id_propinsi as id","nama_propinsi as nama");

        if(!empty($q)){
            $provinsi->whereRAW("UPPER(nama_propinsi) like '%".strtoupper($q)."%'");
        }

        return $provinsi->orderBy('nama_propinsi','asc')->get()->toArray();
    }

    public static function get_kabkota($q = null, $provinsi = null){
        $kab = DB::table('m_kabkota')->select("id_kabkota as id","nama_kabkota as nama");

        if(!empty($q)){
            $kab->whereRAW("UPPER(nama_kabkota) like '%".strtoupper($q)."%'");
        }

        if(!empty($provinsi)){
            $kab->where("id_propinsi",$provinsi);
        }

        return $kab->orderBy('nama_kabkota','asc')->get()->toArray();
    }

    public static function get_kecamatan($q = null, $kabupatan = null){
        $kecamatan = DB::table('m_kecamatan')->select("id_kecamatan as id","nama_kecamatan as nama");

        if(!empty($q)){
            $kecamatan->whereRAW("UPPER(nama_kecamatan) like '%".strtoupper($q)."%'");
        }

        if(!empty($kabupatan)){
            $kecamatan->where("id_kabkota",$kabupatan);
        }

        return $kecamatan->orderBy('nama_kecamatan','asc')->get()->toArray();
    }

    public static function apiResponse($status,$data,$message){
        return response()->json(['status'=>$status, 'data' => $data , 'message' => $message], $status);
    }
}