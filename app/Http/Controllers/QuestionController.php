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
}
