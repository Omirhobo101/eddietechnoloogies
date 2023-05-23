<?php
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$subject=$_POST['subject'];
$message =$_POST['message'];

if(!$name || !$email || !$message || !$subject)
{
	$error = 'Kindly fill all fields with asterisk(*)';
	include('contact.php');
	exit;
}

$to = 'info@eddietechnologiesltd.com';
$content = 'Contact Person: '.$name."\n"
			.'Email: '.$email."\n"
			.'Phone: '.$phone."\n"
			.'Message: '."\n"
			.'-------------'."\n"
			.$message;
			
$header = "From:eddietechnologiesltd.com Contact Page <noreply@eddietechnologiesltd.com>"."\n";
$header .= "Reply-To: $email"."\n";

mail($to,$subject,$content,$header);

$correct = 'Thank you, your message has been received.';
	include('contact.php');
	exit;

?>