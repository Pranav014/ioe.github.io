<?php 
//if "email" variable is filled out, send email   
//if (isset($_REQUEST['email']))  {      //Email information  
//set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
//require_once "Mail.php";

//$ServerAddress = "mail.local";
$From = "khismatrao.pranav.16it1018@gmail.com";
$To = "khismatrao.pranav.16it1018@gmail.com";
//$to = "admin@ethereal2m.no-ip.org";
$subject = "diamond";
$message = "diamond";
//$from = "admin@ethereal1m.no-ip.org";

$headers = 'From: khismatrao.pranav.16it1018@gmail.com' . "\r\n" .
           'MIME-Version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset=utf-8';

$result1 = mail($To, "Message from Codered admin", 'Hello this is mail sent via php', $headers);
//$headers = "From: ".$From;
if ($result1) {   //mail($To,$subject,$message,$headers)
   echo "Mail Sent.";
} else {
   echo "Mail is not sent.";
}

		?>   
		    