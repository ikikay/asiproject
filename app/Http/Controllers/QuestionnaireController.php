<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Question;
use App\Models\ReponsePredefinie;

class QuestionnaireController extends Controller {

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
	$lesQuestionnaires = Questionnaire::with('themes')->get();

	return view('questionnaire.index')
			->with('tab_questionnaires', $lesQuestionnaires);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVu(Request $request) {
        $lesQuestionnaires = Questionnaire::with("themes")->get();
        /*$lesReponsesPredefinies = ReponsePredefinie::all();*/
        /*return response()->json($lesQuestionnaires); */
        /*return view('questionnaire.indexVu')->with('questionnaires', $lesQuestionnaires);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
	//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
	//
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
	//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
	//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
	$leQuestionnaire = Questionnaire::find($id);

	$leQuestionnaire->delete();

	$request->session()->flash('success', 'Le questionnaire à été Supprimé !');
	return redirect()->route("questionnaire.index");
    }

    public function response() {
	$leQuestionnaire = Questionnaire::with('themes', 'themes.questions', 'themes.questions.reponsesPredefinie')->find(1);		//Attention c'est moche, id en dur ...

	return view('questionnaire.response.create')
			->with("leQuestionnaire", $leQuestionnaire);
    }

    public function ValideResponse() {
	
    }

}
