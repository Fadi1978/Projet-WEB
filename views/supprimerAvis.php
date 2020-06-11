<?PHP
include "../core/AvisA.php";
$avisA=new AvisA();
if (isset($_POST["Id_avis"])){
	$avisA->supprimerAvis($_POST["Id_avis"]);
	header('Location: afficherAvis.php');
}

?>