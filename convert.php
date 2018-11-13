<html>
<body>

<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'project');

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$uname = $_SESSION['sess_user'];
$flag = 1;


mysqli_select_db($connect,'project');

$getsql = mysqli_query($connect,"SELECT * FROM user WHERE Username = '$uname'");

$getcurrent = mysqli_fetch_array($getsql);


mysqli_autocommit($connect, false);

mysqli_begin_transaction($connect,MYSQLI_TRANS_START_READ_WRITE);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$amount = $_POST['amount'];
	$currency1 = $_POST['currency1'];
	$currency2 = $_POST['currency2'];
	//$conv_amt = $_POST['conv_amt'];
	
	$sql = mysqli_query($connect,"SELECT * FROM rate WHERE Currency1 = '$currency1' and Currency2 = '$currency2'");
	
	$row = mysqli_fetch_array($sql);
	$convertamt = $row['Rate']*$amount;
	
	
	
	echo "$uname";
	echo "$amount";
	echo "$currency1";
	echo "$currency2";
	echo "<p>".$row['Rate']."</p>";
	echo "$convertamt";

		//echo "<td>".$row['Rate']."</td>";

	//echo "$conv_amt";
	
	
	//update User set $currency1 = $currency1 - $amount, $currency2 = $currency2 + $convertamt where username = $uname;
	
	// update user set USD = USD - $amount, GBP = GBP + $convertamt where username = $uname;
	
	$qstring = "SELECT " . $currency1 . " FROM user where username = '" . $uname . "'";
	echo $qstring;

	$Curr1amt = mysqli_query($connect, $qstring);	
	// $Curr1amt = mysqli_query($connect,"SELECT " . $currency1 . " FROM user where username = " . $uname);
	$Curr1row = mysqli_fetch_array($Curr1amt);
	//echo "$Curr1row";
	echo "<p>".$Curr1row[$currency1]."</p>";

	
	
	$Curr2amt = mysqli_query($connect,"SELECT $currency2 FROM user ");
	$Curr2row = mysqli_fetch_array($Curr2amt);
	$qstring = "update user set " . $currency1 . " = " . $currency1 . " - " . $amount . " where username = '". $uname . "'";
	
	$qstring2 = "update user set ". $currency2 . " = " . $currency2 . " + " . $convertamt . " where username = '". $uname . "'";
	echo $qstring;
	
	$updatestr = mysqli_query($connect, $qstring);
	$updatestr2 = mysqli_query($connect, $qstring2);
	

	
	
	$crntamt = $Curr1row[$currency1];
	
	if ($amount > $crntamt)
	{
		$flag = 0;
	}
	
	echo $crntamt;
	
	//echo "$flag";
	if( $flag == 0)
		{
			mysqli_rollback($connect);
			header('Location:mainpage.php?msg=1');
			
		}
		else
		{
			
			mysqli_commit($connect);
			header('location:mainpage.php?msg=2');
		}
	
		
	
	
}
	
?>
</body>
</html>

