<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Deliver Login</title>
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
        <div class="title login">Deliver Login</div>
        <div class="title signup">Register</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form action="authenticatedeliver.php" method="post" class="login">
            <div class="field">
            <input type="text" placeholder="username"  name="username"  id="username" required />
            </div>
            <div class="field">
            <input type="password" placeholder="Password"  name="password"  id="password" required />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" />
            </div>
          </form>
          <form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Username" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Email" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Firstname" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Lastname" required />
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
