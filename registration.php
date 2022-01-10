<html>
<head>
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
	<li><a href="login.php">Login</a></li>
	<li><a href="test.php">Complaints</a></li>
	<li><a href="registration.php">Registration</a></li>


	
</ul>
</head>
<body>
<h4>Registration Form</h4>
<form method="post" action="insert.php">
SNo :<input type="text" name="sno"><br>
Name :<input type="text" name="name"><br>
User name :<input type="text" name="uname"><br>
Password :<input type="password" name="pwd"><br>
<input type="submit" value="Register">
</form>
</body>
</html>