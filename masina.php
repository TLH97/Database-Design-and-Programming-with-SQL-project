<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
include "conectare.php";
$id_masina=$_GET["seria"];
$model=$_GET["model"];
$carburant=$_GET["carburant"];
$motor=$_GET["motor"];
$an_fabricatie=$_GET["an"];
$cmd="insert into masini(id_masina,model,carburant,motor,an_fabricatie)
values('".$id_masina."','".$model."','".$carburant."','".$motor."','".$an_fabricatie."')";
$sql=mysqli_query($link,$cmd) or die("Datele nu s-au inserat!");
if($sql)
echo("Date inserate cu succes!");
?>

</body>
</html>