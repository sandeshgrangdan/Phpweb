<?php
	 session_start();
	 include '../includes/db.php';
	 if(isset($_POST['submitlogin'])){
		 if(!empty($_POST['username']) && !empty($_POST['password']) == true){
			 $get_username = mysqli_real_escape_string($conn,$_POST['username']);
			 $get_password = mysqli_real_escape_string($conn,$_POST['password']);
			 $sql = "SELECT * FROM user WHERE user_email = '$get_username' AND user_password = '$get_password'";
			 if($result = mysqli_query($conn,$sql)){
				 
						 if(mysqli_num_rows($result) == 1){
							 while($rows = mysqli_fetch_assoc($result)){
							 $_SESSION['user'] = $get_username;
							 $_SESSION['role'] = $rows['role'];
							 $_SESSION['email'] = $rows['user_email'];
							 $_SESSION['familyName'] = $rows['user_l_name'];
	                         $_SESSION['givenName'] = $rows['user_f_name'];
							 }if(isset($_SESSION["shopping_cart"]))
							       header('Location: ../paypage.php');
							   elseif ( $get_username = "sandesht801@gmail.com"  ) {
							   		header('Location: adminpanel/index.php');
							   }
						 }else{
							 header('Location: ../index.php?login_error=wrong');
						 }
				 
			 }else {
				 header('Location: ../index.php?login=query_error');
			 }
		 }else {
			 header('Location: ../index.php?login_error=empty');
			 
		 }
	 }else{
		 echo header('Location: ../index.php');
	 }
?>