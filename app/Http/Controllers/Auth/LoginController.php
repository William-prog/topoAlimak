<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Carbon\Carbon;
use Carbon\CarbonTimeZone;
use Illuminate\Http\Request;


use App\Models\usuariosLogueado;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function authenticated(Request $request)
    {

        $usuariosLogueado = new usuariosLogueado();
        date_default_timezone_set('America/Mexico_City'); 

        $usuariosLogueado->email = $request->email;
        $usuariosLogueado->nombre = \Auth::user()->name;
        $usuariosLogueado->fecha =  Carbon::now()->toDateTimeString();
        $usuariosLogueado->hora =  date('H:i');
        $usuariosLogueado->rol =  \Auth::user()->role;
        $usuariosLogueado->save();
    }


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
        $this->middleware('guest')->except('logout');
    }
}
