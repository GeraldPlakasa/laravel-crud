<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;

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

    public function detail($id){
        $question = QuestionModel::get_by_id($id);
        $answers = AnswerModel::get_by_id($id);
        return view('question.detail', compact('question', 'answers'));
    }
}
