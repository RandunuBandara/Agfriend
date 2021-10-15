<html>
<head>
	<title> User login and Registration </title>
	<link rel="stylesheet" type="text/css" href ="style1.css"> 
	
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<style>
body {
  background-image: url('image.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<div class="container">
<div class ="login-box"> 
	<div class="row">
	<div class="col-md-6 login-left">
	
		<h2> login here</h2>
		<form action= "validation.php" method="post">
		 <div class ="form-group">
			<label>username  </label>
			
			<input type="text" name="user" class ="form-cotrol" required >
		 
		 
		 </div>
		 <div class ="form-group">
			<label>Password  </label>
			
			<input type="Password" name="Password" class ="form-cotrol" required >
		 
		 
		 </div>
		<button type ="submit" class=" btn btn-primary">login</button>
		</form>
	</div>
	<div class="col-md-6 login-right">
		<h2> Register here</h2>
		<form action= "registration.php" method="post">
		 <div class ="form-group">
			<label>username</label>
			
			<input type="text" name="user" class ="form-cotrol" required >
		 
		 
		 </div>
		 <div class ="form-group">
		 
			<label>Password  </label>
			<input type="Password" name="Password" class ="form-cotrol" required >
		 
		 
		 </div>
		<button type ="submit" class=" btn btn-primary">login</button>
		</form>
	</div>
	</div>
 </div>
</div>
</body>
</html>