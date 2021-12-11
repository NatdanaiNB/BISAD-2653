<?php

include 'connectstore.php';

if(isset($_POST['menu']))
{
	$name =$_POST['name'];
  $picture = $_POST['picture'];
  $menu_id = $_POST['id'];
  $price = $_POST['price'];
} else 
{
	echo "aaa";
}


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Edit Data Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="editdatastore.css" />
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
        <li><a href="edit-bonchon.php">Product</a></li>
        <li><a href="vieworder.php">View Order</a></li>
        <!-- <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li> -->
      </div>
      <!-- <div class="search-icon">
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
      </div> -->
      <?php 
      
      if (!isset($_SESSION['loggedin'])) { ?>


      <div class="Login" style="cursor: pointer">
        <button type="button" class="btn btn-success">Login</button>
        <ul class="shadow">
          <li>
            <a href="login.php"
              ><button class="btn btn-success" style="width: 150px">
                Customer
              </button></a
            >
          </li>
          <li>
            <a href="login.php">
              <button class="btn btn-success" style="width: 150px">
                Store
              </button>
            </a>
          </li>
          <li>
            <a href="login.php"
              ><button class="btn btn-success" style="width: 150px">
                Deliver
              </button>
            </a>
          </li>
        </ul>
      </div>
      <?php
      }else {

      ?>

      <div class="Login" style="cursor: pointer">
        <a href="logout.php">  <button type="button"  href="logout.php" class="btn btn-success">Log out</button> </a>
        

      </div>

      <?php 
      }
      ?>


    </nav>
    <!-- edit profile -->
    <div class="edit-profile">
      <p name="edtxt">
        Edit Data
        <img
          src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/OR6SzrfoMFg.png?_nc_eui2=AeGcEB0Y87xr_hL82h55V3FH_i5mCW1n3JD-LmYJbWfckOOM7V_i4T8APjMr-AEBli-IeL8HoNgghIN_oSgH9nSg"
          alt=""
        />
      </p>
      <hr />
      <div class="editform">
        <form action="menu_update.php" class="form-group row" method="post">
          <div class="row">
            <div class="col-3">
              <img
                src="<?=$picture?>"
                name="menupic"
              />
            </div>
            <div class="col-9">
              <div class="row">
                <label for="" class="col-2 col-form-label"
                  ><p name="lablename">Name:</p></label
                >
                <input type="hidden" class="form-control" name="id" id="id" value='<?=$menu_id?>' />
                <div class="col-10">
                  <input type="text" class="form-control" name="name" id="name" value='<?=$name?>' />
                </div>
                <label for="" class="col-2 col-form-label"
                  ><p name="lablename">Price:</p></label
                >
                <div class="col-10">
                  <input type="text" class="form-control"  name="price" id="price" value='<?=$price?>'/>
                </div>
           
                <button type="submit" class="btn btn-success" name="menu">Success</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
