@extends('adminlte::page')

@section('content_header')
	<h1>USER CREATE</h1>
	
@endsection

@section('content')
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <form method="POST" action="/user">
        @csrf

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="name">Name: </label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="email">Email: </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        
        <button class="btn btn-success">Create</button>
        <a href="/user" class="btn btn-danger">Cancel</a>
    </form>
</div>
@stop

@section('js')

@endsection
