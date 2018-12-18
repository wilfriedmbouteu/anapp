@extends('adminpanel')

@section('content')
<div class="main" style="margin-left: 20px;">
<h2>Create New User</h2>	

<hr class="m-t-0">
<br>
<div class="columns">
	<div class="column">

<form action="{{ route('users.store')}} " method="Post">
	{{csrf_field() }}
	<div class="form-group">
		<label for="name">Name :</label>
		<input type="text" name="name" class="form-control" placeholder="John Doe">
	</div>
	<div class="form-group">
		<label for="email">Email :</label>
		<input type="text" name="email" placeholder="example@gmail.com" class="form-control">
	</div>
	
	<div class="form-group">
		<label for="password">Password :</label>
		<input type="password" name="password" class="form-control" placeholder="Password" id="password">
  	</div>

	<div class="form-group">
		<label for="password">
					Password-Confirmation :
				</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="password_confirmation">
  	</div>
  	<div class="button">
	<button type="submit" class="btn btn-success" >Create User</button>
    </div>
	@include('partials.errors')
</form>

	</div>
</div>
</div>

@endsection

