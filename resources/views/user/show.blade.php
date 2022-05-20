@extends('adminlte::page')

@section('content_header')
	<h1>USERS</h1>
	
@endsection

@section('content')

<div class="card">
    <div class="card-header">User Info</div>
    <div class="card-body">
    
          <div class="card-body">
          <h5 class="card-title">Name: {{ $users->name }}</h5>
          <p class="card-text">email: {{ $users->email }}</p>
    </div>
        
      </hr>
    
    </div>
  </div>
@stop

@section('js')

@endsection
