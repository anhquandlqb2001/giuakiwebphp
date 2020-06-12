<?php
  session_start();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/fontawesome-free-5.12.1-web/css/all.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <header class="py-2 container-fluid header-container px-0">
    
    <nav class="header-navbar">
      <a href="./index.php" class="header-logo-link"><h3 class="header-logo">QUANPROLAZER</h3></a>
      <ul class="header-list">
        <li class="header-item"><a href="./index.php" class="header-item-link">Home</a></li>
        <li class="header-item"><a href="./index.html" class="header-item-link">Product</a></li>
        <?php
          if (isset($_SESSION['username'])) {
            echo '<li class="header-item" id="login-btn">
                    <span class="username-sp " onclick="logout()">'.$_SESSION['username'].'</span>
                    <form action="php/logout.php" id="form-logout" class="form-logout" method="post">
                      <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                  </li>';
          } else {
            echo '<li class="header-item" id="login-btn" onclick="loginForm()">Login</li>';
          }
        ?>
      </ul>
    </nav>
    <!-- Search -->
    <div class="bg-secondary py-4 mt-2 d-flex">
        <form action="" class="form-search form-group m-auto d-flex w-50 justify-between">
          <input type="text" name="" class="form-control input" id="" placeholder="Sale off 30%">
          <button type="submit" class="btn btn-primary ml-4 px-4">
            <svg class="header__search-btn-img" height="19" viewBox="0 0 19 19" width="19">
              <g fill-rule="evenodd" stroke="none" stroke-width="1">
                  <g transform="translate(-1016 -32)">
                      <g>
                          <g transform="translate(405 21)">
                              <g transform="translate(611 11)">
                                  <path fill="#fff" d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z"></path>
                                  <path fill="#fff" d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </g>
           </svg>
          </button>

          <div class="search-container w-100">
            <ul class="m-2 pl-1">
              <li class="search-item"><a href="">Ao quan gia re</a></li>
              <li class="search-item"><a href="">Ao quan gia re</a></li>
              <li class="search-item"><a href="">Ao quan gia re</a></li>
            </ul>
          </div>
        </form>
    </div>
  </header>
  


  <!-- form -->
  <div id="clicked" class="modal">
    <div class="clickedOut" onclick="outForm()"></div>
    <!-- Login form -->
    <div class="login-container">
      <div class="form-title-con">
        <h3 class="form-title bg-transparent" id="primary">LOGIN</h3>
        <h3 class="form-title btn btn-secondary" id="secondary" onclick="openSignupForm()">SIGNUP</h3>
      </div>
      <div class="form-container">
        <form action="php/login.php" method="POST" class="form-container-sec">
          <div class="form-group">
            <!-- <p>Username</p> -->
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="form-group">
            <!-- <p>Password</p> -->
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <button type="submit" name="login-submit" class="submit-btn btn btn-primary" onclick="submitFunc()">Login</button>
        </form>
      </div>
    </div>

    <!-- Sign up form -->
    <div class="signup-container">
      <div class="form-title-con">
        <h3 class="form-title bg-transparent" id="primary">SIGNUP</h3>
        <h3 class="form-title btn btn-secondary" id="secondary" onclick="loginForm()">LOGIN</h3>
      </div>
      <div class="form-container">
        <form action="php/signup.php" method="POST" class="form-container-sec">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="example@email.com">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password">
          </div>
          <button type="submit" name="signup-submit" class="submit-btn btn btn-primary">Sign up</button>
        </form>
      </div>
    </div>
  </div>


    
