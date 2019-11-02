<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$connection = new mysqli("localhost","root","","test2");
if(mysqli_connect_errno()){
	echo "Failed to connect: ". mysqli_connect_errno();
}

if(isset($_POST["email"])){
	
		$emailto = $_POST["email"];
		$code= uniqid(true);
		$query = mysqli_query($connection, "INSERT INTO resetPassword(code,email) VALUES ('$code','$emailto')");
		if(!$query){
			exit("Error");
		}

		$mail = new PHPMailer(true);

			try {
			    
			    $mail->SMTPDebug = 0;
			    $mail->isSMTP();                                         
			    $mail->Host       = 'smtp.gmail.com';                    
			    $mail->SMTPAuth   = true;                                   
			    $mail->Username   = 'harahismast@gmail.com';                     
			    $mail->Password   = 'harshzxcvbnmlpoiuytrewqaz';                             
			    $mail->SMTPSecure = 'ssl';        
			    $mail->Port       = 465;                              

			    $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/resetPassword.php?code=$code";
			    $mail->setFrom( 'harahismast@gmail.com','hello from' );
			    $mail->addAddress($emailto, $emailto);     
			    $mail->isHTML(true);                   
			    $mail->Subject = 'Password reset link';
			    $mail->Body    = "<h1>you request a password reset</h1>
			    click <a href='$url'>this link </a>to do so";
			    $mail->AltBody =  "no body";
			   

			    $mail->send();
			    echo 'Reset password has been sent to email';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			exit();

	
}





 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<style type="text/css">
	body{
		margin: 0;
		background-color: #ffffff;
		background-position: center;
	}
	form{
		background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid red;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 20px;
  text-align: center;
  border-radius: 25px;
  -webkit-animation-animation:example 1s infinite;
  animation: example 1s infinite;

   /* Safari 4.0 - 8.0 */
  	}
	@-webkit-keyframes example {
  from {border-color: white;}
  to {border-color: red;}
}

/* Standard syntax */
@keyframes example {
  from {border-color: red;}
  to {border-color: white;}
}
	input[type=submit]{
		
		background-color: #ffffff;
  		border: none;
  		color: #000;
 		 padding: 10px 16px;
 		 text-decoration: none;
 		 margin: 4px 2px;
  		margin-left: 20px;
 		 margin-top: 20px;
  		cursor: pointer;
  		font-family: "Times New Roman"

  		
	}	
	input[type=submit]:hover{
		background-color: #000;
  		color: #ffffff;
  		font-style: bold;
	}
		

	input[type=email]{
		color: #000;
		background-color:#FFCCFF;
		font-family: "Times New Roman";
		padding: 10px;
		margin-left: 3px;

	}
	a{
		padding: 35px;
		color: #FFFFFF;
		text-decoration: none;
	}
	a:hover{
		color: #000;
		text-decoration: none;
	}
	</style>
</head>
<body>
	<form method="POST">
		
		Email:<input type="email" name="email" autocomplete="off" required placeholder="Enter Email">
		<input type="submit" name="submit">
		<br>
		<br>
		<br>
		<a href="homepage.php">Home</a>
	</form>
</body>
</html>