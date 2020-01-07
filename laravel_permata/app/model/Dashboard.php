<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dashboard extends Model
{
    protected $guarded = [];

    function getAnggotaByStatus($sektor, $status){
        return DB::table('anggotas')->where('status',$status)->where('sektor',$sektor)->get();
    }


    function getChartAnggota(){
        $data = DB::table('anggotas')
                ->select(DB::raw("IFNULL(count(anggotas.id),0) as y"),'param.nama as name')
                ->leftJoin("m_parameter as param",'param.id','=','anggotas.sektor')
                ->groupBy('sektor')
                ->get();
        $result = array();
        foreach ($data as $key => $value) {
            $result[$key]['name'] = !empty($value->name) ? $value->name : 'undefined'; 
            $result[$key]['y'] = intval($value->y); 
        }
        return $result;
         // echo json_encode($result);die;
    }
}
 