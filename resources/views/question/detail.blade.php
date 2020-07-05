@extends('layouts.master')

@section('content')

<a href="/questions" class="btn btn-danger">back</a>
<div class="container text-center">
  <h3 class="mb-3">Pertanyaan</h3>
  <h4>{{$question->title}}</h4>
  <p class="text-left">Question ID : {{$question->id}}</p>
  <p class="bg-info py-3">{{$question->content}}</p>
  <br>

  <h3 class="mb-3">
    Jawaban <a href="/answer/{{$question->id}}/create" class="btn btn-info"><i class="fas fa-plus"></i></a>
  </h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Content</th>
      </tr>
    </thead>
    <tbody>
      @foreach($answers as $key => $value)

      <tr>
      	<td> {{$key + 1}} </td>
      	<td> {{$value->content}} </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection