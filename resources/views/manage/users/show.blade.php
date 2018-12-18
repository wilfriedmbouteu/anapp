@extends('adminpanel')

@section('content')

<div class="main" >
	
		<p><h2 class="title" style="margin-left: 35px;">{{ $user->name }}'s Account </h2> </p>


	<a href="/manage/users/{{$user->id}}/edit"><button class="btn btn-success" style="float: right; margin-right:-200px;"> Edit User</button></a>
	<p> 
<br>
	</p>
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>Property :</th>
				<th>Value :</th>
			</tr>
			<tbody>
				
				<tr><td>Name :</td>
				<td>{{ $user->name}} </td></tr>
				<tr><td>Email :</td>
				<td>{{$user->email }} </td></tr>
			</tbody>
		</thead>
	</table>
</div>

@endsection