 <!DOCTYPE html>
<?php  include 'includes/db.php'?>
<html>
     <head>
	         <link href="assets/css/bootstrap.css" rel="stylesheet">
             <link href="assets/css/font-awesome.css" rel="stylesheet">
             <link href="assets/css/docs.css" rel="stylesheet" >
	 
	     <title>CMS System</title>
		 <link rel="stylesheet" href="../bootstrap/bootstrap-social.css">
		 <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		 <script src="../bootstrap/js/bootstrap.jss"></script>
		 <script src="../js/jquery.js"></script>
	 </head>
	 <body>
	     <?php include 'includes/header.php';?>
		 
		 <div class="container">
		     <article class="row">
			     <section class="col-lg-8">
                      <?php
					  if(isset($_GET['post_id'])){
						$sel_sql ="SELECT *FROM post WHERE id = '$_GET[post_id]'";
						 $run_sql = mysqli_query($conn,$sel_sql);
						 while($rows = mysqli_fetch_assoc($run_sql)){
							 echo '
							     <div class="panel panel-default">
									<div class="panel-body">
										<div class="panel-header">
											<h2>'.$rows['title'].'</h2>
										</div>
										<img src="'.$rows['image'].'" width="100%">
										<p>'.$rows['discription'].'</p>
									</div>
								 </div>
							 ';
						 }
					  }else {
						  echo '<div class="alert alert-danger"><h3>No Post You&apos;ve Selected to Show You Have <a href="index.php">click here to select the post</a></h3></div>';
					  }
				      ?>		
			     </section>
			 
			    <?php include 'includes/aside.php';?>
			 </article>
		 </div>
		 
		 <?php include 'includes/footer.php';?> 
		 		 
		 
	 </body>
</html>