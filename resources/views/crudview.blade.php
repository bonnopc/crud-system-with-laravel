
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container {
            margin: auto;
            width: 65%;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
<header>
	<h1><strong>Profile List</strong></h1>
</header>
<p>Choose Any Action (Edit/Delete)</p>
<br>
<br><br>
<table id="table" class="table table-bordered">
	<thead class="bg-primary">
	    <tr>
			<th>ID</th>
			<th>Full Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Registration Time</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody id="tbl">
			@foreach ($age as $user)
			<tr>
			   <td>{{ $user->id }}</td>
			   <td>{{ $user->fname }} {{ $user->lname }}</td>
               <td>{{ $user->uname }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->pass }}</td>
               <td>{{ $user->timestamp }}</td>


               <td><a href='valueedit/{{$user->id}}'>Edit</a> | <a href="#" data-href="valuedelete/{{$user->id}}" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
            </tr>
            @endforeach
	</tbody>
</table>

  <!-- Bootstrap Modal -->
	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
            
                <div class="modal-body">
                    <p>Are you sure! Want to delete?</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
			</div>
        </div>
    </div>
	
	<!-- Pagination Button -->
	<div class="pagination">
		{!!$age->render()!!}
	</div>
	<div>
		<a href="student" class="btn btn-primary btn-lg">REGISTER NEW</a>
	</div>
</div>

	<!--JavaScript for Modal-->
<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
</script>
</body>
</html>