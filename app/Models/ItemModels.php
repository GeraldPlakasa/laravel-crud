<?php 

namespace app\Models;
use Illuminate\Support\Facades\DB;

class itemModels{

	public static function get_all(){
		$items = DB::table('items')->get();
		return $items;
	}

	public static function save($items){
		$new_items = DB::table('items')->insert($items);
		return $new_items;
	}

}