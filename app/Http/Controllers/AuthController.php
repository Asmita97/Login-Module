<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Foundation\Auth\ThrottlesLogins;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    public function login(){
        
    return view('auth.login');
    }
    
    public function handlelogin(Request $request){
        $this->validate($request,User::$login_validation_rules);
        $data= $request->only('email','password');

        $user = User::where('email',$request->email)->first();
        $user = DB::table('activations')->where('user_id',$user->id)->first();
//        foreach($user as $user_auth){
//            $flag = $user_auth->completed;
//        }
      //  echo $user->completed;
        if (!$user->completed) {
//            echo "not completed";
//            die;
            auth()->logout();
            Redirect::to('/login')->with('ERROR', 'You need to confirm your account. We have sent you an activation code, please check your email.');
            return back()->with('warning', '');
        }
        if(\Auth::attempt($data)){
          //  return 'Home page';
            
            return view('users.home');
        }
       
    return redirect()->intended($this->redirectPath());
        return back()->withInput()->withErrors(['email'=>'Username or password is incorrect ']);
    }
  
    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }
    
}
