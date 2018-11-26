@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card post">
        <a href="/posts/{{$post->id}}">
          <h3>{{$post->title}}</h3>
        </a>
        <small>Written on {{$post->created_at}}</small>
        <div class='btn-container'>
          <a href="/posts/{{$post->id}}/edit" class='btn btn-secondary'>Edit</a>
          {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::hidden('_method', 'DELETE')}}
          {!!Form::close()!!}
        </div>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
      <p>No Posts Found</p>
  @endif
@endsection