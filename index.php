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
	
	 <body style="background : #eeeeee;">
	     <?php include 'includes/header1.php' ?>

	    <!--  <div class="slider">
		 	<ul class="slides">
		 		<li class="slide">
		 			<img src="images/img2.jpg" alt="">
		 		</li>
		 		<li class="slide">
		 			<img src="images/img1.jpg" alt="">
		 		</li>
		 	</ul>
		 	
		 </div> -->
		 <div class="wrap">
			  <div id="arrow-left" class="arrow"></div>
			  <div id="slider">
			    <div class="slide slide1">
			      <div class="slide-content">
			        <span>Image One</span>
			      </div>
			    </div>
			    <div class="slide slide2">
			      <div class="slide-content">
			        <span>Image Two</span>
			      </div>
			    </div>
			    <div class="slide slide3">
			      <div class="slide-content">
			        <span>Image Three</span>
			      </div>
			    </div>
			  </div>
			  <div id="arrow-right" class="arrow"></div>
			</div>
			<br>
		 <div class="container" >
				
               
		     
		     <article class="row">
			     <section class="col-lg-8">
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
				 <!-- <?php include'includes/newfooter.php';?> -->
		
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