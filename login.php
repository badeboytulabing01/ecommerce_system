<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<?php require_once("routes/routes.php");?>
<!DOCTYPE html>
  <html lang="en">
<?php $templateLoader->headfile();?>
<body>
<?php $templateLoader->navigation();?>
<?php
  $users = new loginUserAccount($conn);
  if(isset($_POST["btnLog"])){
    $result = $users->loginUser(
        $_POST["emailLog"],
        $_POST["passLog"]);

        if($result){
            showAlertLoginError($result);
        }
  }


?>
<div class="container mt-5" id="form-login">
    <br>
  <div class="row mt-5">
      <div class="col-3"></div>
      <div class="col-4">
        <form class="row needs-validation animated slow slideInRight" novalidate="" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
        <h2>Login</h2>
                <br><br>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p class="input"> <input type="email" name="emailLog" placeholder="Email" class="form-control" required></p>
                </div>
                <div class="col-md-12 mt-3 ">
					<p class="input d-flex">
                <input type="password" class="form-control togglePassword" name="passLog" 
                        required="" placeholder="Password">
						  <span class="toggleIcon mt-2">
							<i class="fa fa-eye-slash d-none hide_eyes text-secondary"></i>
							<i class="fa fa-eye show_eyes text-secondary"></i>
                       </span>  
                       </p>	   
                </div>
                <div class="col-12">
                    <a href="#" id="forgot">Forgot Password?</a>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <button class="btn" name="btnLog">LOG IN</button>
                </div>
                <div class="col-md-12 text-center mt-3">
                    <p>Still don't have an account? <a href="signup.php" class="fw-bold"> Register here</a></p>
                </div>
            </div>
        </form>
      </div>
  </div>
</div>

<br><br><br><br><br><br><br><br>
<?php $templateLoader->footer();?>
<?php $templateLoader->bottomfile();?>