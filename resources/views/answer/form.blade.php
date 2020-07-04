@extends('layouts.master')

@section('content')

<div class="m-3">
  <h3 class="mb-3 text-center">Pertanyaan</h3>
  <h4>{{$question->title}}</h4>
  <p class="text-left">Question ID : {{$question->id}}</p>
  <p class="bg-info py-3 text-center">{{$question->content}}</p>
  <br>
  <form action="/questions/{{$question->id}}" method="post">
    @csrf
    <div class="form-group">
      <label for="answer">Jawaban:</label>
      <input type="text-box" class="form-control" placeholder="Enter Answer" name="content" id="answer">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="question_id" value="{{$question->id}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection