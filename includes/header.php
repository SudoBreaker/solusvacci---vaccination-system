<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- css stylesheet link -->
    <link rel="stylesheet" href="css/style.css">
    <title>Solus Vacci</title>
  </head>
  <body>

    <header>
        <div class="container">

          <input type="checkbox" name="" id="check">
          <div class="logo-container">
              <h3 class="logo">Solus<span>Vacci</span></h3>
          </div>

          <div class="nav-btn">
              <div class="nav-links">

              <?php
                  if(isset($_SESSION['pat_id'])) {
              ?>               
                        <ul>
                        <li class="nav-link" style="--i: .85s">
                          <a href="index.php">Profile</a>
                        </li>
                        <li class="nav-link" style="--i: 1.3s">
                          <a href="#">Contact</a>
                        </li>
                      </ul>

                      <?php
                        }else {    
                      ?>
                  
    
                      <ul>
                      <li class="nav-link" style="--i: .6s">
                        <a href="index.php">Home</a>
                      </li>
                      <li class="nav-link" style="--i: .85s">
                        <a href="#">About</a>
                      </li>
                      <li class="nav-link" style="--i: 1.1s">
                        <a href="#">Infomation</a>
                      </li>
                      <li class="nav-link" style="--i: 1.3s">
                        <a href="#">Contact</a>
                      </li>
                    </ul>

                    <?php
                        ;}
                    ?>


              </div>

              <div class="log-sign" style="--i: 1.8s">

              <?php
                  if(isset($_SESSION['pat_id'])) {
              ?>
                      <form action="includes/logout.inc.php" method="post">
                        <button class="btn solid "name="logout-submit">LOGOUT</button>
                      </form>

              <?php
                  }else{
              ?>
                      <a href="login.php" class="btn transparent">LOGIN</a>
                      <a href="signup.php" class="btn solid">REGISTER</a>
              <?php
                  }
              ?>
                  
                  
              
              </div>
          </div>
          
          <div class="hamburger-menu-container">
            <div class="hamburger-menu">
                <div></div>
            </div>
          </div>
        </div>
    </header>
