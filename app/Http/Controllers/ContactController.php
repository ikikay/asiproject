<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Societe;

class ContactController extends Controller {

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
        $lesContacts = Contact::all();

        return view('contact.index')
                        ->with('tab_contacts', $lesContacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $leContact = new Contact();
        $lesSocietes = Societe::all();

        return view('contact.create')
                        ->with("leContact", $leContact)
                        ->with('lesSocietes', $lesSocietes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $boolRedirection = true) {
        $this->validate($request, Contact::$rules);

        $leContact = new Contact();

        $leContact->fonction = $request->get('fonction');
        $leContact->nom = $request->get('nom');
        $leContact->prenom = $request->get('prenom');
        $leContact->contactTelephone = $request->get('contactTelephone');
        $leContact->contactEmail = $request->get('contactEmail');

        if (!empty($request->input('libelle'))) {
            $leContact->societe()->associate(app('App\Http\Controllers\SocieteController')->store($request, false));
        } else {
            $leContact->societe()->associate($request->get('societe_id'));
        }

        $leContact->save();

        $request->session()->flash('success', 'Le contact à été Ajouté !');
        if ($boolRedirection) {
            return redirect()->route("contact.index");
        } else {
            return $leContact;
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
        $leContact = Contact::find($id);

        return view('contact.edit')
                        ->with("leContact", $leContact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, Contact::$rules);

        $leContact = Contact::find($id);

        $leContact->update($request->all());

        $leContact->save();

        $request->session()->flash('success', 'Le contact à été Modifié !');
        return redirect()->route("contact.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $leContact = Contact::find($id);

        $leContact->delete();

        $request->session()->flash('success', 'Le contact à été Supprimé !');
        return redirect()->route("contact.index");
    }

}
