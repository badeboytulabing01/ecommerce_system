<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
  <style>
    .dropdown:hover a {
      color:black;
    }
    .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
    .dropdown-menu .dropdown-submenu {
      position: relative;
    }
    .dropdown-menu .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: 0;
      border-radius: 0.25rem;
      display: none;
    }
    .dropdown-menu .dropdown-submenu:hover > .dropdown-menu {
      display: block;
    }
    .dropdown-menu .dropdown-submenu > a::after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #333;
      margin-top: 5px;
      margin-right: -10px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg px-0 py-3">
    <div class="container-xl">
      <!-- Navbar toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <img src="img/icon/menu.png" class="img-fluid" width="50">
      </button>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Nav -->
        <div class="navbar-nav mx-lg-auto fw-bold">
          <a class="nav-item nav-link active" href="index.php" aria-current="page">HOME</a>
          <a class="nav-item nav-link" href="all_category.php">ALL CATEGORY</a>
          <a class="nav-item nav-link" href="help">HELP</a>
          <div class="nav-item dropdown">
            <a class="nav-link" href="#" id="petsDropdown" role="button">
              Pets <i class="fa fa-caret-down"></i>
            </a> 
            <ul class="dropdown-menu" aria-labelledby="petsDropdown">
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Dog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Wet Food</a></li>
                  <li><a class="dropdown-item" href="#">Dry Food</a></li>
                  <li><a class="dropdown-item" href="#">Treat</a></li>
                  <li><a class="dropdown-item" href="#">Vitamins</a></li>
                  <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Cat</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Wet Food</a></li>
                  <li><a class="dropdown-item" href="#">Dry Food</a></li>
                  <li><a class="dropdown-item" href="#">Treat</a></li>
                  <li><a class="dropdown-item" href="#">Vitamins</a></li>
                  <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Bird</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Wet Food</a></li>
                  <li><a class="dropdown-item" href="#">Dry Food</a></li>
                  <li><a class="dropdown-item" href="#">Treat</a></li>
                  <li><a class="dropdown-item" href="#">Vitamins</a></li>
                  <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Fish</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Wet Food</a></li>
                  <li><a class="dropdown-item" href="#">Dry Food</a></li>
                  <li><a class="dropdown-item" href="#">Treat</a></li>
                  <li><a class="dropdown-item" href="#">Vitamins</a></li>
                  <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- Right navigation -->
        <div class="navbar-nav ms-lg-4 fw-bold">
          <a class="nav-item nav-link" href="login.php">LOGIN</a>
        </div>
        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0 fw-bold">
          <a href="signup.php" class="nav-item nav-link text-light">
            SIGNUP
          </a>
        </div>
      </div>
    </div><!-- end of container -->
  </nav><!-- end of nav -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
