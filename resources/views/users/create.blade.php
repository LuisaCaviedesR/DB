@extends('layouts.app')
@section('content')
    <h1>Add a New User</h1>
    <p class="lead">Set the information of the new user.</p>
    <hr>
    {!! Form::open(['route' => 'users.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
@stop
