<html>
<body>

<?php

session_start();

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'project');

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);



$rs=mysqli_query($connect,"SELECT * FROM rate");
echo "<table border='1'>";
echo "<tr>";
echo "<th> Currency 1 </th>";
echo "<th> Currency 2 </th>";
echo "<th> Rate </th>";
echo "</tr>";
while($row = mysqli_fetch_array($rs)){


echo "<tr>";
echo "<td>".$row['Currency1']."</td>";
echo "<td>".$row['Currency2']."</td>";
echo "<td>".$row['Rate']."</td>";
echo "</tr>";
}
echo "</table>"
?>

</body>
</html>