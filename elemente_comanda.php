<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
include "conectare.php";
$denumire=$_GET["denumire"];
$cantitate=$_GET["cantitate"];
$pret=$_GET["pret"];
$id_comanda=$_GET["id_comanda"];
$cmd="insert into elemente_comenzi(denumire,cantitate,pret,id_comanda)
values('".$denumire."','".$cantitate."','".$pret."','".$id_comanda."')";
$sql=mysqli_query($link,$cmd) or die("Datele nu s-au inserat!");
if($sql)
echo("Date inserate cu succes!");
?>
</body>
</html>