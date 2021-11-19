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
  /*background-image: linear-gradient(to right, skyblue , #e0c870);*/
}
	</style>
</head>
<body>
	<br><br>
<form>

<div class="container mt-5" style="width:40%; ">
  <div class="row">
	<h2 class="p-2 mb-3" style="border-bottom:5px solid green; width: 20%;">Log in</h2>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">If not Register ?</font><a href="register.php" style="text-decoration:none; color:blue;">Click Here</a></label>
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</div>
</div>
</form>
</div>
</body>
</html>
<br><br><br><br><br><br><br>
<?php 
include "footer.php";
?>
