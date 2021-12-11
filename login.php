<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="login.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Regis Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="authenticate.php" method="post" class="login">
            <div class="field">
              <input type="text" placeholder="Username" name="username" id="username" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password"  id="password" required />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" />
            </div>

            
            <div class="signup-link">
              Not a member? <a href="">Signup now</a>
            </div>
          </form>
          <form action="register.php" method="post" autocomplete="off" class="signup">
            <div class="field">
              <input type="text" placeholder="Username" name="username" id="username" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Email" name="email" id="email" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" id="password" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Firstname" name="firstname" id="firstname" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Lastname" name="lastname" id="lastname" required />
            </div>

            <div class="field">
              <input type="text" placeholder="Address" name="address" id="address" required />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = () => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      };
      loginBtn.onclick = () => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      };
      signupLink.onclick = () => {
        signupBtn.click();
        return false;
      };
    </script>
  </body>
</html>
