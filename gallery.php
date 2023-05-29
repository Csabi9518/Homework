<html>
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

</div>

<body>
 <div class="wrapper">
    <h1>Gallery</h1>

    <img class="img-hambi" src="img/hambi.jpg" alt="hambi"></a>
    <img class="img-pizza" src="img/pizza.jpg" alt="pizza"></a>
    <img class="img-udito" src="img/udito.jpg" alt="udito"></a>
 </div>
</body>

<h1>Gallery upload</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
<label>First:
<input type="file" name="first" required> 
</label>
<label>Second:
<input type="file" name="second">
</label>
<label>Third:
<input type="file" name="third">
</label>
<input type="submit" name="send">
</form>
</body>
</html>