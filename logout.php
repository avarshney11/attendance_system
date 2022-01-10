<?php
   session_start();
   unset($_SESSION["username" and "password"]);

   

   header("location: login.php");
?>
