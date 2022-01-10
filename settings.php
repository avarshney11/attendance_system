
<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
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
<ul>
	<li><a href="add_fees.php">add fees</a></li>
	<li><a href="see_fees.php">see fees table</a></li>
	<li><a href="add_attendance.php">add attendance</a></li>
	<li><a href="see_attendance.php">see attendance</a></li>
	<li><a href="settings.php">Settings</a></li>
	<li><a href="logout.php">Logout</a></li>
	
</ul>

</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<form method="post" action="insertsettings.php" align="center">
Username:<br>
<input type="text" name="uname">
<div></div>

Current Password:<br>
<input type="password" name="pwd">
<br>
New Password:<br>
<input type="password" name="newpwd">
<br><br>
<input type="submit">
</form>
<br>
<br>






</body>
</html>


