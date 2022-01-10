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
	<div class="container">
    		<form method="post" action="">
        		<div>
            			<h1>Login</h1>
            			<div>
                			<input type="text" class="textbox" name="uname" />
            			</div>
            			<div>
                			<input type="password" class="textbox" name="pwd" />
            			</div>
            			<div>
                			<input type="submit" value="Submit" name="submit" />
            			</div>
        		</div>
    		</form>
	</div>

<?php
$conn = mysqli_connect('localhost','root','','test2');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$uname = ($_POST['uname']) ?? "";
$pass = ($_POST['pwd']) ?? "";
	
if (isset($_POST['uname']) && isset($_POST['pwd'])) {

	if (empty($uname) or empty($pass)) {
		echo 'please enter both username and password';
	    exit();

	}else{
		$sql = "SELECT * FROM users WHERE uname='$uname' AND pwd='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['pwd'] === $pass) {
            	header("Location: home.php");
		        exit();
            }else{
				echo 'incorrect username or password';
		        exit();
			}
		}
		else{
			echo 'incorrect username or password';
	        exit();
		}
	}
}
	?>
</body>
</html>
