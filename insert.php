<?php

$conn = mysqli_connect('localhost','root','','test2');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$sno = $_POST['sno'];
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users(sno, name, uname, pwd) VALUES('$sno', '$name','$uname',
 '$pwd')";

if(mysqli_query($conn,$sql))
{
	echo "Registered Successfully";
}
else
{
	echo mysqli_error($conn);
}

?>