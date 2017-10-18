<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
$host="localhost";
$user="root";
$parola="";
$db="service";
$link=mysqli_connect($host,$user,$parola,$db) or
die ("Conexiune nerealizata!");
if($link)
echo" Conexiune realizata!";
?>
</body>
</html>