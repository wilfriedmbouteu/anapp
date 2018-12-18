@extends('adminpanel')


@section('content')


<div class="main" style="margin-left: 20px;">

<h2>Edit Users Details</h2>
<br>

<form action="{{ route('users.update', $user->id)}} " method="Post">
	{{method_field('PUT') }}
	{{csrf_field() }}
	<div class="form-group">
		<label for="name">Name :</label>
		<input type="text" name="name"  value="{{ $user->name}}" class="form-control" >
	</div>
	<div class="form-group">
		<label for="email">Email :</label>
		<input type="text" name="email" value="{{$user->email}}" class="form-control">
	</div>
	
	<div class="form-group">
		<label for="password">New Password :</label>
		<input type="password" name="password" class="form-control" placeholder="Password" id="password">
  	</div>

	<div class="form-group">
		<label for="password">
					New Password-Confirmation :
				</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="password_confirmation">
  	</div>
  	<div class="button">
	<button type="submit" class="btn btn-success" >Edit User</button>
    </div>
	@include('partials.errors')
</form>

</div>
@endsection