<?php

     require_once "config.php";

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name1 = $_POST["name1"] ?? "";
      $mail1 = $_POST["mail1"] ?? "";
      $text1 = $_POST["text1"] ?? "";
  
      if (empty($name1) || empty($mail1) || empty($text1)) {
          echo "Kérlek, töltsd ki az összes mezőt!";
      } else {
          $sql = "SELECT id FROM users WHERE email = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("s", $mail1);
          $stmt->execute();
          $stmt->store_result();
  
          if ($stmt->num_rows > 0) {
              echo "Ez az email cím már használatban van!";
          } else {
              $stmt->close();
  
              $sql = "INSERT INTO users (name1, mail1, text1) VALUES (?, ?, ?)";
              $stmt = $conn->prepare($sql);
              
              $stmt->bind_param("sss", $name1, $mail1, $text1);
              $stmt->execute();
  
              echo "Sikeres regisztráció!";
          }
  
          $stmt->close();
      }
  }
  
  $conn->close();
   
   
 
?>


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
    <li><a href="index.php">Hamburgers</a></li>
    <li><a href="index.php">Pasta</a></li>
    <li><a href="index.php">Pizza</a></li>
    <li><a href="index.php">Desserts</a></li>
    <li><a href="index.php">Drinks</a></li>
    <li><a href="Gallery.php">Gallery page</a></li>
    <li><a href="contact.php">Contact page</a></li>
    <li><a href="lecture.php">Lecture page</a></li>
    </ul>
    </div>
    </body> 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JavaScript basic</title>
<script type="text/javascript">
function formCheck() {
document.getElementById('postsend').disabled =(document.getElementById('name1').value.length < 5) || (document.getElementById('email1').value.length < 5) || (document.getElementById('text1').value.length < 10);
var focus = null; // if it finds an error, it stores the incorrectly filled object
var name1 = document.getElementById("name1"); // checking the name field
if (name1) {
if (name1.value.length < 5) {
name1.style.background = '#f99';
focus = name1;
} else
name1.style.background = '#9f9';
}
var email1 = document.getElementById("email1"); // checking the name field
if (email1) {
if (email1.value.length < 5) {
email1.style.background = '#f99';
focus = email1;
} else
email1.style.background = '#9f9';
}
var text1 = document.getElementById("text1"); // checking the text (message) field
if (text1) {
if (text1.value.length < 10) {
text1.style.background = '#f99';
focus = text1;
} else
text1.style.background = '#9f9';
}
if (focus) // if the content of the focus variable is not null, then there was an incorrectly filled object
focus.focus();
}
function init() {
document.getElementById('postsend').disabled = true;
document.getElementById('name1').addEventListener('keydown', formCheck);
document.getElementById('email1').addEventListener('keydown', formCheck);
document.getElementById('text1').addEventListener('keydown', formCheck);

}
</script>
</head>
<body onload="init()">
<h2>Contact</h2>
<form id="newpost" action="index.php" method="post">

<label for="text1"><strong>Message</strong> (Required, minimum 10 characters):</label>
<textarea id="text1" name="text1"></textarea><br>
<label for="email1"><strong>E-mail (Required)</strong>:</label>
<input id="email1" name="email1" type="text" size="20" value=""><br>
<label for="name1"><strong>Name</strong> (Required, minimum 5 characters):</label>
<input id="name1" name="name1" type="text" size="20"><br>
<p>
</p>


<button name="postsend" id="postsend" type="submit">Send</button>
</form>




</body>
</html>


