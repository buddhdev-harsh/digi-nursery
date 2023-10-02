<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "test2");

	
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM shop 
  WHERE name LIKE '%".$search."%'
 
 ";
}
else
{
 $query = "
  SELECT * FROM shop ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result)){
					?>
					
					<div class="squarecards" style="width:18%;height: 15%; float: left;margin-left: -30px; ">	
						<div class="card" style="width: 80%; height: 30%; margin-left: 20px; float: left;">
							
							<form method="POST">
							<div class="imagecontainer" style=" position: relative;
														        width: 165px;
														        padding-bottom:120px; /* padding is using for the height of image */
														        margin: 0px;
														        overflow: hidden;
														        border: 1px solid black;">
								
							   <div class="imgcont" style="position: absolute;
													        width: 100%;
													        height: 100%;
													        border-radius: 0px;
													        padding: 0px;
													        overflow: hidden;
       							border: 0px;"><img src="<?php echo $row['image']; ?>" style=" position: absolute;
																        top: 0;
																        bottom: 0;
																        left: 0;
																        right: 0;
																        margin: auto;
																        width: auto;
																        max-width: 100%;"></div>
							</div>

							<div class="title">
							 <h1 style="font-size: 20px;text-align: left; margin-bottom: -10px; padding: 10px;"><?php echo $row['name']; ?></h1>
							</div>
							<div class="price" style="width: 30%; height: 7%; margin-bottom: -5px; padding: 10px;text-align: left;">
								<label  style="font-size: 20px;">$<?php echo $row['price']; ?></label>
							</div>
							<input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>" />
							<input type="hidden" name="iname" value="<?php echo $row['name']; ?>"/>
							<input type="hidden" name="iprice" value="<?php echo $row['price']; ?>">
							<a href="delete.php?del=<?php echo $row['id'];?>">Remove</a>
							</form>
							</div>
						</div>
					</div>
						
					<?php
				}
}
else
{
 echo 'Data Not Found';
}

if (isset($_GET['del'])) {
	# code...
	$id = $_GET['del'];
	$queryy = "DELETE FROM shop WHERE id='$id'";
	mysqli_query($connect,$queryy);
}




?>