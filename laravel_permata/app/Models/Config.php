<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Config extends Model
{
    protected $guarded = [];

    public function getConfig($type , $name = null){
        if(empty($name)){
            return DB::table('m_parameter')->where('type',$type)->orderBy('nama','asc')->get();    
        }else{
            $data = DB::table('m_parameter')->select('nama')->where('type',$type)->orderBy('nama','asc')->get();
            
            $result = array();
            foreach ($data as $key => $value) {
                array_push($result, $value->nama);
            }
            return $result;

        }
        
    }
}
 