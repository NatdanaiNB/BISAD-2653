<?php



include 'connect.php';
mysqli_set_charset($con, "utf8");
// Check connection
 


$stmt = $con->prepare('SELECT username,password,email,firstname,lastname,location FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username,$password,$email,$firstname,$lastname,$location);
$stmt->fetch();
$stmt->close();

$sql = "SELECT * FROM menu WHERE menu_shop ='swensen'";
 
$result = $con->query($sql);

$sql2 = "SELECT * FROM cart WHERE c_username ='$username'";
 
$cart = $con->query($sql2);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bonchon</title>
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
    <link rel="stylesheet" href="bonchon1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
    <div class="full">
      <img
        src="https://cdn.1112delivery.com/1112one/public/images/banners/April2021/SW_BOGO_QUART_1440_TH.jpg "
        name="banner"
      />
      <!-- recom -->
      <div class="recmenu">
        <p name="rectxt">เมนูแนะนำ - Recommended</p>
        <div class="row">
          <?php  
          $count = 0;

          while ($count < 3 && $row = $result->fetch_assoc()) { ?>
                 
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
                    <input value="<?=$row['menu_shop']?>" name ="menu_shop" type="hidden"></input>
                    <?=$row['menu_name']?>
                      </input><br><br>
                      <input value=" <?=$row['menu_price']?>"  type="hidden" id="m_price" name="m_price">
                      <input value=" <?=$row['menu_id']?>"  type="hidden" id="m_id" name="m_id">฿
                      <?=$row['menu_price']?> 
                    
                    </input>
                    <input value="<?=$row['menu_pic']?>" name ="m_pic" type="hidden"></input>
                    <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                  </button>
                    </div>
                  </div>
                </div>
                </form>
             </div>
            <?php
            $count++;
            }
             
            ?>
        </div>
      </div>
      <!-- all menu -->
      <div class="bonmenu">
        <p name="rectxt">เมนู - Menu</p>
        <div class="row">
        <?php 
   
    while($row = $result->fetch_assoc()) { ?>
      
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
                    <input value="<?=$row['menu_shop']?>" name ="menu_shop" type="hidden"></input>
                    <input value="<?=$row['menu_pic']?>" name ="m_pic" type="hidden"></input>
                    <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                  </button>
                    </div>
                  </div>
                </div>
                </form>
             </div>
     
     <?php }
 
    
 ?>
        </div>
      </div>
    </div>
    
  </body>
</html>