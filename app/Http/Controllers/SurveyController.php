<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Survey;
use App\Models\SurveyResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{


  public function surveytemplateview(Questionnaire $questionnaire){

    $answers = DB::select('select * from answers');
    $questions = DB::select('select * from questions');
    $questionnaires = DB::select('select * from questionnaires');
    return view('survey.template',['questions'=>$questions],['answers'=>$answers],['questionnaires'=>$questionnaires]);


  }

  public function surveys(Questionnaire $questionnaire){

    $questions = DB::select('select * from questions');
    $questionnaires = DB::select('select * from questionnaires');
    return view('survey.surveys',['questions'=>$questions],['questionnaires'=>$questionnaires]);

  }


/*
  public function surveytemplateview(Question $questions){

    return view('survey.template',compact('questions'));

  }
*/
/*
  public function surveytemplateview(Questionnaire $questionnaire){

    return view('survey.template',compact('questionnaire'));

  }
*/
  public function store(Questionnaire $questionnaire){

  $data = request()->validate([
      'author' => 'required',
      'answer.*.answer' => 'required',
      'question.*.question_id' => 'required',

    ]);
   dd(request()->all());
    $survey = $questionnaire->surveys()->createMany($data['question']);
    //$survey->responses()->createMany($data['answer_id']);

return 'thank you!';

  }


}
