  <!DOCTYPE html>
<?php  include 'includes/db.php' ?>
<html>
     <head> 
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="assets/css/docs.css" rel="stylesheet" >
            <link rel="stylesheet" type="text/css" href="css/style.css">
	 
	 
	     <title>Dherai Sasto Deal</title>

		 <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
		 <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		 <link rel="stylesheet" href="../bootstrap-social/bootstrap-social.css">
		
	 <body>
	     <?php include 'includes/header.php' ?>

		 <br>
		 
		 <div class="container" >
		     <article class="row">
			     <section class="col-lg-8">
				     <?php
					     $sel_sql ="SELECT *FROM post WHERE category = '$_GET[cat_id]' AND status='published'";
						 $run_sql = mysqli_query($conn,$sel_sql);
						 while($rows = mysqli_fetch_assoc($run_sql)){
							 echo '
							 <div class="panel panel-info">
						           <div class="panel-heading">
							        <h3><a href="post.php?post_id='.$rows['id'].'">'.$rows['title'].'</a></h3>
						           </div> 
							       <div class="panel-body">
									
										  <div class="col-lg-4">
											 <img src="'.$rows['image'].'" width="100%">
										  </div>
										  <div class="col-lg-8">
											<p>'.substr($rows['discription'],0,300).'...... </p>
										 </div>
					            	 <a href="post.php?post_id='.$rows['id'].'" class="btn btn-primary">Read more</a>
					               </div>
					          </div>
					 
							 ';
						 }
					 ?>
				 
				     
		
			 	</section>
			 
			    <?php include 'includes/aside.php';?>
			 </article>
		 </div>
		 
		 <?php include 'includes/footer.php';?> 
		 
		 
		 
		 
		<script src="../bootstrap/dist/js/jquery-slim.min.js"></script>
		<script src="../bootstrap/dist/js/popper.min.js"></script> 
		 <script src="../bootstrap/dist/js/bootstrap.min.js"></script> 
		 <script src="js/script.js"></script>
	 </body>
</html>