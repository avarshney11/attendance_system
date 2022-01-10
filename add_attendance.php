<html>
<head>
<style type="text/css">
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

<h4>Add Attendance</h4>
<form method="post" action="insertattendance.php">
uname :<input type="text" name="uname"><br>
sname :<input type="text" name="sname"><br>
Date :<input type="date" name="date"><br>
class :<input type="text" name="class"><br>
status :<input type="text" name="status"><br>
<input type="submit" value="Submit">
</form>
</body>
</html>