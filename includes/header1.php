<div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px">
	<h2 class="pull-left">Dherai Sasto Deal</h2><br><br>
	<p class="pull-left">Let's Shop Now</p>
</div>

 <header class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" role="navigation" >
 	
 	<div class="container">
 		
 	  <!--  <span class="navbar-text"><b>Dherai Sasto Deal</b></span> -->		
			<ul class="pull-left">
				<li><b><span class="fa fa-home"></span> Home</li>
				<li><span class="fa fa-shopping-bag"></span> Shop</li>
				<li><span class="fa fa-address-book"></span> Contact Us</li>
				<li><span class="fa fa-registered"></span> Registration</li>
				<li><span class="fa fa-arrow-circle-down"></span> Category</b>
					<ul>
			        	<?php
										 $sel_side="SELECT * FROM category ";
										 $run_side=mysqli_query($conn,$sel_side);
										 while($rows=mysqli_fetch_assoc($run_side)){ 
											  echo '
											  	<li>
												<a href="menu.php?cat_id='.$rows['c_id'].'" class="nav-link ">'.$rows['category_name'].'</a>
												</li>
											  ';
										  }
								?>
					</ul>
				</li>
			</ul>
			<form class="from-group pull-right" action="search.php" role="form">
								
									  <div class="search-box">
									     <input type="text" placeholder="Search" class="input">
									     <div class="btns">
									       <i class="fa fa-search" aria-hidden="true"></i>
									     </div>
									  </div>
								
		     </form>
    </div>

	
</header>