@extends('master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<h2>Create New Account</h2>
		<hr>
		<br>
		<form action="/register" method="Post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">
					Name :
				</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="John Doe">
			</div>
            <div class="form-group">
				<label for="pseudo">
					Pseudo :
				</label>
				<input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="pseudo">
			</div>


			<div class="form-group">
				<label for="email">
					Email :
				</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="example@gmail.com">
			</div>
<div class="form-group">
				<label for="gender">
					Gender :
				</label>
				<!-- <input type="text" name="gender" id="gender" class="form-control" placeholder="gender">
							 -->
                <select id="gender" name="gender" class="form-control">
                	<option value="male">Male</option>
                	                	<option value="female">Female</option>
                </select>
				</div>
      


<div class="form-group">
				<label for="age">
					Age :
				</label>
				<input type="text" name="age" id="age" class="form-control" placeholder="age">
			</div>
 


						<div class="form-group">
				<label for="password">
					Password :
				</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="password">
			</div>

			<div class="form-group">
				<label for="password">
					Password-Confirmation :
				</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="password_confirmation">
			 <button class="btn btn-primary" type="submit">Sign Up</button>

			</div>
			
          @include('partials.errors')

		</form>
	</div>
</div>


@endsection