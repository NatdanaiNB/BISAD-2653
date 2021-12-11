<?php 
include 'connect.php'; 

mysqli_set_charset($con, "utf8");
$keyword = $_POST['search_menu'];   
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM menu WHERE menu_name LIKE '%$keyword%' ORDER BY menu_name ASC";

$result = $con->query($sql);

$sql2 = "SELECT * FROM cart ";
 
$cart = $con->query($sql2);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Search</title>
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
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="search.css" />
    <link rel="stylesheet" href="bonchon1.css" />
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
        <li><a href="cus-vieworder.php">Order</a></li>
      </div>
      <div class="search-icon">
        <span class="fas fa-search"></span>
      </div>
      <div class="cancel-icon">
        <span class="fas fa-times"></span>
      </div>
      <form action="search.php" method="POST">
        <input
          type="search"
          class="search-data"
          placeholder="Search"
          value=""
          required
         name="search_menu"/>
        <button type="submit" class="fas fa-search"></button>
      </form>
      
      <!-- if else login -->
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
        <a href="profile.php"
          ><i class="fas fa-user-circle fa-lg"></i> Profile</a
        >
      </div>
      <div class="Login" style="cursor: pointer">
        <a href="logout.php">  <button type="button"  href="logout.php" class="btn btn-success">Log out</button> </a>
        

      </div>

    <?php } ?>
    
    <!-- if else login -->

    </nav>
    <!-- case search เจอ -->
    <div class="search-find">
      <p name="schtxt">ผลลัพธ์การค้นหา - Search Results <?php $cnt_search = mysqli_num_rows($result);
echo $cnt_search;?> รายการ</p>
      <div class="row">
      <?php  

   if($cnt_search != 0){
    while ($row = $result->fetch_assoc()) { ?>
                 
      <div class="col-4">
              <form method="post" action="insert.php">
              
                <div class="menu">
                  <div class="row">
                    <div class="col-5">
                      <img class="m_pic"
                        src="
                        <?=$row['menu_pic']?>"
                        alt=""
                        width="100%"
                      />
                    </div> 
                    <div class="col-7 "><input value=" <?=$row['menu_name']?>" type="hidden" id="m_name" name="m_name">
                    <?=$row['menu_name']?>
                      </input><br><br>
                      <input value=" <?=$row['menu_price']?>"  type="hidden" id="m_price" name="m_price">
                      <input value=" <?=$row['menu_id']?>"  type="hidden" id="m_id" name="m_id">฿
                      <?=$row['menu_price']?> 
                    
                    </input>
                    <input value="<?=$row['menu_pic']?>" name ="m_pic" type="hidden"></input>
                    <!-- <button  type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                  </button> -->
                    </div>
                  </div>
                </div>
                </form>
             </div>
            <?php
           
            } ?>
<?php
   }else{ ?>
<div class="search-cant-find">
      <img src="search-256.png" alt="" />
      <p name="scant-h">We Couldn't Find What You're Looking For</p>
      <p name="scant-txt">Let's try a different dish</p>
    </div>
   <?php 
   }
             
            ?>
      </div>
    </div>
    <!-- case search ไม่เจอ -->
  </body>
</html>
