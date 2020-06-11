<?PHP
include "../entities/reclamation.php";
include "../core/ReclamationR.php";

if (isset($_POST['id_reclam']) and isset($_POST['objet']) and isset($_POST['date']) and isset($_POST['id_client'])){
$reclamation1=new reclamation($_POST['id_reclam'],$_POST['objet'],$_POST['date'],$_POST['id_client']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Reclamation1R=new ReclamationR();
$Reclamation1R->ajoutReclamation($reclamation1);
header('Location: Reclamation.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>