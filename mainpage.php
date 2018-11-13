<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'project');

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

mysqli_select_db($connect,'project');


$message = '';
if(isset($_GET['msg']))
{
	if($_GET['msg'] == 1)
	{
		$message = '<div class="alert alert-danger fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
						 <strong> Insufficient </strong>  <strong>Balance </strong>.
					</div>';
	}
	if($_GET['msg'] == 2)
	{
		$message = '<div class="alert alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
						 <strong> Balance </strong>  <strong>Updated </strong>.
					</div>';
	}
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Currency Conversion</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/custom.css" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<!-- BootstrapValidator CSS -->
	<link href="css/bootstrapValidator.min.css" rel="stylesheet" />
	<!-- jQuery and Bootstrap JS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<!-- BootstrapValidator -->
	<script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
</head>
<body>

<!-- NavBar Top Begins -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container clearfix">
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-left">
		<li><a href="account.php">Current Balance</a></li>
		<li><a href="rate.php">Rate Table</a></li>
		<li><a href="logout.php">Log Out</a></li>
</ul>
</div>
</div>
</div>


<?php
	if($message != '')
	{
		echo $message;
	}
	?>

<div class="col-lg-9 container">

<div class="panel-body">

<center>

</div>
</div>

<form action="convert.php" class="form_rightl" method="POST" name="Mform" role="form">&nbsp;
<h4 align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Currency Conversion </h4>
&nbsp;

<div class="form-group"><label class="col-sm-2 control-label" for="amount"> Amount </label>

<div class="col-lg-4"><input class="form-control" id="amount" name="amount" placeholder="Enter amount" type="text" /></div>
</div>
&nbsp;<br />
&nbsp;

<div class="form-group"><label class="col-lg-2 control-label" for="currency"> Currency 1 </label>

<div class="dropdown col-lg-4"><select autocomplete="off" name="currency1" class="form-control" id="currency1"><option selected="selected" value="Select">Select Currency</option><option value="USD">USD</option><option value="GBP">GBP</option><option value="EUR">EUR</option><option value="CAD">CAD</option> </select></div>
</div>
&nbsp;<br />
&nbsp;

<div class="form-group"><label class="col-lg-2 control-label" for="currency"> Currency 2 </label>

<div class="dropdown col-lg-4"><select autocomplete="off" name="currency2" class="form-control" id="currency2"><option selected="selected" value="Select">Select Currency</option><option value="USD">USD</option><option value="GBP">GBP</option><option value="EUR">EUR</option><option value="CAD">CAD</option> </select></div>
</div>
&nbsp;<br />
&nbsp;

<br />
<br />
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <button align="center" class="btn btn-success" id="convert" name="save" value="convert" type="convert">Convert</button> </form> 

</div></form>
</div>
</div>

</body>
</html>