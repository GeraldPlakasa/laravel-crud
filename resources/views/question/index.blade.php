@extends('layouts.master')

@section('content')

<div class="container">
  <a href="/questions/create" class="d-flex justify-content-center">
    <button type="button" class="btn btn-info mt-3 mb-3">Tambah Pertanyaan</button>           
  </a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($questions as $key => $value)

      <tr>
      	<td> {{$key + 1}} </td>
      	<td> {{$value->title}} </td>
      	<td> {{$value->content}} </td>
        <td>
          <a href="/questions/{{$value->id}}" class="btn btn-info">Lihat</a>
          <a href="/questions/{{$value->id}}/edit" class="btn btn-default">Edit</a>
          <form action="/questions/{{$value->id}}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>    
          </form>
        </td>
      </tr>
      

      @endforeach
    </tbody>
  </table>
</div>

@endsection