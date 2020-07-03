<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel {
    public $timestamps = true;

    public static function get_all() {
        $questions = DB::table('questions')->get();
        return $questions;
    }

    public static function save($data) {
        $new_question = DB::table('questions')->insert($data);

        return $new_question;
    }

    public static function find_by_id($id) {
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }

    public static function update($id, $request) {
        $update =new \DateTime();
        $question = DB::table('questions')
                        ->where('id', $id)
                        ->update([
                            'title' => $request["title"],
                            'content' => $request["content"],
                            'updated_at' => $update,
                        ]);
        return $question;
    }

    public static function destroy($id) {
        $deleted = DB::table('questions')
                        ->where('id', $id)
                        ->delete();
        return $deleted;
    }
}