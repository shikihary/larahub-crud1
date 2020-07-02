<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    public function index() {
        $questions = QuestionModel::get_all();
        return view('question.index', compact('questions'));
    }

    public function create() {
        return view('question.create');
    }

    public function store(Request $request) {
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $question = QuestionModel::save($data);
        if($question) {
            return redirect('questions');
        }
    }
}
