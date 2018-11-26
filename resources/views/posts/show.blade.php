@extends('layouts.app')

@section('content')
  <h1>{{$post->title}}</h1>
  <div>
    {{$post->body}}
  </div>
  <hr>
  <small>Written at {{$post->created_at}}</small>
  <br>
  <a href="/posts" class='btn btn-outline-secondary btn-bottom'>Go Back</a>
@endsection