<div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px">
	<h2 class="pull-left">Dherai Sasto Deal</h2><br><br>
	<p class="pull-left">Let's Shop Now</p>
</div>

 <header class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" role="navigation" >
 	
 	<div class="container">
 		
 	  <!--  <span class="navbar-text"><b>Dherai Sasto Deal</b></span> -->		
			<ul class="pull-left">
				<li><a href="index.php" class="a"><span class="fa fa-home"> <b style="font-family: 'Times New Roman', Times, serif;">Home</b></span></a></li>
				<li><a href="#" class="a"><span class="fa fa-shopping-bag"> <b>Shop</b></span></a></li>
				<li><a href="contact.php" class="a"><span class="fa fa-address-book"> <b>Contact Us</b></span></a></li>
				<li><a  class="a" data-toggle="modal" data-target="#regs"><span class="fa fa-registered"> <b>Registration</b></span></a></li>
				<li><a class="a"><span class="fa fa-arrow-circle-down"> <b>Category</b></span> </a>
					<ul>
			        	<?php
										 $sel_side="SELECT * FROM category ";
										 $run_side=mysqli_query($conn,$sel_side);
										 while($rows=mysqli_fetch_assoc($run_side)){
										 if($rows['category_name'] == 'home'){
						                         continue;
						                     } 
											  echo '
											  	<li>
												<a href="menu.php?cat_id='.$rows['c_id'].'" class="nav-link ">'.ucfirst($rows['category_name']).'</a>
												</li>
											  ';
										  }
								?>
					</ul>
				</li>
				<li>
					<a href="cart.php" class="a"><b><span class="fa fa-cart-plus" style="font-size: 45px;"></span></b></a> 
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