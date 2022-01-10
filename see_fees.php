<!DOCTYPE html>
<html>
<head>
<style type="text/css">
table {
	border: 2px solid red;
	background-color: #FFC;
}
th{
	border-bottom: 5px solid #000;
}	
td {
	border-bottom: 2px solid #666;
}
</style>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>

</head>
<body>
<ul>
	<li><a href="add_fees.php">add fees</a></li>
	<li><a href="see_fees.php">see fees table</a></li>
	<li><a href="add_attendance.php">add attendance</a></li>
	<li><a href="see_attendance.php">see attendance</a></li>
	<li><a href="settings.php">Settings</a></li>
	<li><a href="logout.php">Logout</a></li>
	
</ul>

</body>

<?php

include('connection.php');
$sqlget2 = "SELECT fees.sname, fees.date, fees.feeamount, fees.status FROM fees INNER JOIN users ON fees.uname = users.uname WHERE users.uname = 'test'";
$sqldata = mysqli_query($conn, $sqlget2) or die('error getting data');
echo "<table>";
echo "<tr><th>sname</th><th>date</th><th>fee amount</th><th>status</th></tr>"; 

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['sname'];
	echo "<td>";
	echo $row['date'];	
	echo "<td>";
	echo $row['feeamount'];	
	echo "<td>";
	echo $row['status'];
	echo "</td></tr>";
}	
echo "</table>"
?>


</html>