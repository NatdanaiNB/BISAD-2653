<?php

include 'connectdeliver.php';
mysqli_set_charset($con, "utf8");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deliver Profile</title>
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
    <link rel="stylesheet" href="profiledeliver.css" />
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
    <!-- navbar for deliver! -->
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
      <!-- <div class="nav-items">
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
      </form> -->
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
            <a href="storelogin.php">
              <button class="btn btn-success" style="width: 150px">
                Store
              </button>
            </a>
          </li>
          <li>
            <a href="deliverlogin.php"
              ><button class="btn btn-success" style="width: 150px">
                Deliver
              </button>
            </a>
          </li>
        </ul>
      </div>
    <?php } else { ?>

      <div class="profile">
        <a href="profiledeliver.php"
          ><i class="fas fa-user-circle fa-lg"></i> Profile</a
        >
      </div>
      <div class="Login" style="cursor: pointer">
        <a href="logout.php">  <button type="button"  href="logout.php" class="btn btn-success">Log out</button> </a>
        

      </div>

    <?php } ?>
    </nav>
    <div class="deliverprofile">
      <p name="protxt">Deliver Profile <i class="fas fa-user-circle"></i></p>
      <a href="vieworeder-deli.php" name="editbut"
        ><button type="button" class="btn btn-warning">View Order</button>
      </a>
      <hr />
      <div class="userdetail">
        <p name="actxt">Account Details</p>
        <table>
          <tr>
            <td name="acdetail">Username:&nbsp;</td>
            <td name="acuser"><?=$username?></td>
          </tr>
          <tr>
            <td name="acdetail">Email:&nbsp;</td>
            <td name="acuser">test@test.com</td>
          </tr>
          <tr>
            <td name="acdetail">Firstname:&nbsp;</td>
            <td name="acuser"><?=$dfirstname?></td>
          </tr>
          <tr>
            <td name="acdetail">Lastname:&nbsp;</td>
            <td name="acuser"><?=$dlastname?></td>
          </tr>
          <tr>
            <td name="acdetail">Work at:&nbsp;</td>
            <td name="acuser"><?=$shopname?></td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
