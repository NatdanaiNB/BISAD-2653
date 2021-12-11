<?php

include 'connectstore.php';



 if(isset($_POST['order']))
 {
    $number=$_POST['number'];
    echo $_POST['number'];
    echo $_POST['status'];
    $dfirstname = $_POST['firstname'];
    $dlastname = $_POST['lastname'];

    
    $select= "select * from ordered where number='$number'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['number'];

    if($res == $number)
    {
        
       if ($_POST["status"] == "notready"){ 
       $update = "update ordered  set status='cooking'  where number='$number' ";
      
       $sql2=mysqli_query($con,$update);

       if($sql2)
       { 
           /*Successful*/
           $message = 'confirm order complete';

           echo "<SCRIPT> //not showing me this
               alert('$message')
               window.location.replace('vieworder.php');
           </SCRIPT>";
       
           
       }





    } 

    elseif  ($_POST["status"] == "cooking"){

        $update = "update ordered  set status='cooked'  where number='$number' ";
      
        $sql2=mysqli_query($con,$update);

        if($sql2)
        { 
            /*Successful*/
            $message = 'Cooking fininsh';
 
            echo "<SCRIPT> //not showing me this
                alert('$message')
                window.location.replace('vieworder.php');
            </SCRIPT>";
        
            
        }

    }

    elseif  ($_POST["status"] == "cooked"){

        $update = "update ordered  set status='delivering'  where number='$number' ";
        $insertfirst = "update ordered set deliver_firstname = '$dfirstname' where number='$number' ";
        $insertlast = "update ordered set deliver_lastname = '$dlastname' where number='$number' ";
        $sql2=mysqli_query($con,$update);
        $sql2=mysqli_query($con,$insertfirst);
        $sql2=mysqli_query($con,$insertlast);
        if($sql2)
        { 
            /*Successful*/
            $message = 'Confirm Order';
 
            echo "<SCRIPT> //not showing me this
                alert('$message')
                window.location.replace('vieworeder-deli.php');
            </SCRIPT>";
        
            
        }
        
    }

    elseif  ($_POST["status"] == "delivering"){

        $update = "update ordered  set status='delivered'  where number='$number' ";
      
        $sql2=mysqli_query($con,$update);
        if($sql2)
        { 
            /*Successful*/
            $message = 'Delivering Compelte';
 
            echo "<SCRIPT> //not showing me this
                alert('$message')
                window.location.replace('vieworeder-deli.php');
            </SCRIPT>";
        
            
        }
    }


  
       else
       {
           /*sorry your profile is not update*/
           echo $insertlast;
           
           
       }
    }
    else
    {
        /*sorry your id is not match*/
        echo("update shops set username='$username',password ='$password' where id='$id' 2222");
    }
}
?>
header('location:worder.php');