<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = 'administrador';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectPath(){

        if(auth()->user()->id_rol == 3){
             return '/empleado';
        }else{
            if(auth()->user()->id_rol == 2){
                return '/administrador';
            }else{
                if(auth()->user()->id_rol == 1){
                    return '/usuario';
                }else{
                    if(auth()->user()->id_rol == 4){
                        return '/admin';
                    }
                }
            }
        }

        return '/';

    }
}
