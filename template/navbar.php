
<nav class="navbar navbar-expand-md bg-body-tertiary">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><img src="assets/image/menu.png" class="img-fluid" width="50"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown me-5">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Food
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="" target="_blank">Sample</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown me-5">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Treats
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="" target="_blank">Sample</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown me-5">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Supplies
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="" target="_blank">Sample</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pharmacy
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="" target="_blank">Sample</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>

        <p class="text-warning mt-2 fw-bold">
        Free delivery on first-time orders over $35 </p>


      </ul>
      <form action="" class="me-auto d-flex title-search">
        <a href="index.php"><label class="text-light fw-bold me-2 fs-5 mt-1"><img src="resources/images/icon/logo.png" alt="" 
        class="img-fluid" width="120"></label></a>
        <div class="d-flex search">
                <img src="resources/images/icon/search.png" alt="" class="img-fluid me-2 mt-2" >
                <input type="text" name="search" class="form-control me-2" placeholder="Search">
         </div>
      </form>


      <div class="contact-info d-md-flex">
         <?php if (!isset($user_id)){?>

        <a href="#" class="nav-link me-5 text-light">Cart <img src="resources/images/icon/shopping-cart.png" alt="" class="img-fluid" width="20"> </a> 
        <a href="login.php" class="nav-link text-light"><img src="resources/images/icon/user.png" alt="" class="img-fluid" width="20"> Login/ </a> 
        <a href="signup.php" class="nav-link text-light"> Signup</a>
        <?php }else{?>
          <a href="login.php" class="nav-link text-light"><img src="resources/images/icon/user.png" alt="" class="img-fluid" width="20"> <?=$full_name?> </a> 
   
        <?php }?>
      </div>
    </div>
  </div>
</nav>
