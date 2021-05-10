<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Survey;
use \App\Models\User;
use \App\Models\Event;
use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{


    public function createtemplate(Questionnaire $questionnaire){

      return view('question.showquestionnaire',compact('questionnaire'));

    }

    public function createcustom(Questionnaire $questionnaire){

      return view('question.customquestionnaire',compact('questionnaire'));

    }

    public function showquestions(){
  //    $loggeduser = auth()->user()->name;
  //    $userevent = EventRegistration::where('user', $loggeduser)->get();

      $questions = DB::select('select * from questions');
      return view('question.showquestions',['questions'=>$questions]);


    //  return view('question.showquestions',['answers'=>$answers]);

    }

    public function showanswers(){

      $answers = DB::select('select * from answers');
      return view('question.showanswers',['answers'=>$answers]);


    }


    public function store(Questionnaire $questionnaire){

      $data = request()->validate([


          'question.*.question' => 'required',

      ]);

      $question = $questionnaire->questions()->createMany($data['question']);

      return redirect()->route('question.showquestions');


    }



    // Delete
        public function destroyattendance($id){
           Question::destroy($id);

           Session::flash('message', 'Record deleted successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('question.showquestions')->withInput();
        }







}
