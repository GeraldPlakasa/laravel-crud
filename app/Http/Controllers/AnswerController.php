<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;

class AnswerController extends Controller
{
    public function index($question_id){
    	$answers = AnswerModel::get_by_id($question_id);
    	return view('answer.index', compact('answers', 'question_id'));
    }

    public function create($question_id){
    	$question = QuestionModel::get_by_id($question_id);
    	// dd($question);
    	return view('answer.form', compact('question', 'question_id'));
    }

    public function store(Request $request){
    	$data = $request->all();
    	unset($data['_token']);
    	
    	$cek = AnswerModel::save($data);

    	if ($cek == true) {
    		$answers = AnswerModel::get_by_id($data['question_id']);
    		$question_id = $data['question_id'];
    		return view('answer.index', compact('answers', 'question_id'));
    	}
    }
}
