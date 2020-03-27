<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use Ramsey\Uuid\Uuid;
use Harisa;

class UtilityController extends Controller
{


    public function refreshUserData()
    {   
        $user       = Anggota::all()->toArray();
        foreach ($user as $key => $value) {
            $updateData = array(
                'url_reset_password' => str_replace('-', '',Uuid::uuid4()).$value["email"],
                'url_reset_password' => str_replace('-', '',Uuid::uuid4()).$value["email"],
            );
            Anggota::where('email',$value["email"])->update($updateData);
        }
        echo "success";
    }

    public function getProvinsi(Request $r)
    {   
        $q = $r->input("q");
        echo json_encode(Harisa::get_provinsi($q)) ;
    }

    public function getKabupaten(Request $r)
    {   
        $q          = $r->input("q");
        $provinsi   = $r->input('provinsi');
        echo json_encode(Harisa::get_kabkota($q, $provinsi)) ;
    }

    public function getKecamatan(Request $r)
    {   
        $q          = $r->input("q");
        $kabupaten  = $r->input('kabupaten');
        echo json_encode(Harisa::get_kecamatan($q, $kabupaten)) ;
    }
    
}
