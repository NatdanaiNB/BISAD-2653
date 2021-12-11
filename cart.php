<?php
include 'connect.php';

if (!isset($_SESSION['loggedin'])) {

  $message = 'Please log in before order';

  echo "<SCRIPT> //not showing me this
      alert('$message')
      window.location.replace('login.php');
  </SCRIPT>";

}

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 
$sql = "SELECT * FROM cart  WHERE c_username='$username'";
$result = $con->query($sql);
// ต่อmysql ของ calculate
$sql2 ="SELECT menu_price,menu_price FROM cart WHERE c_username='$username' ";
$result2 = $con->query($sql);

// เว้นไว้
$cart = $con->query($sql);





$count=0;
$qty = "";
$cal=0; 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Cart</title>
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
    >
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="cart.css" />
  
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
      <h5 class="px-5 cart" name="cart-count">
                        <a name="shop-cart"href="cart.php" ><i class="fas fa-shopping-cart"></i> Cart</a>
                        <?php
          if (isset($_SESSION['loggedin'])) {
          $cnt = mysqli_num_rows($cart);
          echo $cnt;
          }

                        ?>
                    </h5>
      
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
    <div class="cartlist">
      <p name="txtcart">
        My Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      </p>
      <div class="row">
        <div class="col-8">
          <div class="menuedit">
          <?php 
   
   while($row = $result->fetch_assoc()) { ?>
            <form method="POST" action="delete.php">
            <div class="row">
              <div class="col-4">
              <img class="m_pic"
                       src="
                       <?=$row['menu_pic']?>"
                       alt=""
                       width="59%"
                     />
              </div>
              <div class="col-8" name="datamenu">
                <p name="nmenu"><?=$row['menu_name']?></p>
                <p name="pmenu">฿<?=$row['menu_price']?></p>
                <input class="cart_or" value="<?=$row['cart_or']?>" type="hidden" id="c_or" name="c_or">

              

                <?php $c_username = $row['c_username'];
                      $c_firstname = $row['c_firstname'];
                      $c_lastname = $row['c_lastname'];
                      $c_address = $row['c_address'];
                ?>


                <input class="menu_name" value="<?=$row['menu_name']?>" type="hidden" id="m_name" name="m_name">
                <input class="menu_name" value="<?=$row['shopname']?>" type="hidden" id="shop_name" name="shop_name">
                <input class="menu_price"value=" <?=$row['menu_price']?>"  type="hidden" id="m_price" name="m_price">
                <input value=" <?=$row['menu_id']?>"  type="hidden" id="m_id" name="m_id">
                <?php $shopname = $row['shopname']?>
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Delete
                  </button>
                
              </div>
            </div>
            </form>
            <?php 
          $count += (int)$row["menu_price"] ;

          

          } ?>
          </div>
        </div>
        <div class="col-4">
          <form action="order-cart.php" method="POST">
          <div class="sum-price">
          <h5>รายการอาหารราคา</h5>
          <p><?php 
          echo $count;
          $rate = 40 ;
          if($count > 300){
            $rate += 20;
            if($count > 600){
              $rate += 10;
              if($count > 700){$rate += 10;if($count > 800){$rate += 10;if($count > 900){$rate += 10;}}}}  
          }
          ?> บาท </p>
          <h5>ค่าจัดส่ง</h5>
           <p>
           <?php 
          
          echo  $rate;
          
          ?> บาท
           </p>
           <h5>ราคาทั้งหมด</h5>
           <p>
             <?php 
             $sum = $count +$rate;
             echo $sum
             ?> บาท
           </p>
         <button type="submit" class="btn btn-success">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    สั่งซื้อ
                  </button>
      </div>
      <input value="<?=$cnt?>" id="cnt" name ="cnt" type="hidden">
                <input class="menu_name" value="<?=$c_username?>" type="hidden" id="c_username" name="c_username">
                <input class="menu_name" value="<?=$c_firstname?>" type="hidden" id="c_firstname" name="c_firstname">
                <input class="menu_name" value="<?=$c_lastname?>" type="hidden" id="c_lastname" name="c_lastname">
                <input class="menu_name" value="<?=$c_address?>" type="hidden" id="c_address" name="c_address">
      <input class="menu_name" value="<?=$shopname?>" type="hidden" id="shop_name" name="shop_name">
      <input value="<?=$sum?>" id="sum" name ="sum" type="hidden">
      <input value="<?=$count?>" id="counttotal" name ="counttotal" type="hidden">
                      <input value="<?=$rate?>" id="rate" name ="rate" type="hidden">
          </form>
      </div>
    </div>
    <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      alert("sss")
      window.location="test2.php";
    });
  });
  </script>
  </body>
</html>

