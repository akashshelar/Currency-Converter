<?php
session_start();
$con=mysqli_connect('localhost','root','','project'); 
mysqli_select_db($con,'project');

if(!$con)
{
	die("connection failed" . mysqli_error($con));
}
if(isset($_SESSION['sess_user']) && $_SESSION['sess_user'] != '')
{
	header('Location:mainpage.php');
}
$message = '';
if(isset($_GET['msg']))
{
	if($_GET['msg'] == 1)
	{
		$message = '<div class="alert alert-danger fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
						Invalid <strong>Username</strong> or <strong>Password</strong>.
					</div>';
	}
	
}
?>

<html lang="en">
<head>
    <meta name="google-site-verification" content="-1mFXQNjUMVT7snwzmpU7Jm-zfeHnd708OsLe1Djd9k" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Currency Converter </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/basic-template.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- BootstrapValidator CSS -->
      <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>
      <link href="css/custom.css" rel="stylesheet">
	
    <!-- jQuery and Bootstrap JS -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
    <!-- BootstrapValidator -->
       <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
    	<script src="js/custom.js" type="text/javascript"></script>
  </head>
  
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container clearfix">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		</div>
		</div>
		</div>

<div class="container">

<?php
	if($message != '')
	{
		echo $message;
	}
	?>
	
	
	<div class="jumbotron text-center">
		<h1>Currency Converter</h1>
		<p> Travel hasslefree</p>
		<a class="btn btn-success" data-toggle="modal" href="#Login">Login</a> 
		
	</div>

	
</div>

<!-- Login Form Modal Begins -->

<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="Login" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
		<div class="modal-header">
			<button class="close" data-dismiss="modal" type="button">
				<span aria-hidden="true">&times;</span> 
				<span class="sr-only">Close</span>
			</button>


			<h4 align="center" class="modal-title" id="LoginLabel">Login</h4>
		</div>
		
<!--Login Form Code Begins -->

<div class="modal-body">
	<form action="login.php" class="form-horizontal" id="LForm" method="POST" role="form">&nbsp;
	<div class="form-group">
		<label class="col-sm-2 control-label" for="Username">Username</label>
		<div class="col-sm-8">
			<input class="form-control" id="Username" name="Username" placeholder="Username" type="text" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="Password">Password</label>
		<div class="col-sm-8">
			<input class="form-control" id="Password" name="Password" placeholder="Password" type="password" />
		</div>
	</div>    
   
		
<!--Login Form Code Ends -->

		<div class="modal-footer">
			<button class="btn btn-success" type="submit">Login</button>
		</div>
	</form>
</div>
	
</div>
</div>
</div>
<!--Login Form Modal Ends -->

	
</div>
</div>

</body>

</html>
