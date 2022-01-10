<!DOCTYPE html>
<html>
<head><style type="text/css">
table {
	width: 30%;
	border: 10px blue;
	background-color: #FFC;
}
th{
	border-bottom: 5px solid #000;
}	
td {
	border-bottom: 10px solid #666;
	text-align: center;
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

<!--	<form>
	uname :<input type="text" name="uname"><br>
	<input type="submit" value="Submit">
	</form>
</body>
-->
<?php
$uname = $_POST['uname']??"";
include('connection.php');
$sqlget1 = "SELECT attendance.sname, attendance.date, attendance.class, attendance.status FROM attendance INNER JOIN users ON attendance.uname = users.uname WHERE users.uname = 'test'";
$sqldata = mysqli_query($conn, $sqlget1) or die('error getting data');
echo "<table>";
echo "<tr><th>sno</th><th>name</th><th>uname</th><th>password</th></tr>"; 

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['sname'];
	echo "<td>";
	echo $row['date'];	
	echo "<td>";
	echo $row['class'];	
	echo "<td>";
	echo $row['status'];
	echo "</td></tr>";
}	
echo "</table>"
?>


</html>