@extends('layouts.master')

@section('content')

<div class="m-3">
  <form action="/item" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
    </div>
    <div class="form-group">
      <label for="desc">Description:</label>
      <input type="text" class="form-control" placeholder="Enter Description" name="description" id="desc">
    </div>
    <div class="form-group">
      <label for="stock">Stock:</label>
      <input type="number" class="form-control" placeholder="Enter Stock" name="stock" id="stock">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" placeholder="Enter Price" name="price" id="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection