@extends('layouts.app')

@section('content')
    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <a href="/albums/{{ $photo->album_id }}">Back To Gallary</a>
    <hr>
    <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}">
    <br><br>
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST','class'=>'float-left','onsubmit'=>'return confirm("Are you sure?")']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection