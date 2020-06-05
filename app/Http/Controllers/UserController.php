<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewUser;
use App\User;
use App\PostImage;
use App\Post;
use DB, Hash;

class UserController extends Controller
{
    public function newUserCreate(Request $request) {

    	if(User::where('email',$request->email)->first()){
    		return "Email Already Exist"; 
    	}
    	else{
    		$storeNew = new NewUser;
	    	$storeNew->email = $request->email;
	    	$storeNew->save();

	    	//send mail here
	    	$mail_send = $this->verificationMail($request->email);
	    	return $mail_send;
    	}
    	
    }


    public function verificationMail($email) {
	    $emailId = $email;
	    $link = env('WEB_URL').'/user-verification/'.encrypt($email);
	    $details = [
	    	'link' => $link,
	        'user_email' => $emailId,
	    ];
	    \Mail::to($emailId)->send(new \App\Mail\VerificationMail($details));
	    return "mail sended sucessfully";
		
    }


    public function userVerification(Request $request, $email) {
    	$status = 'Link Active';
    	$user_email = decrypt($email);
    	$checkUser = NewUser::where('email',$user_email)->first();
    	if(!$checkUser){
    	  $status = 'Link Expired';
    	}
    	return view('frontend.password_set', compact('user_email','status'));
    }



    public function passwordSet(Request $request) {
    	$checkNewUser = NewUser::where('email', $request->email)->first();
    	if($checkNewUser) {
    	  $registerUser = new User;
    	  $registerUser->email = $request->email;
    	  $registerUser->password = Hash::make($request->password);
    	  $registerUser->user_type = 'user';
    	  $registerUser->block_status = 0;
    	  $registerUser->save();
    	  NewUser::where('email', $request->email)->delete();
    	  return "success";    	  
    	}
    	else{
    		$checkRegisterUser = User::where('email',$request->email)->first();
    		if($checkRegisterUser){
    			return "Email already registered";
    		}
    		else{
    			return "User not found";
    		}
    		
    	}
    }
}
