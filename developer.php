<!DOCTYPE html>
<html>
<head>
	<title>Developer</title>
	<style>
		body{
			margin:0;}
		header{
background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 20px;
  text-align: center;
  border-radius: 25px;
		}
		.bgimg{

	background-image: url(welcomphoto.jpg);
	background-size: cover;
	height: 100vh;
	background-repeat: no-repeat;
	 filter: blur(8px);
  -webkit-filter: blur(8px);

}
.github{
	border-radius: 50%;
	margin-right: 20px;
}
h2{
	color: #ffffff;
	text-decoration: underline;
	 font-family: "Times New Roman", Times, serif;
}
h3{
	display: inline;
	margin:5px;
	padding: 5px;
}
a p{
	text-decoration: underline;
	color: #ffffff;	
	bottom: 10px;
	z-index: 1;

}
.s1{
	float: left;
}
.s2{
	float: right;
}.sbs{
	margin-top: -20px;
	padding:20px;
}
.gr{
	margin-top: 60px;
}

a p:hover{
	color: #000;
}
	</style>
</head>
<body>
	<div class="bgimg"></div>
	<header>
		<h2>Developer</h2>
		<div class="sbs">
		<div class="s1">	
		<h3>Name:</h3>Harsh Buddhdev<br>
		<h3>Email:</h3>Ht50159@gmail.com<br>
		<h3>Phone.no:</h3>+91-8780616665<br>
		</div>
		<div class="s2">
		<h3>Name:</h3>Saumya Patel<br>
		<h3>Email:</h3>Saumyapatel@gmail.com<br>
		<h3>Phone.no:</h3>+91-9824129229<br>
		</div>
		</div>
		<div class="gr">
		<h2>Graduation Info</h2>
		
		<h3>University:</h3>Indus University-Rachharda<br>
		<h3>Branch:</h3>Computer Science Engineering<br>
		<h3>Degree:</h3>B.Tech<br>
		</div>
		<h2>Communicate With Harsh</h2>
		<a href="https://github.com/harshdevl" target="_blank"><img src="github.png" class="github" style="width: 35px"></a>
		<a href="https://www.linkedin.com/in/harsh-thakkar-9080aa16a/" target="_blank"><img src="linkdin.png" style="width: 35px" ></a>
		<a href="homepage.php"><p>Home</p></a>
	</header>
</body>
</html>