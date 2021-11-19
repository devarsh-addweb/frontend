<?php 
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>contact</title>
	<style>
body{
	margin: 0;
	padding: 0;
	background: url(img/cont1.jpeg) no-repeat;
	background-size: cover;
}

	</style>
</head>

<form>
<div class="container " style="width:50%; ">
	<h2 class="p-2 mb-3" style="border-bottom:4px solid green; width: 30%;">Contact Us</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control ipt" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleInputEmail1">
    	
    </textarea>
    <div id="emailHelp" class="form-text"></div>
  </div>

  <button type="submit" class="btn btn-success">Submit</button>


</div>
</form>
<br>
<?php 
include "footer.php";
?>