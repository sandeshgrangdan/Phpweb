<?php
	 
	 include 'includes/db.php';
	 session_start();
	 if(isset($_POST['submitlogin'])){
		 if(!empty($_POST['email'])  && !empty($_POST['password']) ){
			 $get_username = mysqli_real_escape_string($_POST['email']);
			 $get_password = mysqli_real_escape_string($_POST['password']);
			 $sql = "SELECT * FROM user WHERE user_email = '$_POST[email]' AND user_password = '$_POST[password]'";
			 if($result = mysqli_query($conn,$sql)){
				 
						 if(mysqli_num_rows($result) == 1){
							 while($rows = mysqli_fetch_assoc($result)){
							 session_start();
							 $_SESSION['role'] = $rows['role'];
							 $_SESSION['gender'] = $rows['user_gender'];
							 $_SESSION['email'] = $rows['user_email'];
							 $_SESSION['familyName'] = $rows['user_l_name'];
	                         $_SESSION['givenName'] = $rows['user_f_name'];
							 	if( $rows['role'] == "admin" ){
									if( isset($_POST['remember']) ){
					 		   	        setcookie("email",$_POST['email'],time()+7*24*60*60 );
											 		}
											 		header('Location: adminpanel/index.php?nocookie=set');  
									}else{ 

										if( isset($_POST['remember']) ){
					 		   	                       setcookie("email",$_POST['email'],time()+7*24*60*60 );

										}

										header('Location: index.php');			   			
								    }


				             }
				          }else{
						 header('Location: index.php?error=wrong');
				          }
				 
			 }else {
				 header('Location: index.php?login_error=queryrror');
			 }
		 }else {
			 header('Location: index.php?login_error=empty');
		 }
	 }else{
	 	if( isset($_POST['cart'])){
	 		if(!empty($_POST['email'])  && !empty($_POST['password']) ){
			 $username = $conn->real_escape_string($_POST['email']);
			 $password = $conn->real_escape_string($_POST['password']);
			 $sql = "SELECT role,user_password,user_email,user_gender,user_f_name,user_l_name,Confirmed FROM user WHERE user_email = '$username'";
			 if($result = mysqli_query($conn,$sql)){
				 
						 if(mysqli_num_rows($result) == 1){
							 while($rows = mysqli_fetch_assoc($result)){
							 	if (password_verify($password, $rows['user_password'])) {
					 				if( $rows["Confirmed"] != 0 ) {
					 					
										 $_SESSION['role'] = $rows['role'];
										 $_SESSION['gender'] = $rows['user_gender'];
										 $_SESSION['email'] = $rows['user_email'];
										 $_SESSION['familyName'] = $rows['user_l_name'];
				                         $_SESSION['givenName'] = $rows['user_f_name'];

				                         if( $rows['role'] == "admin" ){
											 		if( isset($_POST['remember']) ){
					 		   	                       setcookie("email",$_POST['email'],time()+7*24*60*60 );
											 		}
											 		header('Location: adminpanel/index.php?nocookie=set');  
										}else{ 
											if(isset($_GET['cart'])){

												if( isset($_POST['remember']) ){
					 		   	                       setcookie("email",$_POST['email'],time()+7*24*60*60 );
										         }
												header('Location: payment.php');		
											}else{
												if( isset($_POST['remember']) ){
													setcookie("email",$_POST['email'],time()+7*24*60*60 );
										  		}
										 		header('Location: index.php');	
											} 			
								        }
					 				}else{
					 					echo '
	                         			<!DOCTYPE html>
										<html>
										<head>
											<title>Verify</title>
											<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
											<link href="css/fontawesome-all.css" rel="stylesheet">
										</head>
										<body>
										<br>
										<br>
											<div class="container">
												<div class="row">
													<div class="col-lg-12">
														<div class="jumbotron">
															<h1 class="display-4">Please Verify Your Email!</h1>
															<p class="lead">Dherai Sasto Deal(DSD) Send Email for Verification </p>
															<hr class="my-4">
															<a class="btn btn-primary btn-lg" href="https://mail.google.com/mail/u/0/#inbox" role="button">Verify Email</a>
														</div>
													</div>
												</div>
											</div>
										</body>
										</html>
	                         		';
					 				}
					 			}else{
									 echo '
									 <!DOCTYPE html>
									 <html>
									 <head>
										 <title>Login-Error</title>
										 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
										 <link href="css/style.css" rel="stylesheet" type="text/css" />
										 <link href="css/fontawesome-all.css" rel="stylesheet">
										 <link rel="stylesheet" href="css/bootstrap-social.css">
									 </head>
									 <body>
									 <br>
									 <br>
										 <div class="container">
											 <div class="row">
												 <div class="col-lg-12">
													 <div class="jumbotron">
														 <h1 class="display-4">Incorect Input!</h1>
														 <hr class="my-4">
														 <a class="btn btn-danger btn-lg" href="reset/forget.php" role="button">Forget Passwords</a>
														 <a class="btn btn-success btn-lg" href="index.php" role="button">Back To Homes</a>
														 <br>
														 <br>
														 <a data-toggle="modal" data-target="#signin" class="btn btn-primary btn-lg" role="button">Re-Try !</a>
													 </div>
													
												 </div>
											 </div>
										 </div>
										 
									 </body>
									 </html>
									 ';
					 			}
							 			


				             }
				          }else{
						 header('Location: index.php?login_error=wrong');
				}
				 
			 }else {
				 header('Location: index.php?login_error=queryrror');
			 }
		 }else {
			 header('Location: index.php?login_error=empty');
		 }
	 }else
	 header('Location: index.php?login_error=emptycart');
	}
?>
<?php include "include/signin.php"; ?>
		<script src="../../bootstrap/dist/js/jquery-slim.min.js"></script>
		<script src="../../bootstrap/dist/js/popper.min.js"></script> 
		 <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>