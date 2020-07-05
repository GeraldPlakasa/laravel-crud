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

    public function edit($id){
        $question = QuestionModel::get_by_id($id);
        return view('question.edit', compact('question'));
    }

    public function update($id, Request $request){
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);

        $question = QuestionModel::update($id, $data);
        return redirect('/questions');
    }

    public function destroy($id){
        $question = QuestionModel::destroy($id);
        $answer = AnswerModel::destroy($id);
        return redirect('/questions');
    }
}
