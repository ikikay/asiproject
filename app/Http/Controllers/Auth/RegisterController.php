<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemandeInscription;

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
                    'users_prenom' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
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
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'role' => 'en attente'
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
                    'users_date_de_naissance' => $request->get('users_date_de_naissance'),
                    'users_telephone' => $request->get('users_telephone'),
                    'users_code_postal' => $request->get('users_code_postal'),
                    'users_rue' => $request->get('users_rue'),
                    'users_ville' => $request->get('users_ville'),
                    'email' => $request->get('email'),
                    'password' => bcrypt($request->get('password')),
                    'role' => 'en attente'
        ]);

        $this->guard()->login($user);
        
        $emailAdmin = User::where('role', 'admin')->first();
        
        Mail::to($emailAdmin)->send(new DemandeInscription($user));
        
        return redirect()->route("home");
    }

}
