<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<?php require_once ("../inc/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "../parts/user_controller/home_search.php"; ?>
 <?php require_once "maintenance.php"; ?>
   
<br><br><br><br>
 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->	
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>