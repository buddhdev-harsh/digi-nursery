<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$connection = new mysqli("localhost","root","","test2");

if($_POST){
	$email = $_POST['email'];
	$selectquery = mysqli_query($connection,"select * from students where email='{$email}'") or die(mysqli_error($connection));
	$count=mysqli_num_rows($selectquery);
	$row = mysqli_fetch_array($selectquery);

	if($count>0){
		
		

		// Load Composer's autoloader
		
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = 0;
			    $mail->isSMTP();                                         
			    $mail->Host       = 'smtp.gmail.com';                    
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'harahismast@gmail.com';                     
			    $mail->Password   = 'harshzxcvbnmlpoiuytrewqaz';                             
			    $mail->SMTPSecure = 'ssl';        
			    $mail->Port       = 465;                              

			    //Recipients
			    $mail->setFrom( 'harahismast@gmail.com','hello from' );
			    $mail->addAddress($email, $email);     // Add a recipient
			   
			   
			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'test password';
			    $mail->Body    = "hi test  {$row['password']}";
			    $mail->AltBody =  "hi test  {$row['password']}";
			   

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

	}else{
		 echo "<script>alert('not found')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
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
	
		<form method="Post">
			Email:<input type="email" name="email" placeholder="Enter email id" required><br>
			<input type="submit">
		<p><a href="homepage.php"> Home </a> ||<a href="#"> Register</a> ||<a href="login.php"> Login</a></p>
	
		</form>
	</div>
</body>
</html>