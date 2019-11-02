<?php include('feedbac.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
	<div class="bgimg"></div>
		
		<div class="header">
			<h1>Feedback</h1>
			<div class="form">
				<form method="POST">
					<h4>please provide your feedback below:</h4>
					<h4>how do you rate ovrall experience</h4>
					<div class="radios">
					<input type="radio" name="expr" value="Bad">Bad
					<input type="radio" name="expr" value="Average">Average
					<input type="radio" name="expr" value="Good">Good 
					<br>
					</div>
					
					<div class="em">Email: <input type="email" name="email" required placeholder="Email" title="Email" ><br>

					</div>
					<div  class="fb">
							Feedback: <textarea cols="50" cols="4" required placeholder="your comments" title="Feedback" name="fed"></textarea><br>
				
					</div>
					

					<input type="submit" name="submitb" value="Post">
					<p><a href="homepage.php">Home</a></p>
				</form>
			</div>
		</div>

</body>
</html>