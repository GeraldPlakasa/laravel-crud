<?php

namespace app\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel{

	public static function get_by_id($id){
		$items = DB::table('questions')->where('id', '=', $id)->get();
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
}