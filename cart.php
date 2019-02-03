<?php
include 'includes/db.php';
session_start();
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

?>

<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../assets/css/docs.css" rel="stylesheet" >
            <link rel="stylesheet" type="text/css" href="CSS/btn.css">
            <link rel="stylesheet" type="text/css" href="CSS/style.css">

	 
	 
	     <title>Dherai Sasto Deal</title>
	     
		 <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
		 <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		 <link rel="stylesheet" href="../bootstrap-social/bootstrap-social.css">
		 <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
	
</head>
<?php include 'includes/modal.php';?>
<body>
	<?php  include'includes/header1.php';
	       include 'includes/feadback.php';
           include 'includes/mail.php';

	       
	?>

	<br>
	<div class="container">
		<div class="row">
     			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
			<?php
			if(isset($_SESSION['shopping_cart'])){
			     echo '<div class="col-12 text-center" ><a href="" data-toggle="modal" data-target="#signin"><button class="btn btn-danger">Sign In For Payment</button></a></div>';
			}
			         echo "</br>";
			     		$data = array();
					$category = array();
			     	$sql = "SELECT * FROM category";
			     	$run = mysqli_query($conn,$sql);
			     	if(mysqli_num_rows($run) > 0){
										
			     	while( $rows = mysqli_fetch_assoc($run) ) {
			     			array_push( $data, $rows);
			     	}
			     }
			     // echo "<pre>";
			     // print_r($data);
			     	foreach ($data as $d) {
			     		echo '<div class ="row">';
									$query = "SELECT * FROM tbl_product where display = 'on' AND c_id ='$d[c_id]'  ORDER BY id DESC LIMIT 3 ";
									$result = mysqli_query($conn, $query);
									if(mysqli_num_rows($result) > 0)
									{
										
										while($row = mysqli_fetch_array($result))
										{ 
											array_push( $category, $row);
?>
					
				  <div class="col-4">
					<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:10px;" align="center">
							<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" width="100px" height="110px" /><br/>

							<h4 class="text-info"><?php echo $row["name"]; ?></h4>

							<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

							<input type="text" name="quantity" value="1" class="form-control" />

							<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

							<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

						</div>
					</form>
				</div>
			</br>
			<?php
					}

				}$bol = "true";
				foreach ($category as $key) {
				if( $d['c_id'] == $key['c_id'] && $bol == "true" ){
					// echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
					echo '<div class="col-12 text-center" style="top:15px;"><a href="menu.php?cat_id='.$d['c_id'].'"><button class="btn btn-success" style="padding = 20px;">View More '.$d['category_name'].'</button></a></div>';
					$bol = "false";
				}
				}
				
				echo '</div>';

				echo '<br>';
			}
			?> 
	</div>
		<?php include'includes/footer.php';
		  include 'includes/signin.php';?>
		

		<script src="../bootstrap/dist/js/jquery-slim.min.js"></script>
		<script src="../bootstrap/dist/js/popper.min.js"></script> 
		 <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
		 <script src="js/script.js"></script>
		   <script>
			     CKEDITOR.replace( 'editor1' );
			 </script>
</body>
</html>