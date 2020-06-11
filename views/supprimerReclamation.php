<?PHP
include "../core/ReclamationR.php";
$reclamationR=new ReclamationR();
if (isset($_POST["id_reclam"])){
	$reclamationR->supprimerReclamation($_POST["id_reclam"]);
	header('Location: afficherReclamation.php');
}

?>