<?php
/* DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test2');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
if (!dbcon) {
	die('error connecting to the database')
}

*/
$conn = mysqli_connect('localhost','root','','test2');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

?>