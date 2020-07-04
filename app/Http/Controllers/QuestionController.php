<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    public function index(){
    	$questions = QuestionModel::get_all();
    	return view('question.index', compact('questions'));
    }

    public function create(){
    	return view('question.form');
    }

    public function store(Request $request){
    	$data = $request->all();
    	unset($data['_token']);
    	
    	$cek = QuestionModel::save($data);

    	if ($cek == true) {
    		$questions = QuestionModel::get_all();
    		return view('question.index', compact('questions'));
    	}
    }
}
