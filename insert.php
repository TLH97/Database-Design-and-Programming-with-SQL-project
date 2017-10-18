<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
include "conectare.php";
$cnp=$_GET["CNP"];
$nume=$_GET["Nume"];
$prenume=$_GET["Prenume"];
$numar_telefon=$_GET["Telefon"];
$e_mail=$_GET["E-mail"];
$adresa=$_GET["Adresa"];
$cmd="insert into clienti(cnp,nume,prenume,numar_telefon,e_mail,adresa)
values(".$cnp."','".$nume."','".$prenume."','".$numar_telefon."','".$e_mail."','".$adresa."')";
$sql=mysqli_query($link,%cmd) or die("Nu merge");
if($sql)
echo("Merge!");
?>

</body>
</html>