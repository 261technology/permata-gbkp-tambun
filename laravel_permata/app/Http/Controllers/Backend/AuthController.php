<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use Harisa;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;


class AuthController extends Controller
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

    function index()
    {   
        echo "No Direct Access Allowed";die();
    }

    function login(){
        // echo Hash::make('permatatambun');die;
        if(Session::get('isLogin') != 1){
            return view('authtentication.login');
        }else{
            return redirect('app');
        }
        
    }

    function loginProcess(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required', 
        ]);

        $email    = $request->input('email');
        $password = $request->input('password');

        $login    = $this->validate_login($email,$password);

        if($login){
            Session::flash('notification','Selamat datang '.Session::get('nama').' !!!');
            
        }else{
            Session::flash('notification','Email atau password anda salah');
        }

        return redirect(url('/').'/application');

    }

    function validate_login($email,$password){
        $result     = false;
        $user     = DB::table('anggota as user') 
                                ->select('user.*','user.id as id_anggota','m_role.nama as role_name','user.role as role_id')
                                ->join('m_role','m_role.id','=','user.role')
                                ->where('user.role',1)
                                ->where('user.email','=',$email)
                                ->first();

        if(!empty($user)){
            if (Hash::check($password, $user->password)) {
                foreach ($user as $key => $value) {
                        Session::put($key,$value);
                }
                Session::put('isLogin',1);
                $result = true;
            }
        }
        return $result;
    }

    function logout(){
        Session::flush();
        return redirect(url('/application/login'));
    }

    function register(){
        $pekerjaan  = Harisa::get_pekerjaan();
        $sektor     = Harisa::get_sektor();
        $marga      = Harisa::get_marga();
        $pendidikan = Harisa::get_pendidikan();
        return view('authtentication.register', compact('marga','sektor','pekerjaan','pendidikan'));
    }

    function registerProcess(Request $request){
        $data['nama'] = $request->input('nama');
        $data['marga'] = $request->input('marga');
        $data['jenis_kelamin'] = $request->input('jenis_kelamin');
        $data['tempat_lahir'] = $request->input('tempat_lahir');
        $data['tanggal_lahir'] = $request->input('tanggal_lahir');
        $data['sekolah'] = $request->input('sekolah');
        $data['pendidikan'] = $request->input('pendidikan');
        $data['jurusan'] = $request->input('jurusan');
        $data['pekerjaan'] = $request->input('pekerjaan');
        $data['telepon'] = $request->input('telepon');
        $data['email'] = $request->input('email');
        $data['domisili'] = $request->input('domisili');
        $data['alamat'] = $request->input('alamat');
        $data['tahun_ngawan'] = $request->input('tahun_ngawan');
        $data['lokasi_ngawan'] = $request->input('lokasi_ngawan');
        $data['instagram'] = $request->input('instagram');
        $data['sektor'] = $request->input('sektor');
        $data['hobi'] = $request->input('hobi');
        $data['kantor'] = $request->input('kantor');
        $data['role']  = 3;
        $data['password']   = Hash::make($request->input('password'));



        $id_anggota = DB::table('anggota')->insertGetId($data);
        
        if(!empty($id_anggota)){
            Session::flash('notification', 'Anda berhasil mendaftar silahkan hubungi pengurus runggun untuk mengaktifkan akun anda');
            return redirect(url('/').'/login');
        }else{
            Session::flash('notification', 'Proses mendaftar gagal');
            return redirect()->back();
        }



    }

    function checkEmailAvaliable(Request $request){
        $email = $request->input('email');
        $q = DB::table('anggota')->select(DB::raw('count(id) as total'))->WhereRaw("UPPER(email) like '%".strtoupper($email)."%'")->first();
        $data['result'] = 'unavailable';
        if($q->total > 0 ){
            $data['result'] = 'available';
        }
        echo json_encode($data);

    }

}
