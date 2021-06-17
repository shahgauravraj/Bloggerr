@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card" style="margin: 1rem 0 1rem 0; background: rgba( 255, 255, 255, 0.25 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 4px ); -webkit-backdrop-filter: blur( 4px ); border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.18 );">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <p>
                                <a href="/posts/{{$post->id}}">
                                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%; height: 12rem; border-radius: 5px; box-shadow: 10px 10px 5px grey;">
                                </a>
                            </p>
                            {{-- <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%; height: 12rem; border-radius: 5px; box-shadow: 10px 10px 5px grey;"> --}}
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3> <a href="/posts/{{$post->id}}" style="text-decoration: none; color: black;"><b>{{$post->title}}</b></a></h3>
                            <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection
