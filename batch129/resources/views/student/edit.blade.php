<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel-crudv</title>
<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
</head>
<body>





	<div class="wrap ">
		<br>
		<a class="btn btn-sm btn-primary"  href="{{ route('student.index') }}" >Back</a>
		<br>
		<br>
 
		
			<div class="card shadow">
				<div class="card-body">
					<h2>Edit student </h2>
					 @if (Session::has('success'))
				       <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
					
				     @endif
				
					<form action="{{route('student.update',$edit_data->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input  name="name" class="form-control " value="{{$edit_data->name}}" type="text" required>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input  name="email" class="form-control " value="{{$edit_data->email}}" type="text" required>
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input  name="cell" class="form-control " value="{{$edit_data->cell}}" type="text" required>
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input name="username" class="form-control " value="{{$edit_data->username}}" type="text" required>
						</div>
						<div class="form-group">
							<label for="">Photo</label>
							<input  name="photo" class="" type="file" >
						</div>
						
						<div class="form-group">
							<input name="Update" class="btn btn-primary" type="submit" value="Update">
						</div>
					</form>
				</div>
			</div>
		 
		</div>
	
	


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

	


</script>

</body>
</html>