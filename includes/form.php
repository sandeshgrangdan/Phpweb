<?php include 'includes/db.php';
	 $match='';
	 if(isset($_POST['confirm'])){
		 $date = date('Y-m-d h:i:s');
		 
		 if($_POST['password'] == $_POST['con_password']){
		 $ins_sql= "INSERT INTO user (role, user_f_name,user_l_name,user_email,user_password,user_gender,user_marital_status,user_phone_no,user_designation,user_website,user_address,user_about_me,user_date) 
		 VALUES ('subscriber','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[marital_status]','$_POST[phone_no]','$_POST[designation]','$_POST[website]','$_POST[address]','$_POST[about_me]','$date')";
		 $run_sql=mysqli_query($conn,$ins_sql);
		 }else{
			 $match='<div class="class="col-md-10 ml-md-auto alert alert-danger">Password doesn&apos;t match</div>';
		 }
	 }
  
?>
         <div class="login-box">
         	<div class="container">
			 <article class="row" style=" width: 100%">
			 	
				 <section class="col-lg-11">
					 <fieldset>
						 <ledgend><b>Registration Form</b></ledgend>
					 <form class="form-horizontal" action="regs.php" method="post" role="form">
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="first_name" >First Name *</label>
						 	</div>
							 <div class="col-md-10 ml-md-auto">
								 <input type="text" class="form-control" name="first_name" placeholder="insert your fucking name" id="first_name" required style="background: blanchedalmond;">
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="last_name">Last Name *</label>
						 	</div>
							 <div class="col-md-10 ml-md-auto">
								 <input type="text" class="form-control" name="last_name" placeholder="insert your fucking name" id="last_name" required style="background: blanchedalmond;">
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="email" >Email Address *</label>
						 	</div>
							 
							 <div class="col-md-10 ml-md-auto">
								 <input type="email" class="form-control" name="email" placeholder="email address" id="email" required style="background: blanchedalmond;">
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		 <label for="password">password *</label>
						 	</div>
							
							 <div class="col-md-10 ml-md-auto">
								 <input type="password" class="form-control" name="password" placeholder="insert your password" id="password" required="" style="background: blanchedalmond;">
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="con_password">Confirm password *</label>
						 	</div>
							 
							 <div class="col-md-10 ml-md-auto">
								 <input type="password" class="form-control" name="con_password" placeholder="re-enter your password" id="con_password" required style="background: blanchedalmond;">
							 </div>
						 </div>
						 <? echo $match; ?>
						  
						  <div class="col-md-10 ml-md-auto">
							 <label for="gender">Gender *</label>
							 <div class="col-sm-3">
								 <select class="form-control" name="gender" id="gender" required style="background: blanchedalmond;">
									 <option value="">Select Gender</option>
									 <option value="male">Male</option>
									 <option value="female">Female</option>
									 <option value="female">XXAka</option>
								 </select> 
							 </div>
						   </div>

						 <div class="col-md-10 ml-md-auto">
							 <label for="marital_status">Marital Status *</label>
							 <div class="col-sm-3">
								 <select class="form-control" id="marital_status" name="marital_status" style="background: blanchedalmond;">
									 <option value="">Select Status</option>
									 <option value="single">Single</option>
									 <option value="married">Married</option>
									 <option value="diversed">Diversed</option>
									 <option value="other">Other</option>
								 </select> 
							 </div>
						 </div>
						 <br>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="phone_no" >Phone Number: *</label>
						 	</div>
							 
							 <div class="col-md-10 ml-md-auto">
								 <input type="text" class="form-control" name="phone_no" placeholder="insert your contact" id="phone_no" required style="background: blanchedalmond;">
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="designation">Designation</label>
						 	</div>
							 
							 <div class="col-md-10 ml-md-auto">
								 <input type="text" class="form-control" name="designation" placeholder="insert your designation" id="designation" required style="background: blanchedalmond;">
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="website">Website</label>
						 	</div>
							 
							 <div class="col-md-10 ml-md-auto">
								 <input type="text" class="form-control" name="website" placeholder="insert your official website" id="website" style="background: blanchedalmond;" >
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="address" >Address</label>
						 	</div>
							 
							 <div class="col-md-10 ml-md-auto">
			                     <textarea class="form-control" name="address" rows="3" id="address" required style="background: blanchedalmond;"></textarea>
							 </div>
						 </div>
						 <div class="form-group">
						 	<div class="col-md-10 ml-md-auto control-label" >
						 		<label for="about_me" >About me:</label>
						 	</div>
						 	 
							 <div class="col-md-10 ml-md-auto">
			                     <textarea class="form-control" name="about_me" id="about_me" rows="3" required style="background: blanchedalmond;"></textarea>
							 </div>
						 </div>
						 

						<div class="form-group">
							 
							 <div class="col-md-10 ml-md-auto">
								 <input type="submit" value="Confirms" class="btn btn-default btn-block btn-danger" name="confirm">
							 </div>
						 </div>
						 
					 </form>
					 </fieldset>
					 
				 </section>
				 
			 </article>
			</div>
		</div>

