@extends('layouts.master')

@section('content')

<div class="m-3">
  @foreach($question as $key => $value)
  <h3>{{$value->title}}</h3>
  <p>{{$value->content}}</p>
  <form action="/answer/{{$key}}" method="post">
    @csrf
    <div class="form-group">
      <label for="answer">Jawaban:</label>
      <input type="text-box" class="form-control" placeholder="Enter Answer" name="content" id="answer">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" placeholder="{{$question_id}}" name="question_id" id="content" value="{{$question_id}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endforeach
</div>

@endsection