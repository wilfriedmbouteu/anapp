@extends('adminpanel')

@section('content')


		<div class="main" style="">
			<h2>Manage Users</h2>
			<br>
	<a href="{{'/manage/users/create' }} " style="float: right; margin-left: 800px; "><button class="btn btn-success">Create new User</button></a>
	
	<br>
	<p>
		<br>
	</p>

	<table class="table " style="border: 2px; margin-top: 15px; ">
		<thead>
			<tr style="margin-bottom: -3px; padding-bottom: -5px;">
				<th>id</th>
				<th>Name</th>
				<th>Email </th>
				<th>Date Created </th>
				<th>Actions </th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($users as $user)

			<tr>
				<th>{{$user->id}} </th>
				<td style="margin-right:4px;"><a href="/manage/users/{{$user->id}}">{{$user->name}} </a></td>
				<td>{{$user->email}} </td>
				<td><a class="button" href="{{route('users.edit', $user->id )}} ">Edit</a> </td>
				<td>{{$user->created_at->toFormattedDateString()}} </td>
			</tr>
		@endforeach	
		</tbody>
		
	</table>
	{{ $users->links()}}
	</div>

@endsection