<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModels;

class ItemsController extends Controller
{
    public function Index(){
    	$item = ItemModels::get_all();
    	return view('items.index', compact('item'));
    }

    public function create(){
    	return view('items.form');
    }

    public function store(Request $request){
    	$data = $request->all();
    	unset($data['_token']);
    	
    	$cek = ItemModels::save($data);

    	if ($cek == true) {
    		$item = ItemModels::get_all();
    		return view('items.index', compact('item'));
    	}
    }
}
