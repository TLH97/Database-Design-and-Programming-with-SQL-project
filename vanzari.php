<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
include "conectare.php";
$id_comanda=$_GET["comanda"];
$id_masina=$_GET["masina"];
$cnp=$_GET["cnp"];
$id_angajat=$_GET["angajat"];
$data=$_GET["data"];
$cmd="insert into vanzari(id_comanda,id_masina,cnp,id_angajat,data)
values('".$id_comanda."','".$id_masina."','".$cnp."','".$id_angajat."','".$data."')";
$sql=mysqli_query($link,$cmd) or die("Datele nu s-au inserat!");
if($sql)
echo("Date inserate cu succes!");
?>

</body>
</html>