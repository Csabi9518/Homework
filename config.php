<?php
$servername = "localhost";
$username = "root"; // Módosított felhasználónév
$password = ""; // Módosított jelszó (üres)
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Adatbázis kapcsolat sikertelen: " . $conn->connect_error);
}
?>