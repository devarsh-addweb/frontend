<?php 
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
		  body{
  margin: 0;
  padding: 0;
  background: url(img/bg1.jpg) no-repeat;
  background-size: cover;
}
	</style>
</head>
<body>
	<br><br>
<form>
<div class="container mt-5" style="width:40%; ">
	<h2 class="mb-3" style="border-bottom:4px solid green; width: 20%;">Registration</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputtext" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">If Register ?</font><a href="login.php" style="text-decoration:none; color: blue;">Click Here</a></label>
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <button type="submit" class="btn btn-success">Register</button>

</form>
</div>
</body>
</html>
<br><br>

<?php 
include "footer.php";
?>