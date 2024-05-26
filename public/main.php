<?php require_once("routes/routes.php");?>
<!DOCTYPE html>
  <html lang="en">
<?php $templateLoader->headfile();?>
<body>
 <?php $templateLoader->navigation();?>
 <p class="text-center text-dark fw-bold">Lörem ipsum povis darovis, tetrassa vir jag monor nevis i pregen. </p>
<?php $templateLoader->banner();?>

<?php require_once("template/display_product.php");?>


<?php $templateLoader->footer();?>


<?php $templateLoader->bottomfile();?>