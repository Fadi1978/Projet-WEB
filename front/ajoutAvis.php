<?PHP
include "../entities/avis.php";
include "../core/AvisA.php";

if (isset($_POST['Id_avis']) and isset($_POST['Avis']) and isset($_POST['id_client'])) {
$avis1=new avis($_POST['Id_avis'],$_POST['Avis'],$_POST['id_client']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Avis1A=new AvisA();
$Avis1A->ajoutAvis($avis1);
header('Location: avis.html');
	
}else{
	echo "vérifier les champs";
}


?>