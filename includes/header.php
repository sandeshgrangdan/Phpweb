<div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px">
	<h2 class="pull-left">Dherai Sasto Deal</h2><br><br>
	<p class="pull-left">Let's Shop Now</p>
</div>

 <header class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" role="navigation">
 	
 	<div class="container">
 		<span class="navbar-text"><b>Dherai Sasto Deal</b></span>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse-target" >
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapse-target">

			
			<ul class="navbar-nav " >
				<?php
										 $sel_side="SELECT * FROM category ";
										 $run_side=mysqli_query($conn,$sel_side);
										 while($rows=mysqli_fetch_assoc($run_side)){
											 if(isset($_GET['post_id'])){

												 if($_GET['post_id']==$rows['c_id']){
													 $class='active';
												 }else{
													 $class='';
												 }

											 } else{
												 $class='';
											 }
											 
											  echo '
											  	<li class="nav-item">
												<a href="menu.php?cat_id='.$rows['c_id'].'" class="nav-link '.$class.'">'.$rows['category_name'].'</a>
												</li>
											  ';
										}
								?>
				

				<div class="nav-item dropdown ">
				  <a class="nav-link dropdown-toggle" data-target="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More
				    <span class="caret"></span>
				  </a>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="contact.php">Registration Form</a>
						<div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="contact.php">Contact Us</a>
				  </div>
				</div>
				
			 </ul>

		</div>
	</div>
	<form class="from-group pull-right" action="search.php" role="form">
						
							  <div class="search-box">
							     <input type="text" placeholder="Search" class="input">
							     <div class="btns">
							       <i class="fa fa-search" aria-hidden="true"></i>
							     </div>
							  </div>
						
   </form>
	
</header>