<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body bgcolor="#C8C8C8">
<form action="vanzari_angajat_perioada.php" method="get">
Alege perioada:<input type="date" name="data1" value="1970-01-01">---
<input type="date" name="data2" value="2070-01-01"><br>
Alege angajatul:
<select required name="angajat">
	<?php
	include "conectare.php";
	$cmd="select a.nume, a.prenume, a.id_angajat
			from angajati a";
			$sql=mysqli_query($link,$cmd) or die ("<option>Nu pot afisa angajatii!</option>");
			while($rand=mysqli_fetch_array($sql))
			{
			?>
			<?php
			echo "<option value=$rand[2]>$rand[1] $rand[0]</option>";
			}
	?>
</select>
<input type="submit" value="Listeaza vanzarile">
</form>

	<p></p>
</body>
</html>