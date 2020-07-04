@extends('layouts.master')

@section('content')

<div class="container">
  <a href="/answer/{{$question_id}}/create" class="d-flex justify-content-center">
    <button type="button" class="btn btn-info mt-3 mb-3">Tambah Jawaban</button>           
  </a>
  @foreach($answers as $key => $value)

  <h4>Question ID : {{$value->question_id}}</h4>
  <p>{{$value->content}}</p>

  @endforeach
</div>

@endsection