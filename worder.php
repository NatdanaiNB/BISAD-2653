<?php 


include 'connectstore.php';


$order  = "SELECT * FROM ordered WHERE shopname = '$shopname'";

 $sql = mysqli_query($con,$order);
$sql2 = $sql = mysqli_query($con,$order);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Store</title>
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
    <link rel="stylesheet" href="editstore.css" />
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
        <li><a href="index.php">Home</a></li>
        <li><a href="worder.php">Menu</a></li>
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
            <a href="login.html">
              <button class="btn btn-success" style="width: 150px">
                Store
              </button>
            </a>
          </li>
          <li>
            <a href="login.html"
              ><button class="btn btn-success" style="width: 150px">
                Deliver
              </button>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- editmenu -->
    <div class="edit-store">
      <p name="txtedit">
        Edit Store
        <img
          src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/OR6SzrfoMFg.png?_nc_eui2=AeGcEB0Y87xr_hL82h55V3FH_i5mCW1n3JD-LmYJbWfckOOM7V_i4T8APjMr-AEBli-IeL8HoNgghIN_oSgH9nSg"
          alt=""
        />
      </p>
      <hr />
      <div class="menuedit">


      <?php


    $number = null;
    while ($row = mysqli_fetch_array($sql)) {
    if ($row["number"] != $number) {
    $number = $row["number"];
    ?>

    <div> 
        <?=$number?>
   
    <?php 
    if ($row["status"] == "notready") {
    ?>

    <form action="wstatus.php" method="post">

    <input type="hidden" name="number" id="number" value="<?=$row["number"]?>">
    
  
    <button type="submit" class="btn btn-warning" name="status">
    </form>
        <?php 
        
    }else {
        ?>

    <button type="submit" name ='menu'>ready</button>
    
    <?php } ?>



    </div>
    
    <?php } ?>

    <div class="row">
          <div class="col-4">
            <img
              src="<?=$row["menu_pic"]?>"
              name="menupic"
              nam
            />


          </div>
          
          <div class="col-8" name="datamenu">
            <p name="nmenu"><?=$row["menu_name"]?></p>
            <p name="pmenu"><?=$row["price"]?></p>

          </div>
        </div>
    
    <?php } ?>




      <?php 
      while ($row = mysqli_fetch_array($sql)){
      ?> 

     
        <div class="row">
          <div class="col-4">
            <img
              src="<?=$row["menu_pic"]?>"
              name="menupic"
              nam
            />
          </div>
          
          <div class="col-8" name="datamenu">
            <p name="nmenu"><?=$row["menu_name"]?></p>
            <p name="pmenu"><?=$row["price"]?></p>
            <form action="editdatastore.php" method="post">

            <input type="hidden" name="id" id="id" value="<?=$row["id"]?>">
            <input type="hidden" name="name" id="name" value="<?=$row["name"]?>">
            <input type="hidden" name="picture" id="picture" value="<?=$row["picture"]?>">
              
          <button type="submit" class="btn btn-warning" name="menu">
                Edit
                <img
                  src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/OR6SzrfoMFg.png?_nc_eui2=AeGcEB0Y87xr_hL82h55V3FH_i5mCW1n3JD-LmYJbWfckOOM7V_i4T8APjMr-AEBli-IeL8HoNgghIN_oSgH9nSg"
                  alt=""
                />
              </button>
            </form>
          </div>
        </div>

        <?php } ?>

        <div class="row">
          <div class="col-4">
            <img
              src="https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210217065312076050/photo/e22632f10af14e599fead7043ce4746b_1618125707175440378.png"
              name="menupic"
              nam
            />
          </div>
          <div class="col-8" name="datamenu">
            <p name="nmenu">เกี๊ยวซ่าไก่ เล็ก (6 ชิ้น) และต๊อกทอดคลุกซอส</p>
            <p name="pmenu">฿200.00</p>
            <button type="button" class="btn btn-warning">
              Edit
              <img
                src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/OR6SzrfoMFg.png?_nc_eui2=AeGcEB0Y87xr_hL82h55V3FH_i5mCW1n3JD-LmYJbWfckOOM7V_i4T8APjMr-AEBli-IeL8HoNgghIN_oSgH9nSg"
                alt=""
              />
            </button>
          </div>
        </div>
      </div>
    </div>

    
    <?php 
      while ($row2 = mysqli_fetch_array($sql2)){
      ?> 
    <form action="edit-bonchon.php" method="post" >
        
         
         <input type="hidden" name="name" id="name" value="<?=$row2["name"]?>">
         <input type="hidden" name="picture" id="picture" value="<?=$row2["picture"]?>">
        <button type="submit" name ='menu'>sadasd</button>
        </form>
      <?php } ?>

  </body>
  
</html>
