@extends('layouts.app')

@section('content')
    <h3>Create Albums</h3>
    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        {{ Form::text('name', '', ['placeholder' => 'Albums Name']) }}
        {{ Form::textarea('description','', ['placeholder' => 'Albums Description']) }}
        {{ Form::file('cover_image') }}
        {{ Form::submit('submit') }}
    {!! Form::close() !!} 
@endsection