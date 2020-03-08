<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Anggota extends Model
{
    protected $guarded = [];
    protected $table = 'anggota';

    function get_anggota($email = null, $uuid = null){
    	$user =   DB::table('anggota as a')
                      ->select(
                        'a.email',
                        'a.nama',
                        'a.nama_depan',
                        'a.nama_belakang',
                        'a.nama_panggilan',
                        'a.jenis_kelamin',
                        'a.tanggal_lahir',
                        DB::raw("IFNULL(YEAR(CURDATE()) - YEAR(a.tanggal_lahir),0) as umur"),
                        'a.tempat_lahir',
                        'a.status',
                        'a.sektor',
                        'sektor.nama as nama_sektor',
                        'a.pekerjaan',
                        'pekerjaan.nama as nama_pekerjaan',
                        'a.perusahaan',
                        'a.pendidikan',
                        'pendidikan.nama as nama_pendidikan',
                        'a.sekolah',
                        'a.marga',
                        'marga.nama as nama_marga',
                        'a.hobi',
                        'a.tahun_ngawan',
                        'a.runggun_ngawan',
                        'a.runggun',
                        'a.dengan_orang_tua',
                        'a.telepon',
                        'a.instagram',
                        'a.alamat',
                        'a.domisili_kelurahan',
                        'a.domisili_kota',
                        'a.avatar'
                      )
                      ->leftJoin('m_parameter as marga','a.marga','=','marga.id')
                      ->leftJoin('m_parameter as pendidikan','a.pendidikan','=','pendidikan.id')
                      ->leftJoin('m_parameter as pekerjaan','a.pekerjaan','=','pekerjaan.id')
                      ->leftJoin('m_parameter as sektor','a.sektor','=','sektor.id');
      if(!empty($uuid)){
        $user->where('a.uuid','=',$id);
      }

      if(!empty($email)){
        $user->where('a.email','=',$email);
      }
                        
      return $user->first();
    }


    function get_datatable($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status){
        $query      = DB::table('anggota as a')
                      ->select('a.*','sektor.nama as nama_sektor','pekerjaan.nama as nama_pekerjaan','marga.nama as nama_marga')
                      ->leftJoin('m_parameter as marga','a.marga','=','marga.id')
                      ->leftJoin('m_parameter as pendidikan','a.pendidikan','=','pendidikan.id')
                      ->leftJoin('m_parameter as pekerjaan','a.pekerjaan','=','pekerjaan.id')
                      ->leftJoin('m_parameter as sektor','a.sektor','=','sektor.id');
                      // ->where('isAdmin',0);
        $countAll   = $query->count();

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
 