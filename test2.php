<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'C:\xampp1\htdocs\test2\PHPMailer-master\src\Exception.php';

/* The main PHPMailer class. */
require 'C:\xampp1\htdocs\test2\PHPMailer-master\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'C:\xampp1\htdocs\test2\PHPMailer-master\src\SMTP.php';


$nam = $_POST["name"];
$problm = $_POST["prob"];

$data = array('name' => $nam,'problem' => $problm);

$strJsonFileContents = file_get_contents("allcomplaints.json");

$temp = json_decode(trim($strJsonFileContents), true);
$len = sizeof($temp);
$temp[$len + 1] = $data;
$temp2 = json_encode($temp);


$mail = new PHPMailer(TRUE);
$mail->IsSMTP();



        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ia9726595@gmail.com';
        $mail->Password   = 'computerscience';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
		$mail->SMTPDebug  = 2;
		$mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
)
);

try {

   $mail->setFrom('ia9726595@gmail.com');

   /* Add a recipient. */
   $mail->addAddress('arjunvarshney300@gmail.com');

   /* Set the subject. */
   $mail->Subject = 'Problems';

   /* Set the mail message body. */
   $mail->Body = 'There are new issues in the software plase check the JSON file.';

   /* Finally send the mail. */
   $mail->send();
   if (file_put_contents('C:\xampp1\htdocs\test2\allcomplaints.json', $temp2) === FALSE)

  /* Error saving the file. */
  
  die();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
  
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
 
}
/*
$data = array ($nam, $problm);

$strJsonFileContents = file_get_contents("allcomplaints.json");
$temp = json_decode(trim($strJsonFileContents), true);

$newarray = (array_merge_recursive($temp,$data));

echo json_encode($newarray);

$data = array ($nam, $problm);



$newarray = (array_merge_recursive($temp,$data));
/*print_r($newarray);*/
/*

json_encode($newarray);


$newarray = 'allcomplaints.json';
if (file_put_contents($path . $fileName, $json) === FALSE)
*/	

  /* Error saving the file. */
/*  
  echo 'Error saving JSON file.';
  die();
*/  

/*send email here and decode json file for concanteation here*/
?>