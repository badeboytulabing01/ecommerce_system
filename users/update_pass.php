<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
  <div class="container text-center mt-3" id="change_name">
   <h2>Change your Password</h2>
   <form method="POST" action="update/process_updatepass.php">
     <div class="row">
     <div class="col-md-3"></div>
      <div class="col-md-6">
           <input type="hidden" name="user_id" value="<?= $userdeatails['user_id'];?>">
         <div class="form-floating">
             <input type="password" name="new_pass" class="form-control"  required>
               <label for="floatingInput">Change Password</label>
          </div><!-- end of form-floating -->
      </div><!-- end of col-md-6 -->
       <div class="col-md-12 mt-2">
         <button type="submit" class="btn btn-outline-danger">Update</button>
       </div>
     </div><!-- end of row -->
   </form>
   <br>
  </div><!-- end of container -->

 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->	
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>