<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    // public function redirectPath(){

    //     if(auth()->user()->id_rol == 3){
    //          return '/empleado';
    //     }else{
    //         if(auth()->user()->id_rol == 2){
    //             return '/administrador';
    //         }else{
    //             if(auth()->user()->id_rol == 1){
    //                 return '/usuario';
    //             }else{
    //                 if(auth()->user()->id_rol == 4){
    //                     return '/admin';
    //                 }
    //             }
    //         }
    //     }

    //     return '/';

    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
