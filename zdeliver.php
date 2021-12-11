<?php 


include 'connectdeliver.php';


$order  = "SELECT * FROM ordered WHERE (shopname = '$shopname' AND status = 'cooked') OR (shopname = '$shopname' AND deliver_firstname = '$dfirstname' AND deliver_lastname='$dlastname') ";

 $sql = mysqli_query($con,$order);
$sql2 = $sql = mysqli_query($con,$order);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Order</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="vieworder.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="fixed-top shadow">
      <div class="menu-icon">
        <span class="fas fa-bars"></span>
      </div>
      <div class="logo">
        <p>
          KIN KHAO
          <i
            class="fa fa-cutlery"
            aria-hidden="true"
            style="margin-left: -5px"
          ></i>
        </p>
      </div>
      <div class="nav-items">
        <li><a href="#">Home</a></li>
        <li><a href="#secres">Menu</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
      </div>
      <div class="search-icon">
        <span class="fas fa-search"></span>
      </div>
      <div class="cancel-icon">
        <span class="fas fa-times"></span>
      </div>
      <form action="search.html">
        <input
          type="search"
          class="search-data"
          placeholder="Search"
          required
        />
        <button type="submit" class="fas fa-search"></button>
      </form>
      <div class="profile">
        <a href="profile.html"
          ><i class="fas fa-user-circle fa-lg"></i> Profile</a
        >
      </div>
      <div class="Login" style="cursor: pointer">
        <button type="button" class="btn btn-success">Login</button>
        <ul class="shadow">
          <li>
            <a href="login.html"
              ><button class="btn btn-success" style="width: 150px">
                Customer
              </button></a
            >
          </li>
          <li>
            <a href="storelogin.html">
              <button class="btn btn-success" style="width: 150px">
                Store
              </button>
            </a>
          </li>
          <li>
            <a href="deliverlogin.html"
              ><button class="btn btn-success" style="width: 150px">
                Deliver
              </button>
            </a>
          </li>
        </ul>
      </div>
    </nav>









    <div class="vieworder">
      <p name="ordertxt">Your Order</p>
      <hr />
      <div class="orderdetail">
        <!-- loop order here -->
        <?php


        $number = null;
        $number2 = null;
        while ($row = mysqli_fetch_array($sql)) {

          ?>




               <div class="row">
          <!-- form s -->
          <form action="wstatus.php" method="post" class="col-12">
            <!-- orderid s -->




          <?php
        if ($row["number"] != $number) {
        $number = $row["number"];
        ?>



 
            
   
            <p name="orderidtxt"><?=$row['number']?></p>
            <!-- orderid e -->
            <!-- btn s -->
            

               <?php 
                 if ($row["status"] == "notready") {
              ?>
              <input type="text" name="firstname" id="firstname" value="<?=$dfirstname?>">
              <input type="text" name="lastname" id="lastname" value="<?=$dlastname?>">
              <input type="hidden" name="number" id="number" value="<?=$row["number"]?>">
              <input type="text" name="status" id="status" value="<?=$row["status"]?>">
            <button type="submit" class="btn btn-success btn-sm" name ="order">
              Confirm
            </button>


            <?php
                 } else { ?>

            <input type="text" name="firstname" id="firstname" value="<?=$dfirstname?>">
              <input type="text" name="lastname" id="lastname" value="<?=$dlastname?>">

            <input type="hidden" name="number" id="number" value="<?=$row["number"]?>">
            <input type="text" name="status" id="status" value="<?=$row["status"]?>">
              <button type="submit" class="btn btn-success btn-sm" name ="order">
                Confirm2
              </button>




            <?php
                 }
                }
              ?>
  
  <?php
        if ($row["number"] != $number2) {
          $number2 = $row["number"];
        ?>
        
          <p name="totalp">Total: 2000฿</p> 

        <?php } ?>
            <!-- btn e -->
            <!-- data menu s -->
            <div class="row" name="orderdata">
              <div class="col-3">
                <img
                  src="<?=$row["menu_pic"]?>"
                  name="menupic"
                />
              </div>

              <div class="col-9" name="datamenu">
                <p name="nmenu"><?=$row['menu_name']?></p>
                <p name="pmenu"><?=$row['price']?></p>
              </div>
            </div>

            <!-- data menu e -->
            <!-- total s -->
            
            <!-- total e -->
          </form>
          <!-- form e -->
          


        </div>
          





       <?php
       }
        ?>


        <!-- end loop -->
      </div>
    </div>


  </body>
</html>
