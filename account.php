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
//echo "$uname";




$rs=mysqli_query($connect,"SELECT * FROM user WHERE Username = '$uname'");

echo "<table border='1'>";
echo "<tr>";
echo "<th> USD </th>";
echo "<th> EUR </th>";
echo "<th> CAD </th>";
echo "<th> GBP </th>";
echo "</tr>";

$row = mysqli_fetch_array($rs);
{

echo "<tr>";
echo "<td>".$row['USD']."</td>";
echo "<td>".$row['EUR']."</td>";
echo "<td>".$row['CAD']."</td>";
echo "<td>".$row['GBP']."</td>";

echo "</tr>";
}
echo "</table>"
?>

</body>
</html>