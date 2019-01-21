<aside class="col-md-4">
			<div>
				   <!-- <form class="form-horizontal" action="search.php" role="form">
						<div class="card text-white " style="background-color: #4e0b5f">
						   <div class="card-body">
								<h4>Search Something</h4>
						   
						   
							   <div class="input-group">
							       <input type="search" name="search" class="form-control" placeholder="Search Something.....">
								     <div class="input-group-btn">
								         <button class="btn btn-default" name="search_submits" type="submit"><i class="fa fa-search"></i></button>
								     </div>  
						       </div>
						   </div>
							 
						</div>
				   </form>
				      <br> -->


					 <form class=" form-horizontal" role="form" action="acounts/login.php" method="post">

						<div class="card ">
						    <div class="card-header">
							  	<img src="images/avatar.png" class="avatar">
								<h2>Login Here</h2>
								<div class="input-group input-group-md">
									 <span class="login">
										  <i class="fa fa-envelope" for="username"></i>
									 </span>
									 <input class="form-control" type="text" placeholder="insert email" name="username" id="username">
								</div>
								<br>
								<div class="input-group input-group-md">
									 <span class="login">
										 <i class="fa fa-unlock-alt"></i>
									 </span>
									 <input class="form-control" type="password" placeholder="insert fucking password" name="password" id="password">
								</div>

								<br>
	          					<div class="form-group">
											<div class="col-md-12">
												<input type="submit" class="btn btn-success btn-block"  name="submitlogin" id="login_btns">
											</div> 
								</div>
								<div class="form-group">
											<div class="col-md-12">
												<a class="btn btn-block btn-social btn-google btn-md" id="login_btns">
													<span class="fa fa-google"></span> <b>Sign in with google</b>
												</a>
											</div>
								</div>
							</div>
						</div>
				     </form>

				     <br>
				     
                  

					 <div class="card  " id="scroll">
						 <div class="card-header "> 
							<div class="list-group list-group-flush"> 
								 <?php
									 $sel_side="SELECT * FROM post WHERE status = 'published' ORDER BY id DESC LIMIT 6";
									 $run_side=mysqli_query($conn,$sel_side);
									 while($rows=mysqli_fetch_assoc($run_side)){
										 if(isset($_GET['post_id'])){

											 if($_GET['post_id']==$rows['id']){
												 $class='active';
											 }else{
												 $class='';
											 }

										 } else{
											 $class='';
										 }
										 
										  echo '
										  	
											<a href="post.php?post_id='.$rows['id'].'" class="list-group-item-action '.$class.'">
												<div class="row">
													<div class="col-sm-4">
														 <img src="'.$rows['image'].'" width="100%">
													</div>
													<div class="col-sm-8">
														 <h5 class="list-group-item-heading">'.substr($rows['title'],0,100).'</h5>
														 <p class="list-group-item-text" style="font-size: 13px">'.substr($rows['discription'],0,54).'</p>
													</div>
													<div style="clear:both"></div>							
												</div>
											</a>
											

										  ';
									}
								?>
							</div>
						 </div>
					 </div>
			</div>
			<br>
			<article >
			<div class="box">
				<div class="icon"><i class="fa fa-user"></i></div>
				<div class="content">
					<h3>Search</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p> 
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-search"></i></div>
				<div class="content">
					<h3>Search</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p> 
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-map"></i></div>
				<div class="content">
					<h3>Search</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p> 
				</div>
			</div>
		</article>
					
					
 </aside>