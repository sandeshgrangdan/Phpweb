<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
include '../includes/db.php'; 
	  require_once "config.php";
$loginURL = $gClient->createAuthUrl();
include 'include/session.php';
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				include 'include/cartrmessage.php';
			}
		}
	}
}
if(isset($_GET["d_id"])){
	foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["d_id"])
			{
				if( $_SESSION["shopping_cart"][$keys]['item_quantity'] == 1)
					unset($_SESSION["shopping_cart"][$keys]);
				else{
						$_SESSION["shopping_cart"][$keys]['item_quantity'] = $values["item_quantity"] - 1;
						echo ' 	<style type="text/css">
				 		div.messages{
				 			background-color: #ff6b6b;
				 			color: #f7fff7;
				 			font-size: 20px;
				 		}
				 		ul.messages{
				 			list-style-type: none;
				 		}
				 	</style>

				    <div class="messages">

				    <ul class="messages">
				      <li style="text-align: center;">Iteam Increased by 1</li>
				    </ul>

				    </div>';
				}
			}
		}
}
if(isset($_GET["i_id"])){
	foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["i_id"])
			{
				$_SESSION["shopping_cart"][$keys]['item_quantity'] = $values["item_quantity"] + 1;
			}
		}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Checkout :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<b>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<?php include'include/header.php';?>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.php">Home</a>
							<i>|</i>
						</li>
						<li>Checkout </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3" style="text-align: center;">Checkout For Item</h3>
				<div class="checkout-right">
					<h4 style="text-align: center;">
						<span><?php if(isset($_SESSION["shopping_cart"])) {
										if( count($_SESSION["shopping_cart"]) == 0 ){
											echo "No item for checkout"; 
											echo "<br>";
										    echo '<a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4" style="color:black;">Shop Now</a>';
										}else{
											echo "Your shopping cart contains:".count($_SESSION["shopping_cart"]);	
										}
											
									}
									else{
										echo "No iteam for checkout";
										echo "<br>";
										echo '<a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4" style="color:black;">Shop Now</a>';
										}
									?>		
						</span>
					</h4>
					<?php if(!empty($_SESSION["shopping_cart"])) { ?>
						<table class="timetable_sub">
							<thead>
								<tr>
									<th>SL No.</th>
									<th>Product</th>
									<th>Quantity</th>
									<th>Product Name</th>

									<th>Price</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; 
								   foreach($_SESSION["shopping_cart"] as $keys => $values) { 

									echo '

									<tr class="rem1">
										<td class="invert">'.$i.'</td>
										<td class="invert-image">
											<a href="single.php?id='.$values["item_id"].'">
												<img src="../images/'.$values["image"].'" alt=" " class="img-responsive">
											</a>
										</td>
										<td class="invert">
											<div class="quantity">
												<div class="quantity-select">
													<a href="checkout.php?d_id='.$values["item_id"].'"><div class="entry value-minus">&nbsp;</div>
													<div class="entry value">
														<span>'.$values["item_quantity"].'</span>
													</div>
													<a href="checkout.php?i_id='.$values["item_id"].'"><div class="entry value-plus active">&nbsp;</div></a>
												</div>
											</div>
										</td>
										<td class="invert">'.$values["item_name"].'</td>

										<td class="invert">'.number_format( $values["item_quantity"] * $values["item_price"], 2).'</td>
										<td class="invert">
											<div class="rem">
											<a href="checkout.php?action=delete&id='. $values["item_id"].'"><div class="close1"> </div></a>
												
											</div>

										</td>
									</tr>';
									$i++;
								}
								 ?>
								
							</tbody>
						</table>
				    <?php  } ?>
				</div>
				
				<div class="checkout-left row">
					<?php if(!empty($_SESSION["shopping_cart"])) { ?>
					<div class="col-md-4 checkout-left-basket">
						<h4>Continue to basket</h4>
						<ul>
							<?php if(!empty($_SESSION["shopping_cart"])) { 
								$sc = 0.00;
								$total = 0.00;
								   $i=1; 
								   foreach($_SESSION["shopping_cart"] as $keys => $values) { 
								   	echo '
								   	<li>Product'.$i.'
										<i>-</i>
										<span>$'.number_format( $values["item_quantity"] * $values["item_price"], 3).'</span>
									</li>
									';
									$c = $values["item_quantity"] * $values["item_price"];
									
									$total  = $total + $c;
									$sc  = number_format($sc + 5.09,3);
									$i++;
								   }
							} ?>
							<li>Total Service Charges
								<i>-</i>
								<span><?php echo '$'.$sc; ?></span>
							</li>
							<hr>
							<li>Total
								<i>-</i>
								<span><?php echo '$'.number_format($total+$sc,3);?></span>
							</li>
						</ul>
					</div>
					<?php } ?>
					<div class="col-md-8 address_form">
						<?php if(!isset($_SESSION['email']) ) { ?>
							<h4>Add a new Details</h4>
							<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
								<section class="creditly-wrapper wrapper">
									<div class="information-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Full name: </label>
												<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
											</div>
											<div class="card_number_grids">
												<div class="card_number_grid_left">
													<div class="controls">
														<label class="control-label">Mobile number:</label>
														<input class="form-control" type="text" placeholder="Mobile number">
													</div>
												</div>
												<div class="card_number_grid_right">
													<div class="controls">
														<label class="control-label">Landmark: </label>
														<input class="form-control" type="text" placeholder="Landmark">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Town/City: </label>
												<input class="form-control" type="text" placeholder="Town/City">
											</div>
											<div class="controls">
												<label class="control-label">Address type: </label>
												<select class="form-control option-w3ls">
													<option>Office</option>
													<option>Home</option>
													<option>Commercial</option>

												</select>
											</div>
										</div>
										<button class="submit check_out">Delivery to this Address</button>
									</div>
								</section>
							</form>
						<?php } else { ?>
						<?php if(isset($_SESSION['email']) && isset($_SESSION['shopping_cart'])){ ?>
							<?php if( count($_SESSION["shopping_cart"]) != 0 ) { ?>
								<div class="checkout-right-basket">
									<a href="payment.php">Make a Payment </a>
								</div>
							<?php } ?>
						<?php }
							
						}
						?>

					</div>

					<div class="clearfix"> </div>

				</div>
			

			</div>

		</div>
	</section>
	<!--//checkout-->
	<!--footer -->
	<?php 
		include 'include/footer.php';
	?>
	<!-- //footer -->
	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('php,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

</php>