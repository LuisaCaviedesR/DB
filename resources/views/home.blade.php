@extends('layouts.app')
<!-- Espacio para los mensajes flash enviados entre solicitudes -->
@if(Session::has('flash_message'))
 <article class="alert alert-success">
 {{ Session::get('flash_message') }}
 </article>
@endif
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
