<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Keuangan extends Model
{
    protected $guarded = [];

    function get_anggota($id){
    	return  DB::table('anggotas')->find($id);
    }


    function get_datatable_pemasukan_kas($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status){
        $query      = DB::table('anggotas as a')->select('a.*');
        $countAll   = $query->count();


        // if($status != 'x'){
        //     $query->where('status','=',$status);
        // }


        if(!empty($searchValue)){
            $query->where(function($q) use ($searchValue) {
                  $q->whereRaw("UPPER(nama) like '%".$searchValue."%'")
                    ->orWhereRaw("UPPER(marga) like '%".$searchValue."%'");
              });

        } 

        $fieldTable = array('nama','sektor','telepon','status');
                
        if(!empty($fieldTable[$orderColumn])){
            $query->orderBy($fieldTable[$orderColumn],$orderDir);
        }else{
            $query->orderBy('nama','asc');
        }
        
        return array(
            "recordsTotal" => $countAll,
            "recordsFiltered" => $query->count(),
            "data" => $query->skip($start)->limit($length)->get(),
        );
    }
}
 