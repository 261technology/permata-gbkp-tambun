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
        return DB::table('m_parameter')->where('type','=','marga')->get()->toArray();
    }

    public static function get_sektor(){
        return DB::table('m_parameter')->where('type','=','sektor')->get()->toArray();
    }

    public static function get_pekerjaan(){
        return DB::table('m_parameter')->where('type','=','pekerjaan')->get()->toArray();
    }

    public static function get_pendidikan(){
        return DB::table('m_parameter')->where('type','=','pendidikan')->get()->toArray();
    }

    public static function getUser($param){
        return Session::get($param);
    }

    public static function getConfigByName($name){
        $id = null;
        $data = DB::table('m_parameter')->whereRaw("UPPER(nama) = '".trim($name)."'")->first();   
        
        if(!empty($data->id)){
            $id = $data->id;
        }
        return intval($id);

    }


    public static function apiResponse($status,$data,$message){
        return response()->json(['status'=>$status, 'data' => $data , 'message' => $message], $status);
    }
}