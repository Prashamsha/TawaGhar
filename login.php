<?php
session_start();
$name= $_Post['username'];
//$password= $_Post[password];
$user_email= $_Post['email'];
$message= $_Post[message];
//$email_from= 'prashamsha.sindhuliya@gmail.com';
$email_subject= "New form submission";
$email_body= "User Name: $name.\n".
			"User Email: $user_email.\n".
			"User Message: $message.\n";
$to= "prashamsha.sindhuliya@gmail.com";
//$headers= "From: $emai_from \r\n";
$headers .= "Reply-To: $user_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header('Location: index.php');

?>
<form method="post" action="" >
 Username:<input type="text" id="username" ><br>
 Password:<input type="password" id="password" ><br>
 <input type="submit" name="submit" value="Login!" > <br>
 </form>