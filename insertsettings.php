<?php
session_start();

$conn = mysqli_connect('localhost','root','','test2');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$uname = $_POST['uname']??"";
$currentPassword = $_POST['pwd']??"";


$result = mysqli_query($conn,"SELECT * from users WHERE uname='" . $uname . "'");
$row=mysqli_fetch_array($result);

if($currentPassword == $row["pwd"] && $uname == $row["uname"] ) {
mysqli_query($conn,"UPDATE users set pwd='" . $_POST["newpwd"] . "' WHERE uname='" . $uname . "'");
echo 'Password Changed Sucessfully';
}
 else{
 echo 'Incorrect password has been entered';
}
?>