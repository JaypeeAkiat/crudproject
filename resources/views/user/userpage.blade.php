@extends('adminlte::page')

@section('content_header')
	<h1>USERS</h1>
	
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					{{-- <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">
						<i class="fa fa-plus" aria-hidden="true"></i> Add New
					</a> --}}
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>
										<a href="{{ url('/user/' . $user->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
										<a href="{{ url('/user/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
										<form method="POST" action="{{ url('/user' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
											{{ method_field('DELETE') }}
											{{ csrf_field() }}
											<button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
										</form>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('js')

@endsection
