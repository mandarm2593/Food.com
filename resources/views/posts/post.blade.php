@extends('layouts.app')

@section('content')
<br>
<h1>{{$post->title}}</h1>
<div class="text-center" style="height:100%;width:100%;">
    <img  style="height:100%;width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
</div>
<br>
<p>{{$post->body}}</p>
<hr>
<small>Written by {{$post->user->name}} on {{$post->created_at}}</small>
<br>

@if(Auth::check())
    @if(Auth::id()==$post->user->id)
<a href="/posts/{{$post->id}}/edit" class="button">Edit</a>

{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-md-right']) !!}


{!! Form::hidden('_method', 'DELETE') !!}
    
    {!! Form::submit('Delete', ['class'=>'button']) !!}
    

{!! Form::close() !!}
    @endif
@endif
@endsection