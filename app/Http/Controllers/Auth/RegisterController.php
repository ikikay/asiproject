<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'users_nom' => 'required|string|max:255',
                    'users_email' => 'required|string|email|max:255|unique:users',
                    'users_password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data) {
        return User::create([
                    'users_nom' => $data['users_nom'],
                    'users_prenom' => $data['users_prenom'],
                    'users_email' => $data['users_email'],
                    'users_password' => Hash::make($data['users_password']),
        ]);
    }

    // - - - - - OVERRIDE - - - - -

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm() {
        $leUser = new User();

        return view('auth.register')
                        ->with("leUser", $leUser);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $this->validate($request, User::$rulesOnCreate);

        $user = User::create([
                    'users_nom' => $request->get('users_nom'),
                    'users_prenom' => $request->get('users_prenom'),
                    'users_email' => $request->get('users_email'),
                    'users_password' => bcrypt($request->get('users_password')),
        ]);

        $this->guard()->login($user);

        return redirect()->route("home");
    }

}
