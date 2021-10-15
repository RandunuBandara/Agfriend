<html>
<head>
	<title> User login and Registration </title>
	<link rel="stylesheet" type="text/css" href ="style1.css"> 
	
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="row">
	<div class="col-md-2 login-left">
	<img src="Capture1.jpg" alt="AgFriend"  style="width:120px;height:100px;">
<h2> AgFriend </h2>
</div>
</div>
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
	
		<h2>SIGN IN</h2>
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
		<h2> REGISTER HERE</h2>
		<form action= "registration.php" method="post">
		 <div class ="form-group">
			<label>username</label>
			
			<input type="text" name="user" class ="form-cotrol" required >
		 
		 
		 </div>
		 <div class ="form-group">
		 
			<label>Password  </label>
			<input type="Password" name="Password" class ="form-cotrol" required >
		 
		 
		 </div>
		 <div class ="form-group">
		 
			<label>Re type Password  </label>
			<input type="Password" name="RePassword" class ="form-cotrol" required >
		 
		 
		 </div>
		 
		<button type ="submit" class=" btn btn-primary">login</button>
		</form>
	</div>
	</div>
 </div>
</div>
</body>
</html>