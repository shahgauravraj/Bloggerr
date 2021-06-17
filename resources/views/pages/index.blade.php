@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel!</h1>
        <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin, nisl eu eleifend maximus, turpis eros dictum dui, ut posuere tellus ante sit amet ligula. Ut augue diam, venenatis sed facilisis quis, feugiat aliquam ligula. Ut non est a erat aliquet interdum in vitae ante. Aliquam quis nibh enim. Sed mattis urna nunc, vitae interdum tortor porttitor non.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection