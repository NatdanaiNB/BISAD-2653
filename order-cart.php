


<?php
 $order = hexdec(uniqid());
 $sumfood = $_POST['counttotal'];
 $total = $sumfood + $_POST['rate'];
 echo $_POST['c_username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 $status = "notready" ;
$link = mysqli_connect("localhost", "root", "", "phplogin");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


   






        if ($_POST['c_username'] != null) {
        $sql = "SELECT * FROM cart ";
        $result = $link->query($sql);
           while($abc = $result->fetch_assoc()) { 

            if ($stmt = $link->prepare('INSERT INTO ordered (menu_pic,menu_name,price,number,rate,totalprice,totalprice_rate,shopname,status,c_username,c_firstname,c_lastname,c_address) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)')) {
                $stmt->bind_param('ssisiiissssss' , $abc['menu_pic'], $abc['menu_name'], $abc['menu_price'],$order, $_POST['rate'],$sumfood,$total,$_POST['shop_name'],$status,$_POST['c_username'],$_POST['c_firstname'],$_POST['c_lastname'],$_POST['c_address']);
                $stmt->execute();
                $cart = $abc['cart_or'];
                $menu_id = $abc['menu_id'];
                $del = mysqli_query($link,"delete from cart where menu_id = '$menu_id' AND cart_or = '$cart' ");

                


              $message = 'Please log in before order';
  
               echo "<SCRIPT> //not showing me this
                     
             window.location.replace('cus-vieworder.php');
            </SCRIPT>";
  
  
                
            }
                else{ echo"fail";}


           }
        }

// Close connection
mysqli_close($link);
?>        