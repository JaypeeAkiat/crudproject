@extends('adminlte::page')

@section('content_header')
	<h1>USERS</h1>
	
@endsection

@section('content')

<div class="card">
    <div class="card-header">Edit User Page</div>
    <div class="card-body">
        
        <form action="{{ url('user/' .$users->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
          <label>Name</label></br>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</br>
          <label>Email</label></br>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</br>
          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
@stop

@section('js')

@endsection