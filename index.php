<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>f1</title>
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
    <link rel="stylesheet" href="carosel-home.css" />
    <link rel="stylesheet" href="firstpage.css" />
    <link rel="stylesheet" href="navbar.css" />
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
      session_start();
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
    <div class="container">
      <!-- carousel -->
      <div class="silder" style="width: 1140px; margin-top: 150px">
        <div
          id="carouselExampleIndicators"
          class="carousel slide carousel-fade"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
              style="cursor: pointer"
            ></li>
            &nbsp;
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="1"
              style="cursor: pointer"
            ></li>
            &nbsp;
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="2"
              style="cursor: pointer"
            ></li>
          </ol>
          <div class="carousel-inner" style="width: 1140px">
            <div class="carousel-item active">
              <a href="#"></a
              ><img
                src="https://cdn.1112delivery.com/1112one/public/images/banners/April2021/TPC_Bogo_extended_1440_TH.jpg"
                style="width: 100%"
                class="d-block"
                alt=""
              />
            </div>
            <div class="carousel-item">
              <a href="#">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/banners/April2021/BK_BigKing_1440.jpg"
                  style="width: 100%"
                  class="d-block"
                  alt="..."
              /></a>
            </div>
            <div class="carousel-item">
              <a href="#">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/banners/April2021/BC_Beef_BGG_1440.jpg"
                  style="width: 100%"
                  class="d-block"
                  alt="..."
              /></a>
            </div>
          </div>
          <!--Controls-->
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <button class="b-left">
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
            </button>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <button class="b-right">
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
            </button>
            <span class="sr-only">Next</span>
          </a>
          <!--/Controls-->
        </div>
      </div>
      <!-- secres -->
      <div class="choose" style="margin-top: 40px">
        <p class="sec">SELECT RESTAURANT</p>
        <div class="row" style="margin-bottom: 60px; margin-left: 20px">
          <div class="col-3">
            <a href="shop-bonchon.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/BC_3.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">Bonchon (บอนชอน)</p>
                <p name="desres">Fast Food, Fried Chicken</p>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="shop-swensen.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/SW.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">Swensen's (สเวนเซ่นส์)</p>
                <p name="desres">Desserts, Ice Cream</p>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="shop-burgerking.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/BK_New_Store_Logo.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">Burger King (เบอร์เกอร์ คิง)</p>
                <p name="desres">Fast Food, Burgers, Fried Chicken</p>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="shop-s&p.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/SnP_3.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">S&P (เอส แอนด์ พี)</p>
                <p name="desres">Single Dish, Family Set</p>
              </div>
            </a>
          </div>
        </div>
        <div class="row" style="margin-bottom: 60px; margin-left: 20px">
          <div class="col-3">
            <a href="shop-dairyqueen.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/DQ.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">Dairy Queen (แดรี่ควีน)</p>
                <p name="desres">Desserts, Ice Cream</p>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="shop-sizzler.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/SZ.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">Sizzler (ซิซซ์เล่อร์)</p>
                <p name="desres">Salad, Steak</p>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="shop-thecoffeeclub.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/TCC.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">The Coffee Club <br />(เดอะคอฟฟี่คลับ)</p>
                <p name="desres">Drinks, Coffee, Breakfast</p>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="shop-pizzacompany.php" name="secres">
              <div class="card" name="picres">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/TPC_BOGO_extened_1080x720.jpg"
                  class="card-img-top"
                />
              </div>
              <div>
                <p name="nameres">The Pizza Company (เดอะ พิซซ่า คอมปะนี)</p>
                <p name="desres">Fast Food, Pizza</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      const menuBtn = document.querySelector(".menu-icon span");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const items = document.querySelector(".nav-items");
      const form = document.querySelector("form");
      menuBtn.onclick = () => {
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      };
      cancelBtn.onclick = () => {
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00"; /* AAA */
      };
      searchBtn.onclick = () => {
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      };
      // carousel
      $(document).ready(function () {
        $("#owl-demo").owlCarousel({
          items: 4,
          lazyLoad: true,
          nav: true,
        });
        $(".next").click(function () {
          owl.trigger("owl.next");
        });
        $(".prev").click(function () {
          owl.trigger("owl.prev");
        });
      });
    </script>
  </body>
</html>
