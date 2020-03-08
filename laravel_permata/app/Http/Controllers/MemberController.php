<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Illuminate\Support\Facades\Mail;
use Session;

class MemberController extends Controller
{   
    public function profile()
    {   
        $email          = session::get('email');
        $model          = new Anggota();
        $user           = $model->get_anggota($email);
        // echo json_encode($user);die;
        return view('frontend.me.profile',compact('user'));
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required', 
        ]);

        $email    = $request->email;
        $password = $request->password;
        $cek      = Anggota::where('email','=',$email)->first();
        
        if(!empty($cek)){
            if (Hash::check($password, $cek->password)) {
                $model          = new Anggota();
                $user           = $model->get_anggota($email);
                $token          = str_replace('-', '',Uuid::uuid4()).date('dmY'); 
                $updatedToken   = Anggota::where('email', $email)->update(['token' => $token ]);

                foreach ($user as $key => $value) {
                        if($key != 'role' && $key != 'password'){
                            Session::put($key,$value);
                        }
                }
                Session::put('isLogin',1);
                Session::flash('notification','Selamat datang '.Session::get('nama_depan').' !!!');
                return redirect(url('/').'/member');
            }else{
                Session::flash('notification','Email atau password anda salah');
                Session::put('alert','warning');
                return redirect(url('/').'/login');
            }
        }else{
            Session::flash('notification',$email.' belum terdaftar');
            Session::put('alert','warning');    
            return redirect(url('/').'/login');
        }

    }


    function activation($code_activation){
        $user       = Anggota::where('url_activation', $code_activation)->first();
        $update     = Anggota::where('email', $user["email"])->update(['status' => "AKTIF", 'url_activation' => str_replace('-', '',Uuid::uuid4()).$user["email"]]);
        if($update){
        	$result['activation'] 	= true;
        	 return redirect('login')->with($result);
        }else{
        	return redirect('home');
        }
    }


   function forgotPassword(){
        return view('frontend.forgot_password');
    }

    function forgotPasswordProcess(Request $request){
        $email 	= $result['email'] 	= $request->input('email');
        $data 	= Anggotaselect('url_reset_password as url','firstname')->whereEmail($email)->first();
        if(!empty($data)){
        	$result['name'] 	= $data->firstname;
        	$this->sendEmailResetPassword($email,$data->firstname, $data->url);
        	$result['status'] 	='success';
        }else{
        	$result['status'] 	='not-found';
        }
        return redirect()->back()->with($result);
    }

    function sendEmailResetPassword($email,$name,$url){
    	$to_name 	= $name;
		$to_email 	= array($email);
		$data = array('name' => $name, 'url' => $url);
		return Mail::send('email.reset_password', $data, function($message) use ($to_name, $to_email,$data) {
			$message->to($to_email, $to_name)->subject('Mejuah-juah '.ucwords($data['name']));
			$message->from('kitapermatagbkp@gmail.com','PERMATA GBKP RUNGGUN TAMBUN');
		});
    }


    function resetPassword($code = null){
    	if(!empty($code)){
    		$user = Anggotaselect('firstname as name','email')->whereUrlResetPassword($code)->first();
	    	if(!empty($user)){
	    		return view('frontend.reset_password', compact('user','code'));
	    	}	
    	}
    	return redirect('/');
    }

    function resetPasswordProcess(Request $request){
    	$member 	= new Member;
        $password 	= Hash::make($request->input('password'));


       	$update = Anggotawhere('email', $request->input('email'))
          					->update(['password' => $password]);
        $user['email']  = $request->input('email');
        $code 			= $request->input('code');
        $result['status'] = 'fail';
        if($update){
        	$result['status'] 	= 'success';
        	 return redirect('/member/reset-password/'.$request->input('code'))->with($result);
        }else{
        	return redirect('home');
        }
    }

}
