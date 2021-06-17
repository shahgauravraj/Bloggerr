@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark" style="margin: 1rem 0 1rem 0;">Return</a>
    <h1>{{$post->title}}</h1>
    <hr>
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%; border-radius: 5px;">
    <hr>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
    <br><br>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary" style="margin: 1rem 0 1rem 0;">Edit</a>
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif
    @endif
@endsection
