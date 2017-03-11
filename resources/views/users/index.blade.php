@extends('layouts.app')
@section('content')
<h1>Users List</h1>
<p class="lead">Here's a list of all your users.
 <a href="{!! url('users/create') !!}">Add a new one?</a></p>
<hr>
@foreach($list as $user)
<h3>{{ $user->name }}</h3>
<p>{{ $user->email }}</p>
<p>
 <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">View
User</a>
 <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit
User</a>
 {!! Form::open([
 'method' => 'DELETE',
 'route' => ['users.destroy', $user->id]
 ]) !!}
 {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
 {!! Form::close() !!}
</p>
<hr>
@endforeach
@stop
