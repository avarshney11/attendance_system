<!DOCTYPE html>
<html>
<head>
<title>Display Data into DB</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

<br>

<!--<h1>User Table</h1>-->

    <!--<h2>Hello, <b></*?php echo htmlspecialchars($_SESSION["uname"]); */?></b> </h2>-->


<?php

/*include('connection.php');
$sqlget = "SELECT * FROM users";
$sqldata = mysqli_query($conn, $sqlget) or die('error getting data');
echo "<table>";
echo "<tr><th>sno</th><th>name</th><th>uname</th><th>password</th></tr>"; 

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['sno'];
	echo "<td>";
	echo $row['name'];	
	echo "<td>";
	echo $row['name'];	
	echo "<td>";
	echo $row['pwd'];
	echo "</td></tr>";
}	
echo "</table>"
*/
echo 'Welcome!';
?>

</body>
</html>



















