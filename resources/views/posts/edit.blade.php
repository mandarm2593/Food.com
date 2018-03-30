@extends('layouts.app')

@section('content')
<br>
{!! Form::open(['action' => ['PostsController@update',$post->id],'enctype'=>'multipart/form-data']) !!}
    
<div class="form-group">
    
    {{Form::label('title', 'Title')}}
    
    {{ Form::text('title',$post->title, ['class'=>'form-control']) }}

    {{Form::label('body', 'Body')}}
    {{ Form::textarea('body', $post->body, ['class' => 'form-control']) }}
    
    {!! Form::hidden('_method', 'PUT') !!}
    {!! Form::file('cover_image') !!}

    {{Form::submit('Submit',['class'=>'button float-md-right'])}}

</div>


{!! Form::close() !!}






@endsection