<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Member;
use App\Models\Dashboard;
use App\Models\Anggota;
use Session;
use Harisa;

class LandingController extends Controller
{

    public function index()
    {
        return view('frontend.landing');
    }

    public function login()
    {
        if(!empty(Session::get('isLogin')) && Session::get('isLogin') == 1 ){
             return redirect(url('/').'/member');
        }      
        return view('frontend.login');
    }

    public function register()
    {
        $marga      = Harisa::get_marga();
        $sektor     = Harisa::get_sektor();
        return view('frontend.register',compact('marga','sektor'));
    }

    public function forgotPassword(){
        return view('frontend.forgot_password');
    }

    public function information(){
        $config                        = new Config();   
        $chartAnggota                  = $this->chartAnggota();
        $totalAnggota                  = array();
        $totalAnggota["all"]           = Anggota::where("role",2)->count();
        $totalAnggota["aktif"]         = Anggota::where("role",2)->where("status","AKTIF")->count();
        $totalAnggota["tidak-aktif"]   = Anggota::where("role",2)->where("status","TIDAK AKTIF")->count();
        $totalAnggota["terdaftar"]     = Anggota::where("role",2)->where("status","TERDAFTAR")->count();
        $sektor                        = $config->getConfig('sektor',true);
        $sektor2                       = $config->getConfig('sektor');
        $anggotaBySektor               = array();

        $description                   = "Informasi Keanggotaan PERMATA di GBKP Runggun Tambun";
        foreach ($sektor2 as $key => $value) {
            $anggotaBySektor[$value->nama] = Anggota::where('sektor','=',$value->id)->orderBy("nama_depan","asc")->get();
        }

        // echo json_encode($anggotBySektor);die;

        return view('frontend.information',compact('sektor','chartAnggota','totalAnggota','anggotaBySektor','description'));
    }

    function chartAnggota(){
        $chartAnggota       =   array();
        $color1             =   array('#1d23aa ', '#0d23da', '#2f7ed8', '#3d6ae8', '#4e5fe8','#4f9fe8', '#5a9fff', '#77a1e5', '#c42525', '#a6c96a');
        $model              = new Dashboard();
        $config             = new Config();        
        $chart              =   array();
        $status             =   array('aktif','tidak aktif','terdaftar');
        
        $color2             =   array('#04c100','#f9c237','#d94c42');
        $sektor             =   $config->getConfig('sektor');
        $pekerjaan          =   $config->getConfig('pekerjaan');
        $chart = array();
        foreach ($sektor as $key => $value) {
            $drilldown['name'] = $value->nama;
            $drilldown['categories']    = array();
            $drilldown['data']          = array();
            $drilldown['color']         = array();
            $total = 0;
            foreach ($status as $key1 => $value1) {
                array_push($drilldown['categories'], $value1);
                $dataAnggotaByStatus = $model->getAnggotaByStatus($value->id, $value1);
                

                array_push($drilldown['color'], $color2[$key1]);
                array_push($drilldown['data'], count($dataAnggotaByStatus));
                $total = $total + count($dataAnggotaByStatus);
                
            }
            // echo json_encode($drilldown);die;
            $chart['y']         = $total;
            $chart['drilldown'] = $drilldown;
            $chart['color']     = $color1[$key];
            array_push($chartAnggota, $chart);
        }

        $result = array(
            "color" => $color1,
            "chart" => $chartAnggota
        );

        return $result;
    }

}
