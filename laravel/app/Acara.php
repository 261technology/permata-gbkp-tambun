<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Acara extends Model
{
    protected $guarded = [];

    function get_pa($id){
        $data = DB::table('acara as m')
        ->select('m.nama','m.selesai','m.mulai','m.deskripsi','p.*','m.id as id_agenda','m.skala as skala')
        ->leftJoin('pa as p','p.id_acara','=','m.id')
        ->where('m.tipe','=','pendalaman_alkitab')
        ->where('m.id','=',$id);

        return $data->first();
    }

    function get_datatable_pa($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status){
        $query      = DB::table('acara as m')
                        ->select('m.nama','m.selesai','m.mulai','m.deskripsi','p.*','m.id as id_agenda',DB::raw("DATE_FORMAT(m.mulai,'%d %M %Y') as tanggal_mulai"))
                        ->where('m.tipe','=','pendalaman_alkitab')
                        ->where('m.deleted','=','0')
                        ->leftJoin('pa as p','p.id_acara','=','m.id');
        $countAll   = $query->count();


        if(!empty($searchValue)){
            $query->where(function($q) use ($searchValue) {
                  $q->whereRaw("UPPER(m.nama) like '%".$searchValue."%'");
              });

        } 

        $fieldTable = array('m.nama',null);
                
        if(!empty($fieldTable[$orderColumn])){
            $query->orderBy($fieldTable[$orderColumn],$orderDir);
        }else{
            $query->orderBy('m.nama','asc');
        }
        
        return array(
            "recordsTotal" => $countAll,
            "recordsFiltered" => $query->count(),
            "data" => $query->skip($start)->limit($length)->get(),
        );
    }
}
 