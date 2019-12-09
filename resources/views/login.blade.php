<!DOCTYPE html>
<html>
<head>
	<title>SI PERANG</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

<div class="col-md-4"></div>
<div class="col-md-4">
	<h2>LOGIN SI PERANG</h2>
	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			<form action="{{route('do_login')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label>MASUKAN USERNAME ATAU EMAIL</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>MASUKAN PASSWORD</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="simpan" value="REGISTER" class="btn btn-info" >
			</form>
		</div>
	</div>
</div>


</body>
</html>