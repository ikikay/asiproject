<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
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
    public function index()
    {
        $lesPromos = Promo::all();

        return view('promo.index')
                        ->with('tab_promos', $lesPromos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laPromo = new Promo();

        return view('promo.create')
                        ->with("laPromo", $laPromo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $boolRedirection = true)
    {
        $this->validate($request, Promo::$rules);

        $laPromo = new Promo();

        $laPromo->libelle = $request->get('libelle');
        $laPromo->nom = $request->get('nom');

        $laPromo->save();

        $request->session()->flash('success', 'La promotion a été ajouté !');
        if ($boolRedirection) {
            return redirect()->route("promo.index");
        } else {
            return $laPromo;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laPromo = Promo::find($id);

        return view('promo.edit')
                        ->with("laPromo", $laPromo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Promo::$rules);

        $laPromo = Promo::find($id);

        $laPromo->update($request->all());

        $laPromo->save();

        $request->session()->flash('success', 'La promotion a été modifié !');
        return redirect()->route("promo.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laPromo = Promo::find($id);

        $laPromo->delete();

        $request->session()->flash('success', 'La promotion a été supprimé !');
        return redirect()->route("promo.index");
    }
}
