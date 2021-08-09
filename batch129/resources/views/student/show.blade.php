<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$user_data->name}}</title>
<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
</head>
<body>
<div class="wrap shadow">
        <div class="card">
            <div class="card-body">
                <h2 style="text-align:center" >Student Profile</h2>
                <img style="width:300px; height:300px; border-radius: 50%; margin:50px auto; display:block;" src="{{URL::to('/')}}/media/students/{{$user_data->photo}}" alt="">
                <h1 style="text-align:center" >{{$user_data->name}}</h1>

                <table class="table">
                    <tr>
                        <td>Name :</td>
                        <td>{{$user_data->name}}</td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td>{{$user_data->email}}</td>
                    </tr>
                    <tr>
                        <td>Username :</td>
                        <td>{{$user_data->username}}</td>
                    </tr>
                    <tr>
                        <td>Cell :</td>
                        <td>{{$user_data->cell}}</td>
                    </tr>
                </table>
                <a id="back" class="btn btn-primary btn-sm" href="{{route('student.index')}}">Back</a>
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