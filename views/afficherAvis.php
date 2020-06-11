<?PHP
include "../core/AvisA.php ";
$avis1A=new AvisA();
$listeAvis=$avis1A->afficherAvis();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Idavis</td>
<td>avis</td>
<td>Id client</td>
</tr>

<?PHP
foreach($listeAvis as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id_avis']; ?></td>
	<td><?PHP echo $row['Avis']; ?></td>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><form method="POST" action="supprimerAvis.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id_avis']; ?>" name="Id_avis">
	</form>
	</td>
	<td><a href="modifierAvis.php?cin=<?PHP echo $row['Id_avis']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


