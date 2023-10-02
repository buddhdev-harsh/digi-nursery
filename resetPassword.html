<?php 

$connection = new mysqli("localhost","root","","test2");
if(mysqli_connect_errno()){
	echo "Failed to connect: ". mysqli_connect_errno();
}
	if(!isset($_GET["code"])){
		exit("cant find page");
	}
	$code = $_GET["code"];
	$getemailquery = mysqli_query($connection,"SELECT email FROM resetPassword WHERE code='$code'");
	if(mysqli_num_rows($getemailquery)==0){
		exit("cant find page");
	}
if(isset($_POST["password"])){
	$pw=$_POST["password"];
	$pwd=$pw;
	$row=mysqli_fetch_array($getemailquery);
	$email=$row["email"];
	$query=mysqli_query($connection,"UPDATE students SET password='$pwd' WHERE email='$email'");
	if($query){
		$query=mysqli_query($connection,"DELETE FROM resetPassword WHERE code='$code'");
		exit("password updated");
	}
	else{
		exit("something went wrong");
	}
}

?>
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
		

	input[type=password]{
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
<form method="POST">
	<input type="password" name="password" placeholder="New Password">
	<br>
	<input type="submit" name="submit" value="Update Password">
</form>