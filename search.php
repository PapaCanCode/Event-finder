<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Apps/CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>eventgang</title>
</head>
<body>
    <style>
        body {
            background-color: purple;
        }
    </style>
    
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
      

    <h1>SEARCH FOR A SPECIFIC EVENT</h1>
    <div class="wrapper">
        <div class="search-input">
          <a href="" target="_blank" hidden></a>
          <input type="text" placeholder="Type to search..">
          <div class="autocom-box">
            <!-- here list are inserted from javascript -->
          </div>
          <div class="icon"><i class="fas fa-search"></i></div>
        </div>
      </div>
     


<script src="./Apps/JS/suggestions.js"></script>
<script src="./Apps/JS/index.js"></script>
</body>









 