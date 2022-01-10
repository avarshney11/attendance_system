<?php

$dbcon = mysqli_connect('localhost','root','','test2');

if(!$dbcon)
{
	die('Connection failed!'.mysqli_error($dbcon));
}

$uname = $_POST['uname'];
$sname = $_POST['sname'];
$date = $_POST['date'];
$feeamount = $_POST['feeamount']?? "";
$status = $_POST['status'];

$sql = "INSERT INTO fees(uname, sname, date, feeamount, status) VALUES('$uname', '$sname','$date','$feeamount', '$status')";

if(mysqli_query($dbcon,$sql))
{
	echo "Added Successfully";
}
else
{
	echo mysqli_error($dbcon);
}

?>