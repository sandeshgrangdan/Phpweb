<?php
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
				'image'	        	=>	$_POST["hidden_image"]

			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
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
			      <li style="text-align: center;">Already Added!</li>
			    </ul>

			    </div>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"],
			'image'	        	=>	$_POST["hidden_image"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

?>