<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="supercss.css">
</head>

<body>
<?php
include "conectare.php";
$sql=array();
$sql[1]="create table elemente_comenzi(
         denumire varchar(20) not null,
			cantitate int not null,
			pret int not null,
			id_comanda int)";
$sql[2]="create table vanzari(
			id_comanda int not null ,
			data date not null,
			id_masina varchar(20) ,
			cnp bigint ,
			id_angajat int)";
$sql[3]="create table masini(
			id_masina varchar(20) not null,
			model varchar(15) not null,
			carburant varchar(15) not null,
			motor varchar(15) not null,
			an_fabricatie int not null)";
$sql[4]="create table clienti(
			cnp bigint not null,
			nume varchar(10) not null,
			prenume varchar(15) not null,
			numar_telefon varchar(20) not null,
			e_mail varchar(10) not null,
			adresa varchar(20) not null)";
$sql[5]="create table angajati(
			id_angajat int not null,
			nume varchar(20) not null,
			prenume varchar(15) not null,
			salariu int not null,
			varsta int not null)";
			$sql[6]="alter table vanzari add constraint pk2 primary key (id_comanda)";
			$sql[7]="alter table masini add constraint pk3 primary key (id_masina)";
			$sql[8]="alter table clienti add constraint pk4 primary key (cnp)";
			$sql[9]="alter table angajati add constraint pk5 primary key (id_angajat)";
			$sql[10]="alter table elemente_comenzi add constraint fk2 foreign key (id_comanda) references vanzari(id_comanda)";
			$sql[11]="alter table vanzari add constraint fk3 foreign key (id_masina) references masini(id_masina)";
			$sql[12]="alter table vanzari add constraint fk4 foreign key (cnp) references clienti(cnp)";
			$sql[13]="alter table vanzari add constraint fk5 foreign key (id_angajat) references angajati(id_angajat)";
			for($i=1;$i<=13;$i++)
			$cmd=mysqli_query($link,$sql[$i]);
			if($cmd)
			echo("Nu s-a executat comanda $i");
			?>

</body>
</html>