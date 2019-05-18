<?php
include '../includes/db.php';
$output = '';
		$sel_side="SELECT c_id,name,display,image from tbl_product WHERE name LIKE '%".$_POST["search"]."%' AND display = 'on'";
		$run_side=mysqli_query($conn,$sel_side);
        if(mysqli_num_rows($run_side) > 0){
        	while( $rows=mysqli_fetch_array($run_side) ){
        		$output .='<a style="text-decoration: none; color:black; font-family: '."'Inconsolata'".', monospace;" href="category.php?cat_id='.$rows['c_id'].'&name='.$rows["name"].'"><li class="list-group-item"> <img height="20px" width="20px" src="../images/'.$rows['image'].'">&nbsp'.$rows["name"].'</li></a>';
        	}
        	echo $output;
        }else{
        	echo "No Data Found";
        }
?>
