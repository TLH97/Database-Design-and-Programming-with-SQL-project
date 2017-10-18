<html>
<head>
	<title>Caracteristicile autovehiculului</title>
	<link rel="stylesheet" href="supercss.css">
</head>
<body bgcolor="#C8C8C8">  
<form action="elemente_comanda.php" method="GET"><br><br>
Denumire piese:<input type="text" name="denumire"><br><br>
Cantitate:<input type="number" name="cantitate" min="1"><br><br>
Pret(RON):<input type="number" name="pret" min="1"><br><br>
Id_comanda:<select name="id_comanda">
<?php
include "conectare.php";
$cmd="select * from vanzari";
$sql=mysqli_query($link,$cmd) or die("Nu pot selecta comenzile!");
if($sql)
while($rand=mysqli_fetch_array($sql))
echo "<option value='$rand[0]'>$rand[0] </option>";

?>
</select><br><br>
<input type="submit" value="Trimite">
</form>
</body>
</html>