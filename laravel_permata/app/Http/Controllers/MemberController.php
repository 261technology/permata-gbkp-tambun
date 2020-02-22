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

class MemberController extends Controller
{

    public function registerProcess(Request $request)
    {	
    	$isExist 				= Anggota::where('email', $request->input('email'))->first();
    	$result['result'] 		= 'error';
        $urlActivation 			= str_replace('-', '',Uuid::uuid4()).$request->input('firstname');
        $urlResetPassword 		= str_replace('-', '',Uuid::uuid4()).sha1($request->input('password'));

        if(!empty($isExist)){
        	if($isExist->is_active == 1){
        		$result['result'] 	= 'active';
        		$result['data']		= $request->input('firstname');
        		$result['url']		= $urlResetPassword;
      			$result['email']	= $request->input('email');
        	}else{
        		$result['result'] 	= 'inactive';
        		$result['data']		= $request->input('firstname');
      			$result['email']	= $request->input('email');
      			$result['url']		= $urlActivation;
        	} 
        }else{       	
        	$member = new Anggota;
        	$member->nama_depan 	    = ucwords($request->input('firstname'));
        	$member->nama_belakang 	    = ucwords($request->input('lastname'));
        	$member->email 		        = strtolower($request->input('email'));
        	$member->password 	        = Hash::make($request->input('password'));
        	$member->url_activation		= $urlActivation;
        	$member->url_reset_password	= $urlResetPassword;
        	$member->runggun	        = $request->input('runggun');
        	$member->created_at 	    = Carbon::now();
        	$member->updated_at 	    = Carbon::now();
        	$member->save();

        	$this->sendEmailRegister($request->input('email'),$request->input('firstname'),$urlActivation);	
      		$result['result'] 	        = 'success';
      		$result['data']		        = $request->input('firstname');
      		$result['email']	        = $request->input('email');
      		$result['url']		        = null;
      		return redirect('login')->with($result);
        }
        return redirect()->back()->with($result);
    }


    function sendEmailRegister($email,$name,$urlActivation){
    	$to_name 	= $name;
		$to_email 	= array($email);
		$data = array('name' => $name, 'url_validation' => $urlActivation);

		return Mail::send('email.register', $data, function($message) use ($to_name, $to_email,$data) {		
			$message->to($to_email, $to_name)->subject('Mejuah-juah '.ucwords($data['name']));
			$message->from('kitapermatagbkp@gmail.com','PERMATA GBKP RUNGGUN TAMBUN');
		});
    }

    function activation($code_activation){
    	$update = Anggotawhere('url_activation', $code_activation)
          					->update(['is_active' => 1]);
        $result['activation'] = null;
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
