<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/popup.js"></script>

	<title>test</title>


<link rel="stylesheet" type="text/css" href="/css/popup.css">
<link rel="stylesheet" type="text/css" href="/css/will.css">
</head>
<body>
<div class="col-md-10">
			<div class="logo">
	<img src="4x4.jpg" alt="logo" >
</div>
<div class="container-fluid">
	<div class="row">
		
<div class="col-md-2">hello</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-6">
		<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	<div class="col-md-6">

	<p>hello22</p>
	<button class="btn btn-success" onclick="popMe()">fill up</button>

<div class="form-hid">
	<form class="formcl" id="formid">
		<h2>Complete Profile </h2>
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

	</form>
</div>



</div>
	 </div>
</div>

</body>
</html>