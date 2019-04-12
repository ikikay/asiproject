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

        $lOffre->offres_poste = $request->get('offres_poste');
        $date = Carbon::createFromFormat('d/m/Y', $request->get('offres_date_offre'));
        $lOffre->offres_date_offre = $date;
        $lOffre->offres_description = $request->get('offres_description');
        $lOffre->niveau()->associate($request->get('niveau_id'));
        $lOffre->offres_mois_experience = $request->get('offres_mois_experience');

        if (!empty($request->input('fonction'))) {
            $lOffre->contact()->associate(app('App\Http\Controllers\ContactController')->store($request, false));
        } else {
            $lOffre->contact()->associate($request->get('contact_id'));
        }

        $lOffre->save();
dd($lOffre);
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
                        ->with("jours", $lOffre->offres_date_offre->day)
                        ->with("mois", $lOffre->offres_date_offre->month)
                        ->with("annee", $lOffre->offres_date_offre->year);
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

        $lOffre->update($request->except(['offres_date_offre']));
        $lOffre->offres_date_offre = Carbon::createFromFormat('d/m/Y', $request->get('offres_date_offre'));
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
