<?php 
$errors = '';
$myemail = 'contact@pizzawithbeth.com';
if(
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$message = $_POST['message']; 



if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission:";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Message \n $message"; 
	
	
	
	mail($to,$email_subject,$email_body);
	//redirect to the 'thank you' page
	header('Location: thanks.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>