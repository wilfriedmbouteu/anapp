@extends('adminpanel')

@section('content')
<div class="main">
<h1>Users Permissions </h1>
<br>
<a href="{{'/manage/permissions/create' }} " style="float: right; margin-left: 800px; "><button class="btn btn-success">Create new Permission</button></a>
	
	<br>
	<p>
		<br>
	</p>


<table class="table " style="border: 2px; margin-top: 15px; ">
		<thead>
			<tr style="margin-bottom: -3px; padding-bottom: -5px;">
				<th>id</th>
				<th>Name</th>
				<th>Slug </th>
				<th>Actions </th>
				<th>Date Created </th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($permissions as $permission)

			<tr>
				<th>{{$permission->id}} </th>
				<td style="margin-right:4px;"><a href="/manage/permissions/{{$permission->id}}">{{$permission->display_name}} </a></td>
				<td>{{$permission->name}} </td>
				<td><a class="button" href="{{route('permissions.edit', $permission->id )}} ">Edit</a> </td>
				<td>{{$permission->created_at->toFormattedDateString()}} </td>
			</tr>
		@endforeach	
		</tbody>
		
	</table>

</div>

@endsection