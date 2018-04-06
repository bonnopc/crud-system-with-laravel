<!DOCTYPE html>
<html>
<head>
	<title>Register Now!</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container {
            margin: auto;
            width: 35%;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
	<h1>Register Now!</h1>
	<br><br>
	<form action="http://localhost/crudlara/public/editedvalue" method="POST">
	@foreach($valuepass as $newvalue)
	 {{csrf_field()}}
		<div class="form-group">
	        <input type="text" class="form-control input-lg" name="fnameSet" placeholder="Enter your first name"
	        value="{{ $newvalue-> fname}}" required>
	    </div>
	    <!-- @if ($errors->has('fname'))
	    <p style="color:red;">{!!$errors->first('fname')!!}</p>
	    @endif -->

	    <div class="form-group">
	        <input type="text"  class="form-control input-lg"  name="lnameSet" placeholder="Enter your last name"
	        value="{{ $newvalue-> lname}}" required>
	    </div>
	    <!-- @if ($errors->has('lname'))
	    <p style="color:red;">{!!$errors->first('lname')!!}</p>
	    @endif -->

	    <div class="form-group">
	        <input type="text"  class="form-control input-lg" name="unameSet" placeholder="Choose a username"
	        value="{{ $newvalue-> uname}}" required>
	    </div>
	    <!-- @if ($errors->has('uname'))
	    <p style="color:red;">{!!$errors->first('uname')!!}</p>
	    @endif -->

	    <div class="form-group">
	        <input type="email"  class="form-control input-lg" name="emailSet" placeholder="Enter your email"
	        value="{{ $newvalue-> email}}" required>
	    </div>
	    <!-- @if ($errors->has('email'))
	    <p style="color:red;">{!!$errors->first('email')!!}</p>
	    @endif-->

	    <div class="form-group">
	        <input type="password"  class="form-control input-lg" name="passSet" placeholder="Choose a password"
	        value="{{ $newvalue-> pass}}" required>
	    </div>
	    <!-- @if ($errors->has('pass'))
	    <p style="color:red;">{!!$errors->first('pass')!!}</p>
	    @endif -->

	    <input type="hidden" name="id" value="{{ $newvalue-> id}}">

	    <div class="form-group">
	    	<input type="submit"  class="form-control input-lg" value="Submit">
	    </div>
	</form> 
</div>
@endforeach


</body>
</html>
               
                               



