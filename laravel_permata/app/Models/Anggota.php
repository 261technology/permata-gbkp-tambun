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
                        'a.uuid',
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
                        'a.jurusan',
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
                        'a.domisili_kecamatan',
                        'kecamatan.nama_kecamatan as kecamatan',
                        'a.domisili_kota',
                        'kabupaten.nama_kabkota as kota',
                        'a.domisili_provinsi',
                        'provinsi.nama_propinsi as provinsi',
                        'a.avatar'
                      )
                      ->leftJoin('m_parameter as marga','a.marga','=','marga.id')
                      ->leftJoin('m_parameter as pendidikan','a.pendidikan','=','pendidikan.id')
                      ->leftJoin('m_parameter as pekerjaan','a.pekerjaan','=','pekerjaan.id')
                      ->leftJoin('m_parameter as sektor','a.sektor','=','sektor.id')
                      ->leftJoin('m_provinsi  as provinsi','a.domisili_provinsi','=','provinsi.id_propinsi')
                      ->leftJoin('m_kabkota   as kabupaten','a.domisili_kota','=','kabupaten.id_kabkota')
                      ->leftJoin('m_kecamatan as kecamatan','a.domisili_kecamatan','=','kecamatan.id_kecamatan');
      if(!empty($uuid)){
        $user->where('a.uuid','=',$uuid);
      }

      if(!empty($email)){
        $user->where('a.email','=',$email);
      }                        
      return $user->first();
    }


    function get_datatable($length, $start, $searchValue, $orderColumn, $orderDir, $order,$status){
        $query      = DB::table('anggota as a')
                      ->select('a.*','sektor.nama as nama_sektor','pekerjaan.nama as nama_pekerjaan','marga.nama as nama_marga','a.updated_at')
                      ->leftJoin('m_parameter as marga','a.marga','=','marga.id')
                      ->leftJoin('m_parameter as pendidikan','a.pendidikan','=','pendidikan.id')
                      ->leftJoin('m_parameter as pekerjaan','a.pekerjaan','=','pekerjaan.id')
                      ->leftJoin('m_parameter as sektor','a.sektor','=','sektor.id');
                      // ->where('isAdmin',0);
        $countAll   = $query->count();

        if(!empty($searchValue)){
            $query->where(function($q) use ($searchValue) {
                  $q->whereRaw("UPPER(a.nama) like '%".$searchValue."%'")
                    ->orWhereRaw("UPPER(a.marga) like '%".$searchValue."%'")
                    ->orWhereRaw("UPPER(a.email) like '%".$searchValue."%'");
              });

        } 

        if(!empty($status)){
            $query->where(function($q) use ($searchValue) {
                  $q->where("STATUS",$status);
              });

        } 

        $fieldTable = array('a.nama','a.sektor','a.telepon','a.status','a.updated_at');
                
                // echo $orderColumn;die;
        if(!empty($fieldTable[$orderColumn])){
            $query->orderBy($fieldTable[4],$orderDir);
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
 