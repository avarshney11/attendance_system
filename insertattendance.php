<?php

$con = mysqli_connect('localhost','root','','test2');

if(!$con)
{
	die('Connection failed!'.mysqli_error($con));
}

$uname = $_POST['uname'];
$sname = $_POST['sname'];
$date = $_POST['date'];
$class = $_POST['class'];
$status = $_POST['status'];

$sql = "INSERT INTO attendance(uname, sname, date, class, status) VALUES('$uname', '$sname','$date','$class', '$status')";

if(mysqli_query($con,$sql))
{
	echo "Added Successfully";
}
else
{
	echo mysqli_error($con);
}

?>