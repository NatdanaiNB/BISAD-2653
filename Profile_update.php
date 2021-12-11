<?php

include 'connect.php';



 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];
    $location =$_POST['address'];
    

 
    $select= "select * from accounts where id='$id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    $idd = is_string($id);
    $ress = is_string($res);
    $imtt = intval($id);
    if($res == $id)
    {
   
       $update = "update accounts  set email ='$email',firstname ='$firstname',lastname='$lastname',location= '$location' where id='$id'";
       $sql2=mysqli_query($con,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:profile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           echo("update shops set username='$username',password ='$password' where id='$id'");
           
       }
    }
    else
    {
        /*sorry your id is not match*/
        echo("update shops set username='$username',password ='$password' where id='$id'");
    }
 }
?>