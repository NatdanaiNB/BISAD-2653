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
    <link rel="stylesheet" href="navbar.css" />
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
    <style></style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="fixed-top">
      <div class="menu-icon">
        <span class="fas fa-bars"></span>
      </div>
      <div class="logo">KIN KHAO</div>
      <div class="nav-items">
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
      </div>
      <div class="search-icon">
        <span class="fas fa-search"></span>
      </div>
      <div class="cancel-icon">
        <span class="fas fa-times"></span>
      </div>
      <form action="#">
        <input
          type="search"
          class="search-data"
          placeholder="Search"
          required
        />

        <?php
          // We need to use sessions, so you should always start sessions using the below code.
            session_start();
          // If the user is not logged in redirect to the login page...
          if (!isset($_SESSION['loggedin'])) {
            echo '<button type="submit" class="fas fa-search"></button>
            </form>
            <div class="carticon"></div>
            <div class="Login" style="margin-left: 210px; cursor: pointer">
              <button type="button" class="btn btn-success">Login</button>
              <ul>
                <li>
                  <button class="btn btn-success" style="width: 150px">
                    <a href="login.html">Customer </a>
                  </button>
                </li>
                <li>
                  <button class="btn btn-success" style="width: 150px">
                    <a href="login.html">Store </a>
                  </button>
                </li>
                <li>
                  <button class="btn btn-success" style="width: 150px">
                    <a href="login.html">Deliver </a>
                  </button>
                  </li>
                  </ul>
                </div>';
            } else {
              echo '  <button class="btn btn-success" style="width: 150px" href="logout.php">
              <a href="logout.php">log out </a>
            </button>';
}

?>
        

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
      <div class="choose" style="margin-top: 40px">
        <p class="sec">SELECT RESTAURANT</p>
        <div class="row" style="margin-bottom: 60px; margin-left: 20px">
          <div class="col-4">
            <a href=""
              ><div class="card" style="border-radius: 15px; width: 20rem">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/BC_3.jpg"
                  alt=""
                  class="card-img-top"
                  style="border-radius: 15px"
                  width=""
                /></div
            ></a>
          </div>
          <div class="col-4">
            <div class="card" style="border-radius: 15px; width: 20rem">
              <img
                src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/SW.jpg"
                alt=""
                class="card-img-top"
                style="border-radius: 15px"
              />
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="border-radius: 15px; width: 20rem">
              <img
                src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/BK_New_Store_Logo.jpg"
                alt=""
                class="card-img-top"
                style="border-radius: 15px"
              />
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom: 60px; margin-left: 20px">
          <div class="col-4">
            <a href=""
              ><div class="card" style="border-radius: 15px; width: 20rem">
                <img
                  src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/DQ.jpg"
                  alt=""
                  class="card-img-top"
                  style="border-radius: 15px"
                  width=""
                /></div
            ></a>
          </div>
          <div class="col-4">
            <div class="card" style="border-radius: 15px; width: 20rem">
              <img
                src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/MAR2019-2/SZ.jpg"
                alt=""
                class="card-img-top"
                style="border-radius: 15px"
              />
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="border-radius: 15px; width: 20rem">
              <img
                src="https://cdn.1112delivery.com/1112one/public/images/brand_logo/TPC_BOGO_extened_1080x720.jpg"
                alt=""
                class="card-img-top"
                style="border-radius: 15px"
              />
            </div>
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
        cancelBtn.style.color = "#ff3d00";
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
