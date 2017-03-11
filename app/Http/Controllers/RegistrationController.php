<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;
class RegistrationController extends Controller
{
    public function register()
    {
        return view('auth.login');
    }
        
    public function postregister(Request $request)
    {
        $sentineluser= Sentinel::register($request->all());
        $activation= Activation::create($sentineluser);
        $this->sendEmail($sentineluser,$activation->code);
        return redirect('/login');
    }
    
    private function sendEmail($user,$code)
    {
        Mail::send('emails.activation',['user'=>$user,
                                        'code'=>$code
                                       ],
                   function($message) use ($user)
                   {
                       $message->to($user->email);
                       $message->subject("Hello $user->firstname,activate your account.");
                   });
    }
}