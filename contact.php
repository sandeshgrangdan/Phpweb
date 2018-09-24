<?php include 'includes/db.php';
	 if(isset($_POST['submit_contact'])){
		 $date = date('Y-m-d h:i:s');
		 
		 $ins_sql= "INSERT INTO comments (name,email,subject,comment,date) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[comment]','$date')";
		 $run_sql=mysqli_query($conn,$ins_sql);
	 }
  
?>
<!DOCTYPE html>
<html>
	 <head>
		 <title>Cms system</title>
		 <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		 <script src="../bootstrap/js/bootstrap.jss"></script>
		 <script src="../js/jquery.js"></script>
	 </head>
	 <body>
		 <?php include 'includes/header.php';?>
		 <div class="container">
			 <article class="row">
				 <section class="col-lg-8">
					 <div class="page-header">
						 <h2>Contact Us Form</h2>
					 </div>
					 <form class="form-horizontal" action="contact.php" method="post" role="form">
						 <div class="form-group">
							 <label for="name" class="col-sm-2 control-label">Name *</label>
							 <div class="col-sm-8">
								 <input type="text" class="form-control" name="name" placeholder="insert your fucking name" id="name" required>
							 </div>
						 </div>
						 <div class="form-group">
							 <label for="email" class="col-sm-2 control-label">Email Address *</label>
							 <div class="col-sm-8">
								 <input type="email" class="form-control" name="email" placeholder="email address" id="email" required>
							 </div>
						 </div>
						 <div class="form-group">
							 <label for="subject" class="col-sm-2 control-label">Subeject *</label>
							 <div class="col-sm-8">
								 <input type="text" class="form-control" name="subject" placeholder="insert your fucking subject" id="subject" required>
							 </div>
						 </div>
						 <div class="form-group">
							 <label for="comments" class="col-sm-2 control-label">comment *</label>
							 <div class="col-sm-8">
								 <textarea class="form-control" name="comment" rows="10" style="resize:none"></textarea>
							 </div>
						 </div>
						 <div class="form-group">
							 <label  class="col-sm-2 control-label"></label>
							 <div class="col-sm-8">
								 <input type="submit" value="Submit your Form" class="btn btn-default btn-block btn-danger btn-sm" name="submit_contact">
							 </div>
						 </div>
						 
					 </form>
					 
				 </section>
				 <?php include 'includes/aside.php';?>
			 </article>
		 </div>
		<?php include 'includes/footer.php';?> 
	 </body>
</html>