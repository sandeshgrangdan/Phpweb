<?php 
session_start();

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

  <!DOCTYPE html>
<?php  include 'includes/db.php' ?>
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
	</head>
	 <body style="background : #eeeeee;">
	     <?php include 'includes/header1.php' ?>

		 <div class="wrap">
			  <div id="arrow-left" class="arrow"></div>
			  <div id="slider">
			    <div class="slide slide1">
			      <div class="slide-content">
			        <span>Dherai Sasto Deal</span>
			      </div>
			    </div>
			    <div class="slide slide2">
			      <div class="slide-content">
			        <span>Dherai Sasto Deal</span>
			      </div>
			    </div>
			    <div class="slide slide3">
			      <div class="slide-content">
			        <span>Dherai Sasto Deal</span>
			      </div>
			    </div>
			  </div>
			  <div id="arrow-right" class="arrow"></div>
			</div>
			<br>
		 <div class="container"> 
		     <article class="row">
		        
			     	<?php
			     	$i = 2;		
					$query = "SELECT * FROM tbl_product ORDER BY id ASC";
					$result = mysqli_query($conn, $query);
					if(mysqli_num_rows($result) > 0)
					{
						
						while($row = mysqli_fetch_array($result))
						{ 
					?>
				  <div class="col-sm-4">
					<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:10px;" align="center">
							<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

							<h4 class="text-info"><?php echo $row["name"]; ?></h4>

							<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

							<input type="text" name="quantity" value="1" class="form-control" />

							<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

							<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

						</div>
					</form>
				</div>
				
				
				
					<?php
							}
						}
					?>
			     <!-- <section class="col-lg-8">
				     <?php
					     $sel_sql ="SELECT *FROM post WHERE  status='published'";
						 $run_sql = mysqli_query($conn,$sel_sql);
						 while($rows = mysqli_fetch_assoc($run_sql)){
							 echo '
							 <div class="card ">
						           <div class="card-header" style="background: #eeeeee">
							        <h3><a href="post.php?post_id='.$rows['id'].'">'.$rows['title'].'</a></h3>
									
										  <div class="col-lg-12">
											 <img src="'.$rows['image'].'" width="100%">
										  </div>
										  <div class="col-lg-12">
											<p>'.substr($rows['discription'],0,300).'...... </p>
										 </div>
					            	 <a href="post.php?post_id='.$rows['id'].'" class="btn btn-primary">Read more</a>
					               </div>
					          </div>
					          <br/>
					 
							 ';
						 }
					 ?>
		     
		
			 	</section>
			  -->
			    <?php include 'includes/aside.php';?>
			 </article>	 
		</div>
		<?php include 'includes/form.php'; ?> 
		<section id="wrapper" class="skewed">

				    <div class="layer bottom">
				      <div class="content-wrap">
				        <div class="content-body">
				          <h1>Look Sharp</h1>
				          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam temporibus dolore vero reiciendis atque debitis. Sequi at consequatur deserunt?</p>
				        </div>
				        <img src="images/DSDf.png" alt="">
				      </div>
				    </div>

				    <div class="layer top">
				        <div class="content-wrap">
				          <div class="content-body">
				            <h1>Dherai Sasto Deal</h1>
				            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam temporibus dolore vero reiciendis atque debitis. Sequi at consequatur deserunt?</p>
				          </div>
				          <img src="images/DSD.png" alt="">
				        </div>
				      </div>

				       <div class="handle"></div>
				 </section>
				 <br>
		
		 <?php include 'includes/footer.php';?> 
		 
		 
		 
		  <script src="js/main.js"></script>
		<script src="../bootstrap/dist/js/jquery-slim.min.js"></script>
		<script src="../bootstrap/dist/js/popper.min.js"></script> 
		 <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
		 <script src="js/script.js"></script>
		 <script src="js/main.js"></script>
		 <script type="text/javascript">
		 	let sliderImages = document.querySelectorAll(".slide"),
			  arrowLeft = document.querySelector("#arrow-left"),
			  arrowRight = document.querySelector("#arrow-right"),
			  current = 0;
			  var boolen = 'true';
				var time = 10000;	// Time Between Switch
				// alert( sliderImages.);

				
				function changeImg(){
					reset();
					sliderImages[current].style.display = "block";
					if(current < sliderImages.length - 1){
					  current++; 
					} else { 
						current = 0;
					}
					
					  setTimeout("changeImg()", time);
					

				}
				changeImg();
				// Run function when page loads
				window.onload=changeImg;
			//Clear all images
			function reset() {
			  for (let i = 0; i < sliderImages.length; i++) {
			    sliderImages[i].style.display = "none";
			  }
			}

			// Init slider
			function startSlide() {
			  reset();
			  sliderImages[0].style.display = "block";
			}

			// Show prev
			function slideLeft() {
			  reset();
			  sliderImages[current - 1].style.display = "block";
			  current--;
			}

			// Show next
			function slideRight() {
			  reset();
			  sliderImages[current + 1].style.display = "block";
			  current++;
			}

			// Left arrow click
			arrowLeft.addEventListener("click", function() {
			  if (current === 0) {
			    current = sliderImages.length;
			    boolen = 'false';
			  }
			  slideLeft();
			});

			// Right arrow click
			arrowRight.addEventListener("click", function() {
			  if (current === sliderImages.length - 1) {
			    current = -1;
			    boolen = 'false';
			  }
			  slideRight();
			});

			startSlide();

		 </script>
	 </body>
</html>