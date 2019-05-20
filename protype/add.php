<?php
session_start();
        $tp = 0.00;
        $total = 0.00;
        if(isset($_SESSION["shopping_cart"])){
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                        $total += $_SESSION["shopping_cart"][$keys]['item_quantity'];

        }
        if(isset($_POST["add"])){
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                                if($values["item_id"] == $_POST["add"])
                                {
                                        $_SESSION["shopping_cart"][$keys]['item_quantity'] = $values["item_quantity"] + 1;
                                        $q = $values["item_quantity"] + 1;
                                        $p = number_format($q*$values["item_price"],2);
                                        $total = $total + 1;
                                        $s = number_format($total*2.00,2);
                                        foreach($_SESSION["shopping_cart"] as $keys => $values){
                                                if ($values["item_id"] == $_POST["add"]) {
                                                        continue;
                                                }
                                                $tp += $values["item_quantity"]*$values["item_price"];
                                        }

                                        $tp =number_format($tp+$p+$s,3); 
                                        echo $q.","."$".$p.","."$".$s.","."$".$tp;
                                }else{
                                        
                                }
                        }
        }
        if(isset($_POST["sub"])){
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                                if($values["item_id"] == $_POST["sub"])
                                {   
                                        if($values["item_quantity"] > 1){
                                                $_SESSION["shopping_cart"][$keys]['item_quantity'] = $values["item_quantity"] - 1;
                                                $q = $values["item_quantity"] - 1;
                                                $p = number_format($q*$values["item_price"],2);
                                                $total = $total - 1;
                                                $s = number_format($total*2.00,2);
                                                foreach($_SESSION["shopping_cart"] as $keys => $values){
                                                if ($values["item_id"] == $_POST["sub"]) {
                                                        continue;
                                                        }
                                                        $tp += $values["item_quantity"]*$values["item_price"];
                                                }

                                                $tp =number_format($tp+$p+$s,3); 
                                                echo $q.","."$".$p.","."$".$s.","."$".$tp;
                                        }else{
                                                echo "1";
                                        }
                                }else{
                                        echo '';
                                       
                                }
                        }
        }

?>
