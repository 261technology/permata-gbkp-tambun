<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Keuangan extends Model
{
    protected $guarded = [];
    protected $table = 'iuran_kas';

    function get_iuran_kas($year = null){
        if(empty($year)){
            $year = date('Y');
        }

        $data =   DB::table('m_parameter')
                    ->select('type','nama')
                    ->where(function($q){
                      $q->where('type','=','iuran_kas_pekerja')
                        ->orWhere('type','=','iuran_kas_pelajar');
                        })
                    ->where('tahun','=',$year)
                    ->get();

        $param = array();
        foreach ($data as $key => $value) {
            $param[$value->type]= intval($value->nama);
        }
        return $param;
    }

    function add_iuran_kas($data){
        return DB::table('iuran_kas')
                ->insert($data);
    }

    function delete_iuran_kas($id){
        return DB::table('iuran_kas')->where('id','=',$id)->delete();
    }

    function get_datatable_iuran_kas($length, $start, $searchValue, $orderColumn, $orderDir, $order,$tahun,$sektor){
        $query      = DB::table('iuran_kas as a')
                        ->select('a.*','b.nama',DB::raw("case when b.pekerjaan in ('Pelajar','Mahasiswa') THEN 'Pelajar' ELSE 'Pekerja' END AS status_pekerja"),'b.sektor')
                        ->leftJoin('anggotas as b','a.id_anggota','=','b.id');
        $countAll   = $query->count();


        if(!empty($tahun)){
            $query->where('tahun','=',$tahun);
        }

        if(!empty($sektor)){
            $query->where('sektor','=',$sektor);
        }


        if(!empty($searchValue)){
            $query->where(function($q) use ($searchValue) {
                  $q->whereRaw("UPPER(nama) like '%".$searchValue."%'")
                    ->orWhereRaw("UPPER(marga) like '%".$searchValue."%'");
              });

        } 

        $fieldTable = array('nama','nominal','tanggal_pembayaran','keterangan',null);
                
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
 