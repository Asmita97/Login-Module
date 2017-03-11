<?php
    namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Activation;
use Sentinel;
use Mail;
use App\User;

class ActivationController extends Controller
{
    public function activate($email,$activationCode)
    {
       // $user=User::whereEmail($email)->first();
        $user=User::ByEmail($email);
        $sentinelUser = Sentinel::findById($user->id);
        if(Activation::complete($sentinelUser,$activationCode))
        {
            return redirect('/login');
              
        }else
        {
            
        }
    }
}
