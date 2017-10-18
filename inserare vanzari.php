<html>
<head>
<title>Formular</title>
	<link rel="stylesheet" href="supercss.css">
</head>
<body bgcolor="#C8C8C8">
<form action="vanzari.php" method="GET"><br><br>
Id_comanda:<input type="number" name="comanda" min="1"><br><br>
Seria autovehiculului:<select name="masina">
<?php
include "conectare.php";
$cmd="select * from masini";
$sql=mysqli_query($link,$cmd) or die("Nu pot selecta masinile!");
if($sql)
while($rand=mysqli_fetch_array($sql))
echo "<option value='$rand[0]'>$rand[0] $rand[1]</option>";

?>
</select><br><br>
CNP Client:<select name="cnp">
<?php
include "conectare.php";
$cmd="select * from clienti";
$sql=mysqli_query($link,$cmd) or die("Nu pot selecta clientii!");
if($sql)
while($rand=mysqli_fetch_array($sql))
echo "<option value='$rand[0]'>$rand[0] $rand[1] $rand[2]</option>";

?>
</select><br><br>
Cod Angajat:<select name="angajat">
<?php
include "conectare.php";
$cmd="select * from angajati";
$sql=mysqli_query($link,$cmd) or die("Nu pot selecta angajatii!");
if($sql)
while($rand=mysqli_fetch_array($sql))
echo "<option value='$rand[0]'>$rand[0] $rand[1] $rand[2]</option>";

?>
</select><br><br>
Data:<input type="date" name="data" ><br><br>
<input type="submit" value="Trimite">
</form>
</body>
</html>
