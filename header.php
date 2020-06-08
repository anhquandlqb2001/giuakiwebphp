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
</head>
<body>
  <header class="header-container grid wide">
    <a href="" class="header-logo-link"><h3 class="header-logo">QUANPROLAZER</h3></a>
    <nav class="header-navbar">
      <ul class="header-list">
        <li class="header-item"><a href="./index.html" class="header-item-link">Home</a></li>
        <li class="header-item"><a href="./index.html" class="header-item-link">Product</a></li>
        <?php
          if (isset($_SESSION['username'])) {
            echo '<li class="header-item" id="login-btn">'.$_SESSION['username'].'</li>';
            echo '<li><form action="php/logout.php" method="post">
              <button type="submit">Logout</button>
            </form></li>';
          } else {
            echo '<li class="header-item" id="login-btn" onclick="loginForm()">Login</li>';
          }
        ?>
        
      </ul>
    </nav>
  </header>

  
  <div id="clicked" class="modal">
    <div class="clickedOut" onclick="outForm()"></div>
    <!-- Login form -->
    <div class="login-container">
      <div class="form-title-con">
        <h3 class="form-title active" id="primary">LOGIN</h3>
        <h3 class="form-title" id="secondary" onclick="openSignupForm()">SIGNUP</h3>
      </div>
      <div class="form-container">
        <form action="php/login.php" method="POST" class="form-container-sec">
          <div>
            <p>Username</p>
            <input type="text" name="username" id="username">
          </div>
          <div>
            <p>Password</p>
            <input type="password" name="password" id="password">
          </div>
          <button type="submit" name="login-submit" class="submit-btn" onclick="submitFunc()">Login</button>
        </form>
      </div>
    </div>

    <!-- Sign up form -->
    <div class="signup-container">
      <div class="form-title-con">
        <h3 class="form-title active" id="primary">SIGNUP</h3>
        <h3 class="form-title" id="secondary" onclick="loginForm()">LOGIN</h3>
      </div>
      <div class="form-container">
        <form action="php/signup.php" method="POST" class="form-container-sec">
          <div>
            <p>Username</p>
            <input type="text" name="username" id="username">
          </div>
          <div>
            <p>Email</p>
            <input type="text" name="email" id="email" placeholder="example@email.com">
          </div>
          <div>
            <p>Password</p>
            <input type="password" name="password" id="password">
          </div>
          <button type="submit" name="signup-submit" class="submit-btn">Sign up</button>
        </form>
      </div>
    </div>
  </div>
    
