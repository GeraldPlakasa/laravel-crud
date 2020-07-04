<?php

namespace app\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel{

	public static function save($items){
		$new_items = DB::table('answers')->insert($items);
		return $new_items;
	}

	public static function get_by_id($id){
		$items = DB::table('answers')->where('question_id', '=', $id)->get();
		return $items;
	}
}