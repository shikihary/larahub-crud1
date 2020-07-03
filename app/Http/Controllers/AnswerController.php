<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;
use App\Models\QuestionModel;

class AnswerController extends Controller
{
    public function index($question_id) {
        $answers = AnswerModel::get_all()->where('question_id', $question_id);
        $questions = QuestionModel::get_all()->where('id', $question_id)->first();
        return view('answer.index', compact('answers', 'questions'));
    }

    public function create($question_id) {
        return view('answer.create', compact('question_id'));
    }

    public function store(Request $request, $question_id) {
        //dd($request->all());
        //dd($question_id);
        $data = $request->all();
        unset($data["_token"]);
        $question = AnswerModel::save(['content'=>$data['content'], 'question_id'=>$question_id]);
        if($question) {
            return redirect('questions');
        }
    }
}