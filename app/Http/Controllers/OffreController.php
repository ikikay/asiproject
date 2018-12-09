<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Offre;
use App\Models\Niveau;
use App\Models\Contact;
use App\Models\Societe;

class OffreController extends Controller {

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
        $lesOffres = Offre::all();

        return view('offre.index')
                        ->with('tab_offres', $lesOffres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $lOffre = new Offre();
        $now = Carbon::now();
        $lesNiveaux = Niveau::all();
        $lesContacts = Contact::all();
        $lesSocietes = Societe::all();

        return view('offre.create')
                        ->with('lOffre', $lOffre)
                        ->with('lesNiveaux', $lesNiveaux)
                        ->with('lesContacts', $lesContacts)
                        ->with('lesSocietes', $lesSocietes)
                        ->with("jours", $now->day)
                        ->with("mois", $now->month)
                        ->with("annee", $now->year);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, Offre::$rules);

        $lOffre = new Offre();

        $lOffre->poste = $request->get('poste');
        $date = Carbon::createFromFormat('d/m/Y', $request->get('date_offre'));
        $lOffre->date_offre = $date;
        $lOffre->description = $request->get('description');
        $lOffre->niveau()->associate($request->get('niveau_id'));
        $lOffre->mois_experience = $request->get('mois_experience');

        if (!empty($request->input('fonction'))) {
            $lOffre->contact()->associate(app('App\Http\Controllers\ContactController')->store($request, false));
        } else {
            $lOffre->contact()->associate($request->get('contact_id'));
        }

        $lOffre->save();

        $request->session()->flash('success', 'L\'offre à été Ajouté !');
        return redirect()->route("offre.index");
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
        $lOffre = Offre::find($id);
        $lesNiveaux = Niveau::all();
        $lesContacts = Contact::all();
        $lesSocietes = Societe::all();

        return view('offre.edit')
                        ->with('lOffre', $lOffre)
                        ->with('lesNiveaux', $lesNiveaux)
                        ->with('lesContacts', $lesContacts)
                        ->with('lesSocietes', $lesSocietes)
                        ->with("jours", $lOffre->date_offre->day)
                        ->with("mois", $lOffre->date_offre->month)
                        ->with("annee", $lOffre->date_offre->year);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, Offre::$rules);

        $lOffre = Offre::find($id);

        $lOffre->update($request->except(['date_offre']));
        $lOffre->date_offre = Carbon::createFromFormat('d/m/Y', $request->get('date_offre'));
        $lOffre->save();

        $request->session()->flash('success', 'L\'offre à été Modifié !');
        return redirect()->route("offre.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $lOffre = Offre::find($id);

        $lOffre->delete();

        $request->session()->flash('success', 'L\'offre à été Supprimé !');
        return redirect()->route("offre.index");
    }

}
