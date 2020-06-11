<HTML>
<head>
</head>
<body>
<?PHP

                include "../Core/ReclamationnR.php";
                $ReclamationManage=new ReclamationManage();
$result=$ReclamationManage->recupererReclamation($_GET['id_reclam']);
foreach($result as $row)
{

?>
<form method="POST">
<table>
<caption>Modifier Reclamation</caption>
<tr>
<td>Id_reclam</td>
<td><input type="number" name="id_reclam" value="<?PHP echo $id_reclam ?>"></td>
</tr>
<tr>
<td>Ordre</td>
<td><input type="text" name="objet" value="<?PHP echo $ordre ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>Id_client</td>
<td><input type="number" name="id_client" value="<?PHP echo $id_client?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_reclami" value="<?PHP echo $_GET['id_reclam'];?>"></td>
</tr>
</table>
</form>
<?php
	include '../Core/ReclamationRR.php';
	$ReclamationManage= new ReclamationManage();
	var_dump($_POST);
	$Reclamation=new Reclamation($_POST['id_reclam'],$_POST['objet'],$_POST['date'],$_POST['id_client']);

	$ReclamationManage->modifierReclamation($Admin,$_POST['id']);
	
	//header('Location: afficher.php);
    													
?>

</body>
</HTMl>
