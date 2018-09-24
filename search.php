<?php include 'includes/db.php';?>
<!DOCTYPE html>
<html>
	 <head>
		 <title>CMS System</title>
		 <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		 <script src="../bootstrap/js/bootstrap.jss"></script>
		 <script src="../js/jquery.js"></script>
	 </head>
	 <body>
		 <?php include 'includes/header.php'?>
		 <div class="container">
			 <article class="row">
			    <section class="col-lg-8">
				   
					 
				     <?php
					  if(isset($_GET['search_submits'])){
						  echo '
						    <div class="panel panel-default">
								<div class="panel-body">
								  <h4>You Search For "'.$_GET['search'].'"</h4>
								</div>
							</div>
							';
				   
					     $sel_sql ="SELECT *FROM post WHERE title LIKE '%$_GET[search]%' OR discription LIKE '%$_GET[search]%'";
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
					  }else{ echo "<b>Not Found ";}
					  
					 ?>
			     </section>
				 <?php include 'includes/aside.php';?>
			 </article>
		 </div>
		 <?php include 'includes/footer.php';?>  
	 </body>
</html>