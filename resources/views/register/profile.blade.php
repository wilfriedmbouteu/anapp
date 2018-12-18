@extends('partials.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
 <img src="/uploads/avatars/{{ auth()->user()->avatar  }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
		<h2>{{auth()->user()->name }} </h2>
	
       <form enctype="multipart/form-data" action="/profile" method="Post">
       	{{ csrf_field() }}
       	<label>Update Profile Image</label>
       	<input type="file" name="avatar">
        <input type="submit" class="pull-right btn btn-sm btn-primary">
    </form>

 <strong>User Details</strong>
 <br>
 <p>Full Name : <strong>{{ auth()->user()->name }} </strong></p> 
<p>Email id  : <strong>{{ auth()->user()->email }} </strong> </p>


</div>
</div>
<div class="row">
	<div class="col-md-10">
	
 <p>Pseudo : <strong>{{ auth()->user()->pseudo }} </strong></p> 
  <p>Age       : <strong>{{ auth()->user()->age }} </strong> </p>
 <p>Gender    : <strong>{{ auth()->user()->gender }} </strong> </p>
  <p>Registered on  : <strong>{{ auth()->user()->created_at->toFormattedDateString() }} </strong> </p>
 

	
   <br>
   <button class="open-button btn btn-success" onclick="openForm()" >create resume</button>

   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Profile
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Complete your Profile</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="Post" action="/resume" id="msform" class="form-container">
    	{{csrf_field() }}
    	<!-- progressbar -->
    	<ul id="progressbar" >
        <li class="active">Account</li>
        <li>Social Profiles</li>
        <li>Personal Details</li>
    	 </ul>
    	<!-- fieldsets -->
    	<fieldset>
    	
    	<div class="form-group">
    		<label for="education-level">Education Level : </label>
    		<input type="text" name="education-level" placeholder="education-level" id="education-level" class="form-control">
    		
    	</div>
    	<div class="finished">
    		<label for="finished">Graduated :</label>
    		<select id="finished" name="finished" class="form-control">
    			<option value="yes">yes yr</option>
    			<option value="no">no yrs</option>
    		</select>

    	</div>
    	<p></p>
    	<button class="btn btn-danger" type="button"  onclick="closeForm()">cancel</button> &nbsp &nbsp
    	<button class="btn btn-success" onclick="">Next </button>
</fieldset>

<fieldset>
    	<h1>Address</h1>
    	<div class="form-group">
    		<label for="country">Country : </label>
    		<input type="text" name="Country" placeholder="country" id="country" class="form-control">
    		
    	</div>
    	<div class="city">
    		<label for="city">City :</label>
    		<select id="city" name="city" class="form-control">
    			<option value="douala">Douala yr</option>
    			<option value="yaounde">yaounde yrs</option>
    			
    		</select>

    	</div>
    	<p></p>
    	<button class="btn btn-danger" type="button"  onclick="">previous</button> &nbsp &nbsp
    	<button class="btn btn-success" onclick="">Next </button>
</fieldset>

<fieldset>
    	<h1>Education</h1>
    	<div class="form-group">
    		<label for="education-level">Country : </label>
    		<input type="text" name="Country" placeholder="country" id="country" class="form-control">
    		
    	</div>
    	<div class="city">
    		<label for="city">City :</label>
    		<select id="city" name="city" class="form-control">
    			<option value="douala">Douala yr</option>
    			<option value="yaounde">yaounde yrs</option>
    			
    		</select>

    	</div>
    	<p></p>
    	<button class="btn btn-danger" type="button"  onclick="">previous</button> &nbsp &nbsp
    	<button class="btn btn-success" onclick="">Next </button>
</fieldset>
    </form>    	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
   
    <div class="form-popup" id="" >
    
    </div>
    
   <p></p>
	<h2>Profession </h2>
	<hr>
	<p>Employed : </p>
	<br>
	<p>Eduction :</p>
	<br>
	<p>Experience</p>
	
	</div>
    	</div>

</div>

@include('partials.footer')
@endsection