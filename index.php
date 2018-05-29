<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<style>
		body{
			background-image: url('gambar/background1.jpg');
		}
	</style>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
</head>
<body>

	<div class="container">
		<div style="margin-top: 50px" class="panel panel-primary col-lg-4 col-lg-offset-4">
			<div class="panel-heading" style="margin-top: 20px;">
				<h3 class="panel-title">Login Admin</h3>
			</div>
			<div class="panel-body">
				<div>
			<form action="aksi_login.php" method="post" accept-charset="utf-8">
			
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="username">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="password">
			</div>

			<button type="submit" class="btn btn-info btn-block login" name="masuk" value="masuk">Masuk</button>
			
			</form>
		</div>
			</div>
			<div class="panel-footer" style="margin-bottom: 20px;">
				<h4>sistem informasi apotek &copy; Habibi</h4>
			</div>
		</div>

		

	</div>
	
</body>
</html>