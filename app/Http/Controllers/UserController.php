<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function  getSignup(){
        return view('user.signup');
    }


    public function postSignup(Request $request){
    	// validacija usera
        $this->validate($request,[
           'email'=>'email|required|unique:users',
           'password'=>'required|min:4'
        	]);
        $user = new User([
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        	]);
        $user->save();
        return redirect()->route('product.index');
    }

     public function getSignin(){
        return view('user.signin');
    }     
     public function postSignin(Request $request){
        $this->validate($request,[
           'email'=>'required',
           'password'=>'required'
            ]);  
    
               return redirect()->route('user.profile');
   
    }
    public function getProfile(){

        return view('user.profile');  
    }


}
                                                                                                                                                                             