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
use Validator;

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
                            Session::flash($key,$value);
                        }
                }
                Session::flash('isLogin',1);
                Session::flash('notification','Selamat datang '.Session::get('nama_depan').' !!!');
                return redirect(url('/').'/member');
            }else{
                Session::flash('notification','Email atau password anda salah');
                Session::flash('alert','warning');
                return redirect(url('/').'/login');
            }
        }else{
            Session::flash('notification',$email.' belum terdaftar');
            Session::flash('alert','warning');    
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
        $data 	= Anggota::select('url_reset_password as url','nama_depan')->whereEmail($email)->first();
        if(!empty($data)){
        	$result['name'] 	= $data->nama_depan;
        	$this->sendEmailResetPassword($email,$data->nama_depan, $data->url);
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
    		$user = Anggota::select('nama_depan as name','email')->whereUrlResetPassword($code)->first();
	    	if(!empty($user)){
	    		return view('frontend.reset_password', compact('user','code'));
	    	}	
    	}
    	return redirect('/');
    }

    function resetPasswordProcess(Request $request){
    	$member 	= new Anggota;
        $password 	= Hash::make($request->input('password'));


       	$update = Anggota::where('email', $request->input('email'))
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



##REGISTER
    public function registerProcess(Request $request)
    {   
        // echo json_encode($request->all());die;

         $requestData   = $request->all();
         $validator     = Validator::make($requestData, [ 
                  'firstname'   => 'required',
                  'lastname'    => 'required',
                  'email'       => 'required|email',
                  'password'    => 'required',    
                  'password_confirmation'  => 'required|same:password', 
                  'runggun'     => 'required',  
                  'marga'       => 'required',
        ]); 

        if($validator->fails()) {          
            Session::flash('notification','Terjadi kesalahan');
            Session::flash('alert','danger');
            echo json_encode($validator->messages()->get('*'));die;
            return redirect(url('/').'/register');
        }


        $isExist                = Anggota::where('email', $request->input('email'))->first();

        
        $result['result']       = 'error';
        $urlActivation          = str_replace('-', '',Uuid::uuid4()).$requestData["email"];
        $urlResetPassword       = str_replace('-', '',Uuid::uuid4()).$requestData["email"];
        $fullname               = ucwords($requestData["firstname"]). " ".ucwords($requestData["lastname"]);

        if(!empty($isExist)){
            Session::flash('notification','Email '.$requestData["email"].' telah terdaftar');
            Session::flash('alert','warning');
            return redirect(url('/').'/register');
        }else{          
            $member = new Anggota;
            $member->nama               = $fullname;
            $member->nama_depan         = ucwords($requestData["firstname"]);
            $member->nama_belakang      = ucwords($requestData["lastname"]);
            $member->email              = strtolower($request->input('email'));
            $member->password           = Hash::make($request->input('password'));
            $member->url_activation     = $urlActivation;
            $member->url_reset_password = $urlResetPassword;
            $member->runggun            = strtoupper($request->input('runggun'));
            $member->marga              = strtolower($request->input('marga'));
            $member->created_at         = Carbon::now();
            $member->updated_at         = Carbon::now();
            $member->save();

            $this->sendEmailRegister($requestData["email"],$fullname,$urlActivation);   
            Session::flash('notification','Email '.$requestData["email"].' telah berhasil didaftarkan silahkan cek email kamu');
            Session::flash('alert','success');
            return redirect(url('/').'/register');
        }
    }

    function sendEmailRegister($email,$name,$urlActivation){
        $to_name    = $name;
        $to_email   = array($email);
        $monitoring = array('harisaginting@gmail.com','konsolidasi@kitapermata.com');
        $data       = array('name' => $name, 'url_validation' => $urlActivation);

        return Mail::send('email.register', $data, function($message) use ($to_name, $to_email,$data,$monitoring) {     
            $message->to($to_email, $to_name)->subject('Mejuah-juah '.ucwords($data['name']));
            $message->cc($monitoring);
            $message->from('kitapermatagbkp@gmail.com','PERMATA GBKP RUNGGUN TAMBUN');
        });
    }
##END REGISTER
}
