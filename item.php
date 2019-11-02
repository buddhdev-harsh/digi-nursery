<!DOCTYPE html>
<html>
<head>
	<title>item</title>
	<link rel="stylesheet" type="text/css" href="item.css">
</head>
<body>
	
	<?php 
		$con = mysqli_connect('localhost','root','','test2');
		if(mysqli_connect_error()){
			echo "".mysqli_connect_error();
		}
			$id = $_GET['id'];
			$query = "SELECT * FROM shop WHERE id='$id';";
			$result = mysqli_query($con,$query);
			if(mysqli_num_rows($result) > 0)
			{
 			while($row = mysqli_fetch_array($result)){
				
 				?>

 		<div class="image" style="position: relative;
								width: 700px;
								padding-bottom:500px; /* padding is using for the height of image */	
								margin: 0px;
								right: 300px;
						        overflow: hidden;
								border: 1px solid black;">						        
 			<div class="imgimg" style="position: absolute;
							        width: 100%;
							        height: 100%;
							        border-radius: 0px;
							        padding: 0px;
							        overflow: hidden;
       							border: 0px;">
 				<img src="<?php echo $row['image'];?>" style="position: absolute;
														        top: 0;
														        bottom: 0;
														        left: 0;
														        right: 0;
														        margin: auto;
														        width: auto;
														        max-width: 100%;">
 			</div>
 		</div>		
		<div class="info">
		
		<div class="rating" style="margin-top: -500px;">
			<span class="heading">User Rating</span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<p>4.1 average based on 254 reviews.</p>
			<hr style="border:3px solid #f1f1f1">

			<div class="row">
			  <div class="side">
			    <div>5 star</div>
			  </div>
			  <div class="middle">
			    <div class="bar-container">
			      <div class="bar-5"></div>
			    </div>
			  </div>
			  <div class="side right">
			    <div>150</div>
			  </div>
			  <div class="side">
			    <div>4 star</div>
			  </div>
			  <div class="middle">
			    <div class="bar-container">
			      <div class="bar-4"></div>
			    </div>
			  </div>
			  <div class="side right">
			    <div>63</div>
			  </div>
			  <div class="side">
			    <div>3 star</div>
			  </div>
			  <div class="middle">
			    <div class="bar-container">
			      <div class="bar-3"></div>
			    </div>
			  </div>
			  <div class="side right">
			    <div>15</div>
			  </div>
			  <div class="side">
			    <div>2 star</div>
			  </div>
			  <div class="middle">
			    <div class="bar-container">
			      <div class="bar-2"></div>
			    </div>
			  </div>
			  <div class="side right">
			    <div>6</div>
			  </div>
			  <div class="side">
			    <div>1 star</div>
			  </div>
			  <div class="middle">
			    <div class="bar-container">
			      <div class="bar-1"></div>
			    </div>
			  </div>
			  <div class="side right">
			    <div>20</div>
			  </div>
			</div>
		</div>

	<div class="extra" style="position:absolute;margin-top:-80px;margin-right: 360px;">
		<div class="head">
			<label>Item Name:</label>
			<h2><?php echo $row['name'];?></h2>
		</div>
		<br>
		<br>
		<div class="price" style="margin-right: 255px;">
			<label>Price:</label>
			<h1><?php echo $row['price'];?></h1>
		</div>
		<br>
		<br>

		
		<div class="desc" style="margin-right: 172px;">
		<label>Item Description:</label>
		<br>
			<p><?php echo $row['des'];?></p>
		</div>
		<div class="form">
			<form method="POST" action="cart.php">
				<input type="button" name="purchase" value="Buy">
				<input type="submit" name="add_to_cart" style=" margin-top: 10px;
  margin-left: 60px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;" value="Cart"><br>
  <input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>" />
							<input type="hidden" name="iname" value="<?php echo $row['name']; ?>"/>
							<input type="hidden" name="iprice" value="<?php echo $row['price']; ?>">
			</form>
		</div>
</div>	
</div>	
<?php
			}
		}
	



	?>

	


	






</body>
</html>