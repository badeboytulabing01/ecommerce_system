<?php
require_once("mainClass.php");
$ecomerce->login();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>

<body>
<!-- navigation -->
<?php require_once "parts/home_controller/home_nav.php"; ?>
<!-- search bar -->
<?php require_once "parts/home_controller/home_search.php"; ?>

<!-- Main Content -->
<div class="container-fluid" id="login_page">
  <div class="row main-content bg-success text-center">
    <div class="col-md-4 text-center company__info">
      <span class="company__logo"><h2><img src="img/logo.png" class="img-fluid"></h2></span>
      <h4 class="company_title"></h4>
    </div>
    <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
      <div class="container-fluid">
        <div class="row">
          <h2>Welcome to Pawfect shop! Please login</h2>
        </div>
        <div class="row">
          <form name="frmLog" method="post" id="loginForm" action="<?php htmlspecialchars("PHP_SELF"); ?>" class="form-group" onsubmit="return validateForm()">
            <div class="row">
              <input type="text" name="userLog" id="userLog" class="form__input" placeholder="Username">
              <span id="userLogError" class="error">Please fill out the username field.</span>
            </div>
            <div class="row">
              <input type="password" name="password" id="password" class="form__input" placeholder="Password">
              <span id="passwordError" class="error">Please fill out the password field.</span>
            </div>
            <div class="row">
              <input type="submit" value="Submit" class="btn" name="submit" id="submit">
            </div>
          </form>
        </div>
        <div class="row">
          <p>Don't have an account? <a href="signup.php">Register Here</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once "parts/footer.php"; ?>
<!-- end of footer -->

<?php require_once "parts/js.php"; ?>
<!-- end of js -->

<script>
function validateForm() {
    const userLog = document.getElementById('userLog');
    const password = document.getElementById('password');
    const userLogError = document.getElementById('userLogError');
    const passwordError = document.getElementById('passwordError');

    let isValid = true;

    if (userLog.value.trim() === "") {
        userLog.classList.add('invalid');
        userLogError.style.display = "block";
        isValid = false;
    } else {
        userLog.classList.remove('invalid');
        userLogError.style.display = "none";
    }

    if (password.value.trim() === "") {
        password.classList.add('invalid');
        passwordError.style.display = "block";
        isValid = false;
    } else {
        password.classList.remove('invalid');
        passwordError.style.display = "none";
    }

    return isValid;
}
</script>

<style>
.error {
    color: red;
    display: none;
    margin-top: 5px;
    font-size: 0.9em;
}

.invalid {
    border-color: red;
    outline: none;
}
</style>

</body>
</html>
