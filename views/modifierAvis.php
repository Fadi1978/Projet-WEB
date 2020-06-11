<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/avis.php";
include "../core/AvisA.php";
if (isset($_GET['Id_avis'])){
	$avisA=new AvisA();
    $result=$avisA->recupererAvis($_GET['Id_avis']);
	foreach($result as $row){
		$id=$row['Id_avis'];
		$nbr_invt=$row['Avis'];
		$date_evn=$row['id_client'];
?>
<form method="POST">
<table>
<caption>Modifier avis</caption>
<tr>
<td>id</td>
<td><input type="number" name="Id_avis" value="<?PHP echo $Id_avis ?>"></td>
</tr>
<tr>
<td>Avis</td>
<td><input type="text" name="Avis" value="<?PHP echo $Avis ?>"></td>
</tr>
<tr>
<td>idclient </td>
<td><input type="number" name="id_client" value="<?PHP echo $id_client ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['Id_avis'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$avis=new avis($_POST['Id_avis'],$_POST['Avis'],$_POST['id_client']);
	$avisA->modifierAvis($evenment,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherAvis.php');
}
?>
</body>
</HTMl>