@extends('adminpanel')

@section('content')

<div class="main">
	<h1>Permission Details</h1>
	<hr>
	<h3>Permission Name: &nbsp {{ $permission->display_name}} </h3>
	<br>
	<h3>Permission Slug : &nbsp {{$permission->name }} </h3>
	<br>

</div>

@endsection