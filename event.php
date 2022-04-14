<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Apps/CSS/main.css">
    <title>eventgang</title>
</head>
<style>
    body {
        background-color: black;
    }
</style>
<body>
    <!--Header start-->
    <header>
        <nav>
            <div class="logo"><h3>eventgang</h3></div>
            <ul class="nav">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./event.php">Add event</a></li>
                <li><a href="./search.php">Search for event</a></li>
            </ul>
            <div class="menu-icon">
                <div class="top"></div>
                <div class="middle"></div>
                <div class="bottom"></div>
            </div>
        </nav>
      
    </header>
    <!--Header end-->
    <div class="banner">   
        <div class="banner1">
            <img src="./Pictures/julian-gentilezza-IWoHLg2-UQU-unsplash.jpg" alt="background image">
        </div>
        <div class="banner1-text">
            <h1>Find events near you, connect with people</h1>
        </div>
    </div>

    <!--Submission form-->
   
   
   
   
   
   
   
    <div class="sub-wrapper">
        <header>Submit your event</header>
       <?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }

        ?>
        <form action="./Apps/php/save.php" method="post">
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="name" placeholder="First name">
              <i class='fas fa-user'></i>
            </div>
            <div class="field">
                <input type="text" name="name" placeholder="Last name">
                <i class='fas fa-user'></i>
              </div>
            <div class="field">
                <input type="text" name="email" placeholder="Enter your email">
                <i class='fas fa-envelope'></i>
              </div>
          </div>
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="event" placeholder="Event type">
              <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
              <input type="text" name="location" placeholder="Event location">
              <i class='fas fa-globe'></i>
            </div>
            <div class="field">
                <input type="date" name="time" placeholder="Time and date">
                <i class='fas fa-globe'></i>
              </div>
          </div>
          
          <div class="button-area">
            <button type="submit">Submit event</button>
            <span></span>
          </div>
        </form>
      </div>-->
<!--Submission form ends-->      










 
<!--News letter-->
<div class="n-container">
    <div class="newsletter">
        <h1>Subscribe to our newsletter</h1>
        <hr>
        <p>Submit your email and get notified whenever there's an upcoming event</p>
        <form action="./Apps/php/subscribe.php" method="post">
            <input type="email" name="email"  placeholder="email" required>
            <br>
            <button type="submit" name="subscribe">Subscribe</button>
        </form>
    </div>
</div>

<!--
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="about">
                <h4>About us</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam fugit provident labore quos cumque
                     at similique esse repudiandae, exercitationem magni iste eum non asperiores quam quibusdam sed consequatur!
                     Consequuntur, amet!Aliquid laudantium illo hic sit sunt corporis, ipsa excepturi nesciunt cupiditate deleniti aperiam.
                      Repudiandae eligendi nemo, est ad facere accusamus laborum veniam, tenetur 
                </p>
                
            </div>
            <div class="links">
                <h4>Quick links</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Terms & conditions</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="contacts">
                <h4>Contact us</h4>
                <ul>
                    <li>070000000</li>
                    <li>010000000</li>
                    <li><a href="#">email.us</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
-->
<script src="./Apps/JS/index.js"></script>
</body>