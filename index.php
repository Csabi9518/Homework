<?php

?>
<head>
    <title>Menu - Kezdőlap </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
if(isset($_SESSION['name'])){
    echo "Logged-in: " . $_SESSION['name'];
}
?>
<header style="text-align: right;">
        <nav>
            
                <li><a href="logout.php">Logout</a></li>
            
        </nav>
    </header>
<body>
  <div class ="navbar">
    <ul>

    
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="Soups.php">Soups</a></li>
    <li><a href="Hamburger.php">Hamburgers</a></li>
    <li><a href="Pasta.php">Pasta</a></li>
    <li><a href="Pizza.php">Pizza</a></li>
    <li><a href="Desserts.php">Desserts</a></li>
    <li><a href="Drinks.php">Drinks</a></li>
    <li><a href="Gallery.php">Gallery page</a></li>
    <li><a href="contact.php">Contact page</a></li>
    <li><a href="lecture.php">Lecture page</a></li>
    
    </ul>
    </div>
    </body> 

    <body onload="myFunction()">
        <p>Click the button to get your coordinates.</p>
        <button onclick="getLocation()">Try It</button>
        <p id="demo"></p>
        <script>
        var x = document.getElementById("demo");
        function getLocation() {
        if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(showPosition);
        else
        x.innerHTML = "Geolocation is not supported by this browser.";
        }
        function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
        var newContent = '<iframe src = "https://maps.google.com/maps?q=' + position.coords.latitude + ',' + position.coords.longitude + '&hl=es;z=14&amp;output=embed" width="600" height="450"></iframe>';
        var contentHolder = document.getElementById('content-holder');
        contentHolder.innerHTML = newContent;
        }
        </script>
        <p id="content-holder">Google maps: Waiting for GPS coordinates ...</p>
        </body>
        </html>








    