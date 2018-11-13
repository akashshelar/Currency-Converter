<?php
session_start();
$con=mysqli_connect('localhost','root','','project'); 
mysqli_select_db($con,'project');
if(!$con)
{
die("connection failed" . mysqli_error($con));
}
else
{
	$Username=mysqli_real_escape_string($con,$_POST['Username']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	
		$sql = "SELECT * FROM user WHERE Username='$Username' AND Password='$Password'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result) == 0)
		{
			header('Location:page.php?msg=1');
		}
		else
		{
			$_SESSION['sess_user'] = $_POST['Username'];
			header('location:mainpage.php');
		}
	
	
}
?>