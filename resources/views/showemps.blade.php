@extends('layouts.listlayout', ['title' => $title])

@section('content')
<div class="container">
    @foreach ($employees as $emp)
    <div class="item">
      <h3>Fullname: {{ $emp->name }} {{ $emp->lastname }}</h3>
      <p>Birthdate: {{ $emp->birthdate }}</p>
      <h3>ID: {{ $emp->personal_id }}</h3>
      <h3>Salary: {{ $emp->salary }}</h3>
      <h6>Created: {{ $emp->created_at }}</h6>
      <h6>Updated: {{ $emp->updated_at }}</h6>
    </div>
    @endforeach
  </div>
@endsection