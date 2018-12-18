@extends('master')

@section('content')
<div class="row">
	<div class="col-md-7">
		<h2>Sign In</h2>
		<hr>
		<br>
		<form method="Post" method="/login">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="Email">Email :</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="example@gmail.com">
			</div>


			<div class="form-group">
				<label for="password">Password :</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			@include('partials.errors')
		</form>
	</div>
</div>

@endsection