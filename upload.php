<?php
// Application logic:
include('config.inc.php'); 
$messages = array();

if (isset($_POST['send'])) {

foreach($_FILES as $file) {

if ($file['error'] == 4); 
elseif (!in_array($file['type'], $MEDIATYPES)) 
$messages[] = " The type is not correct: " . $file['name'];
elseif ($file['error'] == 1 

or $file['error'] == 2
or $file['size'] > $MAXSIZE)
$messages[] = " Too big file: " . $file['name'];
else {
$target_dir = $FOLDER.strtolower($file['name']); 
if (file_exists($target_dir)) 
$messages[] = " Already exist: " . $file['name'];
else {

move_uploaded_file($file['tmp_name'], $target_dir);
$messages[] = ' Ok: ' . $file['name'];
}
}
}
}
// Visualization logic:
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery</title>
<style type="text/css"> // CSS settings

label { display: block; }
</style>
</head>
<body>
<h1>Uploading to the gallery:</h1>
<?php



