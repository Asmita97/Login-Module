<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Mail;
use Reminder;
use Sentinel;  

class ForgotPasswordController extends Controller
{
    public $reminder;

    public function forgotPassword(){
        return view('auth.forgot-password');
    }
    public function postforgotPassword(Request $request){
       
        $user=User::whereEmail($request->email)->first();
        
        $sentinelUser=Sentinel::findById($user->id);
        
        if(count($user)==0)
            return redirect()->back()->with([
            'success'=>'Reset Code was sent to your email'
        ]);
        $reminder=Reminder::exists($sentinelUser)?:Reminder::create($sentinelUser);
        $this->sendEmail($user,$reminder->code);
         return redirect()->back()->with([
            'success'=>'Reset Code was sent to your email'
        ]);
    }
    public function resetPassword($email,$resetCode)
    {
        
        $user=User::ByEmail($email);
        $sentinelUser=Sentinel::findById($user->id);
       if(count($user)==0)
       {
           abort(404);
       }
        if($reminder=Reminder::exists($sentinelUser))
        {
            if($resetCode==$reminder->code){
                return view('auth.reset');   
            }
            else 
                return redirect('/');
        }
   
     return $user;
    }
    public function postresetPassword(Request $request,$email,$resetCode)
    {
        $this->validate($request,['password'=>'confirmed|required|min:6',
                                 'password_confirmation=>required|min:6'
                                 ]);
            $user=User::ByEmail($email);
         if(count($user)==0)
             abort(404);
            $sentinelUser=Sentinel::findById($user->id);
        
        if($reminder=Reminder::exists($sentinelUser)){
            if($resetCode==$reminder->code)
            {
                Reminder::complete($sentinelUser,$resetCode,$request->password);
            return redirect('/login')->with('success','login with new password');
            }
            else 
                return redirect('/');
        }
        else
            return redirect('/');
        return $user;
         
    }
    private function sendEmail($user,$code)
    {
        Mail::send('emails.password',[
            'user'=>$user,
            'code'=>$code
        ],function($message)use($user){
            $message->to($user->email);
            $message->subject("Hello $user->firstname,reset your password.");
        });
    }
}
