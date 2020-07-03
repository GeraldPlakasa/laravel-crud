@extends('layouts.master')

@section('content')

<div class="container">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($item as $key => $value)

      <tr>
      	<td> {{$key + 1}} </td>
      	<td> {{$value->name}} </td>
      	<td> {{$value->description}} </td>
      	<td> {{$value->stock}} </td>
      	<td> {{$value->price}} </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection