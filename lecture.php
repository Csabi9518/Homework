<head>
    <title>Menu - Kezdőlap </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

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


    <p>Cookies</p>
    <?php
$cookie_name = "user";
$cookie_value = "Nap Pali";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
echo "Cookie named '" . $cookie_name . "' is not set!";
else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</body>
</html>

<p>----------------</p>
<p>Sending emails</p>
        <?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
?>
<html>
<body>
<?php
if (isset($_POST['email'])) {
$email = $_POST['email'] ;
$subject = $_POST['subject'] ;
$message = $_POST['message'] ;
mail( "somebody@mail.com", "Subject: $subject", $message, "From: $email" );
echo "Thank you for your message.";
} else {
echo "<form method='post' action='mailform.php'>
Name: <input name='email' type='text'><br>
Email: <input name='subject' type='text'><br>
Message:<br>
<textarea name='message' rows='15' cols='40'>
</textarea><br>
<input type='submit'>
</form>";
}
?>
</body>
</html>

<p>----------------</p>
<p>Web storage</p>

<!DOCTYPE HTML>
<html>
<body>
<script type="text/javascript">
if( sessionStorage.hits )
sessionStorage.hits = Number(sessionStorage.hits) +1;
else
sessionStorage.hits = 1;
document.write("Total Hits :" + sessionStorage.hits );
</script>
<p>Refresh the page to increase number of hits.</p>
<p>Close the window and open it again and check the result.</p>
</body>
</html>
<!DOCTYPE HTML>
<html>
<body>
<script type="text/javascript">
if( localStorage.hits )
localStorage.hits = Number(localStorage.hits) +1;
else
localStorage.hits = 1;
document.write("Total Hits :" + localStorage.hits );
</script>
</body>
</html>

<p>----------------</p>
<p>Session storage</p>

<!DOCTYPE HTML>
<html>
<body>
<script type="text/javascript">
localStorage.clear();
if( localStorage.hits )
localStorage.hits = Number(localStorage.hits) +1;
else
localStorage.hits = 1;
document.write("Total Hits :" + localStorage.hits );
</script>
<p>Refreshing the page would not to increase hit counter.</p>
<p>Close the window and open it again and check the result.</p>
</body>
</html>
<p>----------------</p>
<p>Local storage</p>

<!DOCTYPE HTML>
<html>
<body>
<script type="text/javascript">
if( localStorage.hits )
localStorage.hits = Number(localStorage.hits) +1;
else
localStorage.hits = 1;
document.write("Total Hits :" + localStorage.hits );
</script>
<p>Refresh the page to increase number of hits.</p>
<p>Close the window and open it again and check the result.</p>
</body>
</html>

<p>----------------</p>
<p>Web workers</p>
<!DOCTYPE HTML>
<html>
<head>
<title>Big for loop</title>
<script>
function bigLoop(){
for (var i = 0; i <= 10000000000; i += 1)
var j = i;
alert("Completed " + j + "iterations" );
}
function sayHello(){
alert("Hello sir...." );
}
</script>
</head>
<body>
<input type="button" onclick="bigLoop();" value="Big Loop">
<input type="button" onclick="sayHello();" value="Say Hello">
</body>
</html>

<p>----------------</p>
<p>Server Sent events</p>

<!DOCTYPE html>
<html>
<body>
<div id="result"></div>
<script>
// check browser support for server-sent events:
if(typeof(EventSource) !== "undefined") {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
} 
</script>
</body>
</html>

<p>----------------</p>
<p>Geolocation</p>

<!DOCTYPE html>
<html>
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
}
</script>
</body>
</html>

<p>----------------</p>
<p>Drag and drop API</p>

<!DOCTYPE HTML>
<html>
<head>
<style>
#div1 {width:400px;height:300px;padding:10px;border:1px solid #aaaaaa;}
</style>
<script>
function allowDrop(ev) {
ev.preventDefault();
}
function drag(ev) {
ev.dataTransfer.setData("text", ev.target.id);
}
function drop(ev) {
ev.preventDefault();
var data = ev.dataTransfer.getData("text");
ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>
<h2>Drag the image into the rectangle:</h2>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="nje.png" draggable="true" ondragstart="drag(event)" width="400" height="300">
</body>
</html>

<p>----------------</p>
<p>Canvas</p>

<!DOCTYPE HTML>
<html>
<head>
<style>
#mycanvas{border:1px solid red;}
</style>
</head>
<body>
<canvas id="mycanvas" width="100" height="100"></canvas>
</body>
</html>

<p>----------------</p>
<p>SVG</p>

<!DOCTYPE html>
</text>
Sorry, your browser does not support inline SVG.
</svg>
</body>
</html>

<p>----------------</p>
<p>Responsive Web Design with HTML and CSS</p>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
box-sizing: border-box;
}
.header {
border: 1px solid red;
padding: 15px;
}
.menu {
width: 25%;
float: left;
padding: 15px;
border: 1px solid red;
}
.main {
width: 75%;
float: left;
padding: 15px;
border: 1px solid red;
}
</style>
</head>
<body>
<div class="header">
<h1>Restaurant</h1>
</div>
<div class="menu">
<ul>
<li>The Food</li>
<li>The Location</li>
<li>The City</li>
</ul>
</div>
<div class="main">
<h1>The Location</h1>
<p>A new color in the city center, all day brunch and breakfast, specialty foods and delicious desserts.</p>
</div>
</body>
</html>

<p>----------------</p>
<p>Bootramp framework</p>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Basic Bootstrap Template</title>
<!-- Bootstrap CSS file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
