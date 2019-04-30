<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Question;
use \App\Models\Reponse;
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

	return view('admin.questionnaire.index')
			->with('tab_questionnaires', $lesQuestionnaires);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVu(Request $request) {
	$lesQuestionnaires = Questionnaire::with("themes")->get();
	/* $lesReponsesPredefinies = ReponsePredefinie::all(); */
	/* return response()->json($lesQuestionnaires); */
	/* return view('admin.questionnaire.indexVu')->with('questionnaires', $lesQuestionnaires); */
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

    public function response($id) {
	$leQuestionnaire = Questionnaire::with('themes', 'themes.questions')
			->with('themes.questions.reponsesPredefinie')->find($id);

	if (empty($leQuestionnaire)) {
	    abort(404);  //Erreur 404
	} else {
	    return view('admin.questionnaire.response.create')
			    ->with("leQuestionnaire", $leQuestionnaire);
	}
    }

    public function valideResponse(Request $request) {
	$idUser = Auth::id();
	$i = 1;
	$reponseMultiple = "";
	foreach ($request->all() as $key => $reponse) {
	    if ($i > 1) {
		$idQuestion = explode("_", $key);

		$uneReponse = new Reponse();
		$uneReponse->user_id = $idUser;
		$uneReponse->question_id = $idQuestion[1];


		if (isset($idQuestion[2])) {
		    $reponseMultiple = $reponseMultiple . $reponse;
		    if (false) {
			//save
			$reponseMultiple = "";
		    } else {
			$reponseMultiple = $reponseMultiple . ", ";
		    }
		    if ($i == 12) {
			dd($reponseMultiple);
		    }
		} else {
		    $uneReponse->reponse = $reponse;
		}
	    }
	    $i++;
	    //dd($request->all());
	}
    }

        public function indexFront() {
	$lesQuestionnaires = Questionnaire::with('themes')->get();

	return view('front.questionnaire.index')
			->with('tab_questionnaires', $lesQuestionnaires);
    }
}
