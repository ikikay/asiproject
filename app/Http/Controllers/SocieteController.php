<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Societe;

class SocieteController extends Controller {

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
        $lesSocietes = Societe::all();

        return view('societe.index')
                        ->with('tab_societes', $lesSocietes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $laSociete = new Societe();

        return view('societe.create')
                        ->with("laSociete", $laSociete);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $boolRedirection = true) {
        $this->validate($request, Societe::$rulesOnCreate);

        $laSociete = new Societe();

        $laSociete->societes_libelle = $request->get('societes_libelle');
        $laSociete->societes_rue = $request->get('societes_rue');
        $laSociete->societes_code_postal = $request->get('societes_code_postal');
        $laSociete->societes_ville = $request->get('societes_ville');
        $laSociete->societes_telephone = $request->get('societes_telephone');
        $laSociete->societes_email = $request->get('societes_email');

        $laSociete->save();

        $request->session()->flash('success', 'La société à été Ajouté !');
        if ($boolRedirection) {
            return redirect()->route("societe.index");
        } else {
            return $laSociete;
        }
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
        $laSociete = Societe::find($id);

        return view('societe.edit')
                        ->with("laSociete", $laSociete);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, Societe::$rulesOnUpdate);

        $laSociete = Societe::find($id);

        $laSociete->update($request->all());

        $laSociete->save();

        $request->session()->flash('success', 'La société à été Modifié !');
        return redirect()->route("societe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $laSociete = Societe::find($id);

        $laSociete->delete();

        $request->session()->flash('success', 'La société à été Supprimé !');
        return redirect()->route("societe.index");
    }

}
