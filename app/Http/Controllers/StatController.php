<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Reponse;
use App\Models\ReponsePredefinie;
use App\Models\Question;

class StatController extends Controller {

    public function stats() {
        $libelle = Reponse::where('question_id', 9)
                ->first();

        $data = Reponse::where('question_id', 9)
                ->select(
                        DB::raw('reponse as reponse'), DB::raw('count(*) as number'))
                ->groupBy('reponse')
                ->get();
        $array[] = ['Reponse', 'Number'];
        foreach ($data as $key => $value) {
            $array[++$key] = [$value->reponse, $value->number];
        }
//     dd($data);
        return view('stat.stat')->with('reponse', json_encode($array))->with('libelle', $libelle);
    }

    public function index($param) {

        $param = $_POST['quest'];

        return view('stat.stat')->with('id', $id);
    }

    public function search() {
        $idDesQuestions = ReponsePredefinie::distinct()
                ->pluck('question_id');

        $questions = Question::findMany($idDesQuestions);

        
        return view('stat.livesearch')->with('questions', $questions);
    }

    public function liveSearch(Request $request) {
         
        
        $idquestion = $request->id;

       
           $data = Reponse::where('question_id', $idquestion)
                ->select(
                        DB::raw('reponse as reponse'), DB::raw('count(*) as number'))
                ->groupBy('reponse')
                ->get();
           
         $arrayNumbers = [];
         $arrayReponses = [];
         
         foreach($data as $key => $value){
             array_push($arrayNumbers, $value->number);
             array_push($arrayReponses, $value->reponse);
         }
           
         
        $array[] = ['Reponse', 'Number'];
        foreach ($data as $key => $value) {
            $array[++$key] = [$value->reponse, $value->number];
        }
        
        
     
 
//        $view = view('stat.livesearchajax', ['reponses' => json_encode($arrayReponses), 'nombres' => json_encode($arrayNumbers)])->render();
        $view = view('stat.livesearchajax', ['reponses' => json_encode($arrayReponses), 'nombres' => json_encode($arrayNumbers)])->render();
        
      
//            var_dump($posts->toSql());
//            var_dump($posts->getBindings());
        return response()->json(['html' => $view]);
    }

}
