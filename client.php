<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
include "conectare.php";
$cnp=$_GET["id"];
$nume=$_GET["nume"];
$prenume=$_GET["prenume"];
$numar_telefon=$_GET["tel"];
$e_mail=$_GET["email"];
$adresa=$_GET["adresa"];
$cmd="insert into clienti(cnp,nume,prenume,numar_telefon,e_mail,adresa)
values('".$cnp."','".$nume."','".$prenume."','".$numar_telefon."','".$e_mail."','".$adresa."')";
$sql=mysqli_query($link,$cmd) or die("Datele nu s-au inserat!");
if($sql)
echo("Date inserate cu succes!");
?>

</body>
</html>