<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions', 'QuestionController@index');
Route::post('/questions', 'QuestionController@store');
Route::get('/questions/create', 'QuestionController@create');

Route::get('/answers/{question_id}', 'AnswerController@index');
Route::post('/answers/{question_id}', 'AnswerController@store');
Route::get('/answers/create/{question_id}', 'AnswerController@create');

