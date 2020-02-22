<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use Harisa;
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
     public $status = array(
     	'success' 	=> 	200,
     	'notfound'	=>	404
     );


    public function register(Request $request)
    {	
    	 $requestData = $request->json()->all();
    	 $validator = Validator::make($requestData, [ 
	              'firstname' 	=> 'required',
	              'lastname' 	=> 'required',
	              'email' 		=> 'required|email',
	              'runggun' 	=> 'required',  
	              'password' 	=> 'required',  
	              'c_password' 	=> 'required|same:password', 
	    ]); 

		if($validator->fails()) {          
			return Harisa::apiResponse(401, null, $validator->errors());
	   	}


    	$isExist 				= Anggota::where('email', $request->input('email'))->first();

    	echo $isExist;die;
    	
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


}
