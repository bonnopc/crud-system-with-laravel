<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
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
<header>
    <h1>Register Here!</h1>
</header>

<br><br>
<form action="stu_reg" mathod="POST">
{{csrf_field()}}
    <div class="form-group">
        <input type="text" class="form-control" name="fname" placeholder="Enter your first name" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="lname" placeholder="Enter your last name" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="uname" placeholder="Choose a username" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Choose a password" required>
    </div>
    <input type="submit" name="Submit">
</form>

    
</div>
</body>
</html>