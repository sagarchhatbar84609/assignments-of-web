<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	.form{
		display: inline-grid;
		background-color:skyblue;
		padding:50px;
	}
	.btn{
		background-color:#0066ff;
		padding:5px;
		opacity:0.9;
	}
</style>

</head>
<body>
	<script type="text/javascript">
		function f1()
		{
			alert("input field lost focus");
		}
	</script>
<center>
	<h1>National Workshop on Web Technology.</h1>
	<form  class="form" method="post" name="regis">
		First name<input type="text" name="fname" required>
		Last name<input type="text" name="lname" required>
		Email<input type="text" name="email" required >
		Password<input type="password" name="pass" required >
		Phone no.<input type="contact" name="no" required >
		web devloping language<input type="text" name="wdl" >
		<br>
		<button name="submit" class="btn">submit</button>
	</form>
</center>
<?php
$c=mysqli_connect("localhost","root","");
if($c)
{
if(isset($_POST["submit"]))
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['email'];
$psd=$_POST['pass'];
$phno=$_POST['no'];
$wdl=$_POST['wdl'];
$ins="insert into regis values('$fn','$ln','$em','$psd','$phno','$wdl')";

mysqli_select_db($c,"wt");

if(mysqli_query($c,$ins))
{
	echo"<br><script>alert('entries are registered');</script><br>";
}
else
{
	echo mysqli_error($c);
}
}
else
{
	echo mysqli_error($c);
}
}



mysqli_close($c);
?>
	

</body>
</html>