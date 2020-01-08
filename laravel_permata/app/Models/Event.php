<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Event extends Model
{
    protected $guarded = [];

    public function getRakor3user($phone){
        $data = DB::table('event_rakor3')->select('*')->where('phone',$type)->get();
    }
}
 