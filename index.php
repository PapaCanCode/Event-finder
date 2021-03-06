<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Apps/CSS/main.css">
    <title>eventgang</title>
</head>
<body>
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

    <!--Featured header-->
    <div class="f-content">
    <h1>Featured events</h1>
    <h3>Here's whats trending</h3>
    </div>

<!--Image grid-->
<div class="image-container"> 
            <div class="f-card">
                    <img  class="grid-image" src="./Pictures/camping.jpg">
                </div>
                <div class="img-content">
                    <h2>camping event</h2>
                    <p>Happening at Lake Nakuru national park</p>
            </div>

            <div class="f-card">
                    <img  class="grid-image"  src="./Pictures/food meetups.jpg" alt="">
                </div>
                <div class="img-content">
                    <h2>Food meetup</h2>
                    <p>An all you can eat buffet, come hungry</p>
            </div>

            <div class="f-card">
                    <img  class="grid-image"  src="./Pictures/kids events.jpg" alt="">
                </div>
                <div class="img-content">
                    <h2>Kids day out</h2>
                    <p>Bring the little ones out for a nice fun day </p>
            </div>

            <div class="f-card">
                    <img  class="grid-image"  src="./Pictures/music pic ef.jpg" alt="">
                </div>
                <div class="img-content">
                    <h2>Feel the rythym</h2>
                    <p>Music event featuring local bands, dont miss</p>
            </div>


            <!--Slider header-->
    <div class="s-content">
        <h1>Something specific?</h1>
        <h3>Find the exact event you want</h3>
        </div>
  

            <!--Image slider-->

            <div class="slider">
                <figure>
                    <img src="./Pictures/nightlifepic.jpg" alt="">
                    <img src="./Pictures/traditional events.jpg" alt="">
                    <img src="./Pictures/cooking pic.jpg" alt="">
                    <img src="./Pictures/environmental meetups.jpg" alt="">
                    <img src="./Pictures/fitness events.jpg" alt="">
                    <img src="./Pictures/networking pic.jpg" alt="">
                    <img src="./Pictures/online meetup.jpg" alt="">
                    <img src="./Pictures/nightlifepic.jpg" alt="">
                </figure>
            </div>
</div>   
<!--Submit an event-->
<div class="banner">   
    <div class="banner2">
        <img src="./Pictures/julian-gentilezza-IWoHLg2-UQU-unsplash.jpg" alt="background image">
    </div>
    <div class="banner1-text">
        <h1>Become an organizer</h1>
        <h2>Submit an event you would like to host</h2>
        <button class="e-button" type="submit" onclick="document.location='./event.php'">Submit</button>
    </div>
</div>

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

<!--<footer class="footer">
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
</footer>-->


     
    
    <script src="./Apps/JS/index.js"></script>
</body>
</html>