<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

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

    public function register(Request $request){
        $usuario = new User();

        $usuario->username = $request->input('username');
        $usuario->password = Hash::make($request->input('password'));

            $usuario->save();
            return redirect('home');

    }
    public function login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username',$username)->first();

        if($user !=null && Hash::check($password, $user->password)){
            Auth::login($user);
            return redirect('home');
        }else{
            return redirect('/#modal1')->withInput();
        }

    }
    public function logout(){

        Auth::logout();

        return redirect('/')->withInput();;

    }
}
