<?php

namespace app\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel{

	public static function get_by_id($id){
		$items = DB::table('questions')->where('id', '=', $id)->first();
		return $items;
	}

	public static function get_all(){
		$questions = DB::table('questions')->get();
		return $questions;
	}

	public static function save($questions){
		$new_questions = DB::table('questions')->insert($questions);
		return $new_questions;
	}

	public static function update($id, $question){
		$question = DB::table('questions')
					->where('id', $id)
					->update($question);
		return $question;
	}

	public static function destroy($id){
		$question = DB::table('questions')->where('id', $id)->delete();
		return $question;
	}
}