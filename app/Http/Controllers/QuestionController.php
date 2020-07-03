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
        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();
        unset($data["_token"]);
        $question = QuestionModel::save($data);
        if($question) {
            return redirect('questions');
        }
    }

    public function edit($id) {
        $question = QuestionModel::find_by_id($id);

        return view('question.edit', compact('question'));
    }

    public function update($id, Request $request) {
        $question = QuestionModel::update($id, $request->all());
        return redirect('/questions');
    }

    public function destroy($id) {
        $deleted = QuestionModel::destroy($id);
        return redirect('/questions');
    }
}
