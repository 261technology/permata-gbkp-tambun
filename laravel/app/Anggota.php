<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Anggota extends Model
{
    protected $guarded = [];
    protected $table = 'anggotas';




    function get_anggota($id){
    	return  DB::table('anggotas as a')
                      ->select('a.*','sektor.nama as nama_sektor','pekerjaan.nama as nama_pekerjaan','marga.nama as nama_marga',DB::raw("YEAR(CURDATE()) - YEAR(a.tanggal_lahir) as umur"))
                      ->leftJoin('m_parameter as marga','a.marga','=','marga.id')
                      ->leftJoin('m_parameter as pendidikan','a.pendidikan','=','pendidikan.id')
                      ->leftJoin('m_parameter as pekerjaan','a.pekerjaan','=','pekerjaan.id')
                      ->leftJoin('m_parameter as sektor','a.sektor','=','sektor.id')->where('a.uuid','=',$id)->first();
    }


    function get_datatable($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status){
        $query      = DB::table('anggotas as a')
                      ->select('a.*','sektor.nama as nama_sektor','pekerjaan.nama as nama_pekerjaan','marga.nama as nama_marga')
                      ->leftJoin('m_parameter as marga','a.marga','=','marga.id')
                      ->leftJoin('m_parameter as pendidikan','a.pendidikan','=','pendidikan.id')
                      ->leftJoin('m_parameter as pekerjaan','a.pekerjaan','=','pekerjaan.id')
                      ->leftJoin('m_parameter as sektor','a.sektor','=','sektor.id');
        $countAll   = $query->count();


        // if($status != 'x'){
        //     $query->where('status','=',$status);
        // }


        if(!empty($searchValue)){
            $query->where(function($q) use ($searchValue) {
                  $q->whereRaw("UPPER(a.nama) like '%".$searchValue."%'")
                    ->orWhereRaw("UPPER(a.marga) like '%".$searchValue."%'");
              });

        } 

        $fieldTable = array('a.nama','a.sektor','a.telepon','a.status');
                
        if(!empty($fieldTable[$orderColumn])){
            $query->orderBy($fieldTable[$orderColumn],$orderDir);
        }else{
            $query->orderBy('a.nama','asc');
        }
        
        return array(
            "recordsTotal" => $countAll,
            "recordsFiltered" => $query->count(),
            "data" => $query->skip($start)->limit($length)->get(),
        );
    }
}
 