<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Excel;
use File;


class AnggotaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('anggota');
    }

    function upload_anggota(){
        return view('anggota_upload');
    }

    function upload_anggota_process(Request $request){
        $this->validate($request, array(
            'data_anggota'      => 'required'
        ));

        if($request->hasFile('data_anggota')){
            $extension = File::extension($request->data_anggota->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
                $path = $request->data_anggota->getRealPath();
                $spreadsheet = Excel::load($path, function($reader) {
                })->get();

                if(!empty($sheetData) && $data->count()){ 
                    foreach ($sheetData as $key => $value) {
                        // $insert[] = [
                        //     'name' => $value->name,
                        //     'email' => $value->email,
                        //     'phone' => $value->phone,
                        //     ];
                        echo json_encode($value)."<br><br><br><br>";
                    }die;
 
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }
    
}
