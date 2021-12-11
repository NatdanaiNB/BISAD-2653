<?php

include 'connectstore.php';



 if(isset($_POST['menu']))
 {
    $menu_id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];

 
    $select= "select * from menu where menu_id='$menu_id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['menu_id'];
    echo $menu_id;
    if($res == $menu_id)
    {
   
       $update = "update menu  set name='$name'  where menu_id='$menu_id'";
       echo $update;
       $sql2=mysqli_query($con,$update);

       $update = "update menu  set menu_price='$price'  where menu_id='$menu_id'";
       $sql2=mysqli_query($con,$update);

        if($sql2)
       { 
           /*Successful*/
           header('location:edit-bonchon.php');
       }
       else
       {
           /*sorry your profile is not update*/
           echo("update shops set username='$username',password ='$password' where id='$id ' 1111");
           echo $sql2;
           
       }
    }
    else
    {
        /*sorry your id is not match*/
        echo("update shops set username='$username',password ='$password' where id='$id' 2222");
    }
 }
?>