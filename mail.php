<?php

if(isset($_POST['email'])) 
{
  	
$email=$_POST['email'];

$phone=$_POST['phone'];
$name=$_POST['name'];
/*$emailadmin="sanchit2411@gmail.com";*/
$emailadmin="nitesh@scaledesk.com";
$subject = "GET IN TOUCH.";
$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$name.'<br> Email:-'.$email.'<br>Phone:-'.$phone.'</div>


</body>
</html>';

   
           

            
 $messageUsers=file_get_contents('template.html');
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "From:sudo@scaledesk.com\r\n";
$headers = "Content-type: text/html;charset=iso-8859-1" . "\r\n";

      if(mail($emailadmin,$subject,$message,$headers))

 {
         
           if(mail($email,$subject,$messageUsers,$headers)){

      	unset($headers,$message,$email,$name,$phone,$emailadmin,$subject);
        header("location: index.php?msg=Successfully");

             } 

          else{
      			 unset($headers,$message,$email,$name,$phone,$emailadmin,$subject);
	      header("location: index.php?msg=Some  error Occurred");

                 }
       

       
  }

       else{
      			 unset($headers,$message,$email,$name,$phone,$emailadmin,$subject);
	      header("location: index.php?msg=Some  error Occurred");

         }
      


}

else{

    
	header("location: index.php");
}


?>