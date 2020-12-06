@extends('layouts.listlayout', ['title' => $title])

@section('content')
<div class="container">
    @foreach ($companies as $cmp)
    <div class="item">
      <h3>Name: {{ $cmp->name }}</h3>
      <h3>Code: {{ $cmp->code }}</p>
      <h4>Location: {{ $cmp->country }}, {{ $cmp->city }}, {{ $cmp->address }}</h3>
      <h6>Created: {{ $cmp->created_at }}</h6>
      <h6>Updated: {{ $cmp->updated_at }}</h6>
    </div>
    @endforeach
  </div>
@endsection