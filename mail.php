<?php

if(isset($_POST['email'])) 
{
	
$email=$_POST('email');
$phone=$_POST('phone');
$name=$_POST('name');

$subject = "GET IN TOUCH.";
$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;">Please Activate your account</div>
Your password : '.$pass.'<br/>
<a href="http://rgcit.in/curelife7/activate_account.php?tqwertyuiasdfghjzxcvbn='.$token.'" target="_blank">click Here</a><br/><br/>or Copy below link in Your browser : <br/><br/>http://rgcit.in/curelife7/activate_account.php?tqwertyuiasdfghjzxcvbn='.$token.'
</body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers  .= "From:noreply@scaledesk.com\r\n";
$headers .= "Content-type: text/html;charset=iso-8859-1" . "\r\n";
$retval = mail ($email,$subject,$message,$headers);
 header("location: index.php");
}
else{
	header("location: index.php");
}


?>