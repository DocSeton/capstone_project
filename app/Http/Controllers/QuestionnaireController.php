<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DataTables;
use \App\Models\Questionnaire;
use \App\Models\Question;
use \App\Models\User;
use \App\Models\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class QuestionnaireController extends Controller

{

    public function addorremove(){
      return view('question.questionnaire');
    }



    public function create(Request $request){
      $loggeduser = auth()->user()->name;
      $events = Event::where('author', $loggeduser)->get();
      return view('evaluation.questionnaire',['events'=>$events]);


    }

    public function add(){

      return view('evaluation.add');

    }

    public function custom(){

      return view('evaluation.custom');

    }

    public function questionnaire(){

      return view('evaluation.questionnaire');

    }

    public function atemplate(){

      return view('evaluation.atemplate');

    }

    public function btemplate(){

      return view('evaluation.btemplate');

    }



    public function store(Request $request){

      $request->validate([
        'author' => 'required',
        'title' => 'required',
        'event' => 'required',


      ]);

      $questionnaire = new Questionnaire();
      $questionnaire->author = request('author');
      $questionnaire->title = request('title');
      $questionnaire->event = request('event');
      $questionnaire->save();

      return redirect()->route('evaluation.show');
      //return redirect('/questionnaire/'.$questionnaire->id);




}

      public function index(){
        $questionnaire = DB::select('select * from questionnaires');
        return view('questionnaire.survey',['questionnaire'=>$questionnaire]);
      }



    public function show(Request $request){

      $loggeduser = auth()->user()->name;
      $questionnaires = Questionnaire::where('author', $loggeduser)->get();
      return view('evaluation.show',['questionnaires'=>$questionnaires]);

    }





    public function showquestionnaire(Questionnaire $questionnaire){
      $userdept = auth()->user()->department;
      $user = User::where('department', $userdept)->where('role', 'Student')->get();
      return view('evaluation.showquestionnaire', compact('questionnaire','user'));

    }

    public function customquestionnaire(Questionnaire $questionnaire){

      return view('evaluation.customquestionnaire', compact('questionnaire'));

    }


    public function view(Questionnaire $questionnaire){

      $questionnaire->load('questions.answers');

      return view('evaluation.view',compact('questionnaire'));

    }









}
