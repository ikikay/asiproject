<?php

namespace App\Http\Controllers;
use App\Models\Reponse;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return redirect()->route('dashboard');
    }

    public function toDashboard() {
        $id = Auth::id();
        $reponse = Reponse::where('user_id', $id)->get();
        //dd($reponse);
        if ($reponse->isEmpty()) {
            $bool = false;
        } else {
            $bool = true;
        }
        
        $contact = false;
        if(count(Auth::user()->contacts()->get()) > 0){
            $contact = true;
        }
        
     
        
        return view('admin.user.show')->with( ['aRep' => $bool, 'contact' => $contact]);
    }

}
