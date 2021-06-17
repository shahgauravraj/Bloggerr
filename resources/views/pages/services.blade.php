@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group" style="margin-top: 1rem;">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>            
            @endforeach
        </ul>
    @endif
@endsection