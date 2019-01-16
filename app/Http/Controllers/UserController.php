<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $lesUsers = User::all();

        return view('user.index')
                        ->with('tab_users', $lesUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $leUser = new User();

        return view('user.create')
                        ->with("leUser", $leUser);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, User::$rulesOnCreate);

        $leUser = new User();

        $leUser->users_nom = $request->get('users_nom');
        $leUser->users_prenom = $request->get('users_prenom');
        $leUser->email = $request->get('email');
        $leUser->password = bcrypt($request->get('password'));

        $leUser->save();

        $request->session()->flash('success', 'L\'utilisateur à été Ajouté !');
        return redirect()->route("user.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $leUser = User::find($id);

        return view('user.edit')
                        ->with("leUser", $leUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, User::$rulesOnUpdate);

        $leUser = User::find($id);

        if ($request->get('password') != "") {
            $leUser->password = bcrypt($request->get('password'));
        }

        $leUser->update($request->except(['password']));

        $request->session()->flash('success', 'L\'utilisateur à été Modifié !');
        return redirect()->route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $leUser = User::find($id);

        $leUser->delete();

        $request->session()->flash('success', 'L\'utilisateur à été Supprimé !');
        return redirect()->route("user.index");
    }

}
