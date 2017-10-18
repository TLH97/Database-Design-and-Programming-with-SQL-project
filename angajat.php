<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<?php
include "conectare.php";
$id_angajat=$_GET["id"];
$nume=$_GET["nume"];
$prenume=$_GET["prenume"];
$salariu=$_GET["salariu"];
$varsta=$_GET["varsta"];
$cmd="insert into angajati(id_angajat,nume,prenume,salariu,varsta)
values('".$id_angajat."','".$nume."','".$prenume."','".$salariu."','".$varsta."')";
$sql=mysqli_query($link,$cmd) or die("Datele nu s-au inserat!");
if($sql)
echo("Date inserate cu succes!");
?>

</body>
</html>