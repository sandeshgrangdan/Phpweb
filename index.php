<?php 
require_once "config.php";
include 'includes/db.php';

	if (isset($_SESSION['access_token'])) {
		header('Location: adminpanel/index.php');
		exit();
	}


	$loginURL = $gClient->createAuthUrl();


	  $match='';
	 if(isset($_POST['confirm'])){
		 $date = date('Y-m-d h:i:s');
		 
		 if($_POST['password'] == $_POST['con_password']){
			 
		 
		 
		 $ins_sql= "INSERT INTO user (role, user_f_name,user_l_name,user_email,user_password,user_gender,user_marital_status,user_phone_no,user_designation,user_website,user_address,user_about_me,user_date) 
		 VALUES ('subscriber','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[marital_status]','$_POST[phone_no]','$_POST[designation]','$_POST[website]','$_POST[address]','$_POST[editor1]','$date')";
		 $run_sql=mysqli_query($conn,$ins_sql);
		 }else{
			 $match='
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="alert-heading">This is an alert!</h2>
                    <p>Password does&apos;t match!
                        <a href="" data-toggle="modal" data-target="#regs" class="alert-link">Click me to continue!</a>
                    </p>
                </div>
            </div>
            </div>';
		 }
	 }



// session_destroy();
// echo "<pre>";
// print_r($_SESSION['shopping_cart']);

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
<?php  include 'includes/db.php';
include 'includes/feadback.php';
include 'includes/mail.php'; ?>
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
	 <body style="background : #eeeeee;">
	 	<?php include 'includes/modal.php'?>
	     <?php include 'includes/header1.php'; ?>

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
		     	<?php echo $match;?>

			 <div class="col-md-4" style="align-items: center;">
			 	<h2 style="font-size: 55px ;color: #black;">Special Offer</h2>
			 	<p style="align-content: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 	tempor incididunt ut labore et dolore magna aliqua.</p>
			    <div class="box">
					<div class="icon"><i class="fa fa-user"></i></div>
					<div class="content">
						<h3>Search</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						</p> 
					</div>
				</div>
			</div>
			<div class="col-md-4" style="align-items: center;">
				<h2 style="font-size: 55px ;color: #black;">Special Offer</h2>
				<p style=" align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 	tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="box" style="background: #4caf50;">
					<div class="icon" style="background: #319635;"><i class="fa fa-search"></i></div>
					<div class="content">
						<h3>Search</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						</p> 
					</div>
				</div>
			</div>
			<!-- <div class="box">
				<div class="icon"><i class="fa fa-map"></i></div>
				<div class="content">
					<h3>Search</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p> 
				</div>
			</div>
 -->
		       
			     	
					
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
			 <?php include 'includes/content.php';?>
		</div>
		<?php include 'includes/form.php'; ?> 
		<section id="wrapper" class="skewed">

				    <div class="layer bottom">
				    	
				      <div class="content-wrap">
				      	<h2>About US</h2>
				        <div class="content-body">
				          <h2>Look Sharp</h2>
				          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam temporibus dolore vero reiciendis atque debitis. Sequi at consequatur deserunt?</p>
				        </div>
				        <img src="images/DSDf.png" alt="">
				      </div>
				    </div>

				    <div class="layer top">
				        <div class="content-wrap">
				        	<h2 style="color: #fff;">About US</h2>
				          <div class="content-body">
				            <h2>Dherai Sasto Deal</h2>
				            <p>Welcome to Dherai Sasto Deal and the world most advance shoping technology.No lines, no checkout just grab and go.
				            Thanks For Visiting Us</p>
				          </div>
				          <img src="images/DSD.png" " 
				          alt="">
				        </div>
				      </div>

				       <div class="handle"></div>
				 </section>
		
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
		   <script>
			     CKEDITOR.replace( 'editor1' );
			 </script>
	 </body>
</html>