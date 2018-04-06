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
	<form action="stuwelcome" method="POST">
	 	{{csrf_field()}}
		
		<div class="form-group">
	        <input type="text" class="form-control input-lg" name="fname" placeholder="Enter your first name">
	    </div>
	    @if ($errors->has('fname'))
	    <p class="alert alert-danger">{!!$errors->first('fname')!!}</p>
	    @endif



	    <div class="form-group">
	        <input type="text"  class="form-control input-lg"  name="lname" placeholder="Enter your last name">
	    </div>
	    @if ($errors->has('lname'))
	    <p class="alert alert-danger">{!!$errors->first('lname')!!}</p>
	    @endif

	    <div class="form-group">
	        <input type="text"  class="form-control input-lg" name="uname" placeholder="Choose a username">
	    </div>
	    @if ($errors->has('uname'))
	    <p class="alert alert-danger">{!!$errors->first('uname')!!}</p>
	    @endif

	    <div class="form-group">
	        <input type="email"  class="form-control input-lg" name="email" placeholder="Enter your email">
	    </div>
	    @if ($errors->has('email'))
	    <p class="alert alert-danger">{!!$errors->first('email')!!}</p>
	    @endif

	    <div class="form-group">
	        <input type="password"  class="form-control input-lg" name="pass" placeholder="Choose a password">
	    </div>
	    @if ($errors->has('pass'))
	    <p class="alert alert-danger">{!!$errors->first('pass')!!}</p>
	    @endif

	    <div class="form-group">
	    	<input type="submit"  class="form-control input-lg" value="Submit">
	    </div>
	</form> 
</div>


</body>
</html>
               
                               



