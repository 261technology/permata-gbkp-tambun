<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Dashboard;
use App\model\Config;
use Harisa;
use Session;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model      = new Dashboard();
        $config     = new Config();
        
        $chart              =   array();
        $status             =   array('aktif','tidak aktif');
        $color1             =   array('#1d23aa ', '#0d23da', '#2f7ed8', '#3d6ae8', '#4e5fe8','#4f9fe8', '#5a9fff', '#77a1e5', '#c42525', '#a6c96a');
        $color2             =   array('#0f0','#f00');
        $sektor             =   $config->getConfig('sektor');
        $nama_sektor        =   $config->getConfig('sektor',true);
        $pekerjaan          =   $config->getConfig('pekerjaan');
        $chartAnggota       =   array();

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
        // echo json_encode($chartAnggota);die;
        // echo json_encode($sektor)

        // $chartPekerjaan                 =   array();
        // $chartPekerjaan['pekerjaan']['pelajar']    = array();
        // $chartPekerjaan['pekerjaan']['pekerja']    = array();
        // foreach ($pekerjaan as $key => $value) {
        //     // if($value->nama == 'Pelajar/Mahasiswa');
        //     //     array_push($chartPekerjaan['pekerjaan']['pela'], $value->nama);
        //     // }else{

        //     // }
        // }

        // echo json_encode($chartPekerjaan);die;
        return view('dashboard.index',compact('nama_sektor','sektor','chartAnggota','color1')); 
    }  
}
