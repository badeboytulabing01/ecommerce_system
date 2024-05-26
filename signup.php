<?php require_once("routes/routes.php");?>
<!DOCTYPE html>
  <html lang="en">
<?php $templateLoader->headfile();?>
<body>
<?php $templateLoader->navigation();?>
<?php 
if(isset($_POST["btnSign"])){
    $register = new userRegistration($conn);   
    $register->userRegister(
    $_POST["fname"],
    $_POST["lname"],
    $_POST["username"],
    $_POST["contact"],
    $_POST["email"],
    $_POST["address"],
    $_POST["password"]
);
    
}
?>

<div class="container mt-5">
    <br>
  <div class="row mt-5">
      <div class="col-3"></div>
      <div class="col-6">
        <form class="row needs-validation border border-dark animated slow slideInLeft" novalidate="" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
        <h2>Signup</h2>
                <br><br>
            <div class="row">
                 <div class="col-md-6">
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                 </div>
                 <div class="col-md-6">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                 </div>
                 <div class="col-md-6 mt-4">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                 </div>
                 <div class="col-md-6 mt-4">
                    <input type="number" name="contact" class="form-control" placeholder="Contact Number" required>
                 </div>
                 <div class="col-md-12 mt-4">
                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                 </div>
                 <div class="col-md-12 mt-4">
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                 </div>

                 <div class="col-md-6 mt-4">
                    <input type="text" name="password" class="form-control" placeholder="Password" required>
                 </div>

                 <div class="col-md-6 mt-4">
                    <input type="text" name="cpass" class="form-control" placeholder="Confirm Password" required>
                 </div>
                 <div class="col-md-12 text-center mt-4">
                    <button class="btn btn-primary" name="btnSign">Signup</button>
                </div>

                <div class="col-md-12 text-center mt-3">
                    <p>Already have an account? <a href="login.php" class="fw-bold"> Log in here</a></p>
                </div>
                
            </div>
            <br>
        </form>
      </div>
  </div>
</div>

<br><br><br><br><br><br><br><br>
<?php $templateLoader->footer();?>
<?php $templateLoader->bottomfile();?>