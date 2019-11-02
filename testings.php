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

				$displayquery = "SELECT  `name`, `price`, `image`, `des` FROM `shop`";
				$querydisplay = mysqli_query($con, $displayquery);


				while($result = mysqli_fetch_array($querydisplay)){
					?>
					<div class="squarecards">	
						<div class="card">
							<div class="image">
								<form method="POST">
							   <img src="<?php echo $result['image']; ?>">
							</div>
							<div class="title">
							 <h1 name="iname"><?php echo $result['name']; ?></h1>
							</div>
							<div class="price">
								<label name="iprice"><?php echo $result['price']; ?></label>
							</div>
							<div class="des">
							 <p><?php echo $result['des']; ?></p>
							<button name="seemore">See More...</button><input type="submit" name="cart" value="cart"></form>
							</div>
						</div>
					</div>		
					<?php
				}
			}
		}
?>
<?php 
				$con=mysqli_connect('localhost', 'root');
				mysqli_select_db($con,'test2');
				$displayquery = "SELECT  `name`, `price`, `image`, `des` FROM `shop`";
				$querydisplay = mysqli_query($con, $displayquery);


				while($result = mysqli_fetch_array($querydisplay)){
					?>
					<div class="squarecards">	
						<div class="card" style="width: 15%; margin-top: -70px;margin-bottom: 100px; height: 60%;">
							<div class="image" style="width: 100%;">
							  <img src="<?php echo $result['image']; ?>">
							</div>
							<div class="title">
							 <h1><?php echo $result['name']; ?></h1>
							</div>
							<div class="price">
								<h4 style="text-align: center; margin-top: -10px;"><?php echo $result['price']; ?></h4>
							</div>
							<div class="des">
							 <p style="padding-bottom: 30px; text-align: left; word-wrap: break-word;"><?php echo $result['des']; ?></p>
							<button style="margin-left:-10px;">See More...</button>  <input type="submit" name="cart" value="cart">
							</div>
						</div>
					</div>		
					<?php
				}
?>

<div class="des">
							 <p style="padding: 30px;"><?php echo $row['des']; ?></p>





							 cart.php

 <div class="cards" id="parent">
    <div class="List" id="child1">
        <div class="image" >
            <img src="tree2.jpg" style="width: 100%">
        </div>
        <div class="product">
            <h1>Rose</h1>
        </div>
        <div class="price">
            <h2>$23.</h2>
        </div>
        <div class="des">
            <p>write somthing here..dsdasdasdasdddddddddddddddddddddddddddd</p>
        </div>
        <div class="submit">
            <form>
                <input type="button" name="remove" value="Remove" onClick="removeElement('parent','child1');">
                <input type="submit" name="submit" value="Purchase">
            </form>
        </div>
    </div>

<div class="List" id="child2">
        <div class="image">
            <img src="tree1.jpg" style="width: 100%">
        </div>
        <div class="product">
            <h1>Rose</h1>
        </div>
        <div class="price">
            <h2>$23.</h2>
        </div>
        <div class="des">
            <p>write somthing here..dsdasdasdasdddddddddddddddddddddddddddd</p>
        </div>
        <div class="submit">
            <form>
                <input type="button" name="remove" value="Remove" onClick="removeElement('parent','child2');">
                <input type="submit" name="submit" value="Purchase">
            </form>
        </div>
    </div>

        <div class="List" id="child3">
        <div class="image">
            <img src="rose.jpg" style="width: 100%">
        </div>
        <div class="product">
            <h1>Rose</h1>
        </div>
        <div class="price">
            <h2>$23.</h2>
        </div>
        <div class="des">
            <p>write somthing here..dsdasdasdasdddddddddddddddddddddddddddd</p>
        </div>
        <div class="submit">
            <form>
                <input type="button" name="remove" value="Remove" onClick="removeElement('parent','child3');">
                <input type="submit" name="submit" value="Purchase">
            </form>
        </div>


    </div>
    
</div>

items.php


<div class="info">
		
		<div class="rating">
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
		<div class="extra">
		<div class="head">
			<h2>Roses</h2>
		</div>

		<div class="price">
			<h1>$23</h1>
		</div>

		<div class="desc">
			<p>write anything... </p>
		</div>
		<div class="form">
			<form>
				<input type="button" name="purchase" value="Buy">
				<input type="button" name="cart" value="Cart"><br>
			</form>
		</div>
</div>