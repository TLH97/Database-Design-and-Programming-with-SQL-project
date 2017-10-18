<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>

<table>
	<tr>
		<th>Angajat</th>
		<th>Total Vanzari</th>
	</tr>
<?php
include "conectare.php";
$data1=$_GET["data1"];
$data2=$_GET["data2"];
$angajat=$_GET["angajat"];
$cmd="select count(v.id_comanda) total_vanzari, a.nume, a.prenume, a.id_angajat
		from angajati a, vanzari v
		where a.id_angajat=v.id_angajat and v.data between '$data1' and '$data2'
		and v.id_angajat = $angajat";
		$sql=mysqli_query($link,$cmd) or die ("<tr><td>Nu pot afisa vanzarile!</td></tr>");
		while($rand=mysqli_fetch_array($sql))
		{
		?>
		<?php
		echo "<tr><td>$rand[2] $rand[1]</td>
					<td>$rand[0]</td>
					</tr>";
		}
		?>
</table>

</body>
</html>