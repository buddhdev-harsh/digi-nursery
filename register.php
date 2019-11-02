<?php include('database.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="bgimg">	</div>
	
		<form action="register.php" method="post">
			<?php include('error.php'); ?>
			<div class="prof">
			<img src="profimg.png" align="avatar" style="width: 153px">
			<img src="closeeye.png" align="avatar" style="visibility:hidden" id="overr" class="over">
			<img src="closeeye.png" align="avatar" style="visibility:hidden" id="overrr" class="over2">
					</div>

			<div class="form">
				Name:<br>
			<input type="text" name="username" placeholder="Name" required><br>
			Email:<br><input type="email" name="email" placeholder="Email" required><br>
			Password:<br><input type="Password" name="password_1" id="myInput" onkeyup="maru()" placeholder="Password" required>
			<input type="checkbox" onclick="myFunction()"><br>
			Confirm Password:<br><input type="Password" name="password_2" id="myInputt" onkeyup="maru()" placeholder="Confirm Password" required>
			<input type="checkbox" onclick="myFunctionn()"> <br>
			<input type="submit" name="submit" value="Submit">
					<p><a href="homepage.php">Home</a> || <a href="login.php">Login</a></p>

			</div>
		</form>
		<script>
		function myFunctionn() {
  			var x = document.getElementById("myInputt");
  			if (x.type === "password") {
  				document.getElementById("overrr").style.visibility="hidden";
		
			document.getElementById("overr").style.visibility="hidden";
  			  x.type = "text";
  			} else {
    		x.type = "password";
  		}
  	}
		function myFunction() {
  			var x = document.getElementById("myInput");
  			if (x.type === "password") {
  				document.getElementById("overrr").style.visibility="hidden";
		
			document.getElementById("overr").style.visibility="hidden";
  			  x.type = "text";
  			} else {
    		x.type = "password";
  		}
	}
	function maru(){
			document.getElementById("overrr").style.visibility="visible";
		
			document.getElementById("overr").style.visibility="visible";
		}
</script>
</body>
</html>