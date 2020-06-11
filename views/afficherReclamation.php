<?PHP
include "../core/ReclamationR.php ";
$reclamation1R=new ReclamationR();
$listeReclamation=$reclamation1R->afficherReclamations();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Objet</td>
<td>Date</td>
<td>Id client</td>
<td>tarif horaire</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReclamation as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_reclam']; ?></td>
	<td><?PHP echo $row['objet']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><form method="POST" action="supprimerReclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_reclam']; ?>" name="id_reclam">
	</form>
	</td>
	<td><a href="modifierReclamation.php?id_reclam=<?PHP echo $row['id_reclam']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


