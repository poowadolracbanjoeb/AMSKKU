<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 1) {
                return redirect()->route('Student');
            } elseif (auth()->user()->role == 2) {
                return redirect()->route('Dormitory_Director');
            } elseif (auth()->user()->role == 3) {
                return redirect()->route('Dormitory_Chairman');
            } elseif (auth()->user()->role == 4) {
                return redirect()->route('Dormitory_Counselor');
            } elseif (auth()->user()->role == 5) {
                return redirect()->route('Head_Dormitory_Service');
            } elseif (auth()->user()->role == 6) {
                return redirect()->route('Head_Information_Unit');
            } elseif (auth()->user()->role == 7) {
                return redirect()->route('Director_Dormitory_ServiceDivision');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login')->with('error', 'email-address and password wrong');
    }
}