<?php

include 'connect.php';

$id = $_POST['m_id']; // get id through query string
$cart = $_POST['c_or'];
$del = mysqli_query($con,"delete from cart where menu_id = '$id' AND cart_or = '$cart' "); // delete query

if($del)
{
    $message = 'นำออกจากตะกร้า';

        
        header("location:cart.php");
    mysqli_close($link); // Close connection
    
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

// Close connection
mysqli_close($link);
?>