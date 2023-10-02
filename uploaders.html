<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<link rel="stylesheet" type="text/css" href="uploaders.css">
</head>
<body>
		
<?php
		$con=mysqli_connect('localhost', 'root');
		mysqli_select_db($con,'test2');

		if(isset($_POST['upload'])){
			$file = $_FILES['timg'];
			$name = $_POST['tname'];
			$price = $_POST['tprice'];
			$des= $_POST['tdes'];

			$filename=$file['name'];
			$fileerror=$file['error'];
			$filetmp=$file['tmp_name'];

			$fileext = explode('.',$filename );
			$filecheck = strtolower(end($fileext));

			$filestored = array('png','jpg','jpeg');

			if(in_array($filecheck, $filestored)){
				$destination = 'upload/'.$filename;
				move_uploaded_file($filetmp, $destination);
				
				$q="INSERT INTO `shop`( `name`, `price`, `image`, `des`) VALUES ('$name','$price','$destination','$des')";
				$query = mysqli_query($con,$q);	
		}
	}

?>
	
		<div class="imgbg"></div>
	<div class="form">
			<h1>Upload Section</h1>

		<form action="uploaders.php" enctype="multipart/form-data" method="POST">
			<label>Name:</label><br>
			<input type="text" name="tname" placeholder="Enter Name" required><br>
			<label>Price:</label><br>
			<input type="number" name="tprice" placeholder="Enter Price" required><br>
			<label>Image:</label><br>
			<input type="file" name="timg" placeholder="Upload images here" required><br>
			<label>Description:</label><br>
			<textarea cols="25" rows="4" placeholder="Write something about it" required name="tdes"></textarea><br>
			<input type="submit" name="upload" value="upload" style="background-color: #ffffff;
      border: none;
      color: #000;
     padding: 10px 16px;
     text-decoration: none;
     margin: 4px 2px;
      margin-left: 20px;
     margin-top: 20px;
      cursor: pointer;"><br>
			<a href="shop.php"> <p style="color: #ffffff; text-decoration: none;">Check items At Shop</p></a>
		</form>
	</div>


</body>
</html>