<?PHP
include "../config.php";
class ReclamationR {
function afficherReclamation ($reclamation){
		echo "id_reclam: ".$reclamation->getId()."<br>";
		echo "objet: ".$reclamation->getObjet()."<br>";
		echo "date: ".$reclamation->getDate()."<br>";
		echo "id_client: ".$reclamation->getIdclient()."<br>";
	}
	function ajoutReclamation($reclamation){
		$sql="insert into reclamation (id_reclam,objet,date,id_client) values (:id_reclam, :objet,:date,:id_client)"; 
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_reclam=$reclamation->getId();
        $objet=$reclamation->getObjet();
        $date=$reclamation->getDate();
        $id_client=$reclamation->getIdclient();
		$req->bindValue(':id_reclam',$id_reclam);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_client',$id_client);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From reclamation e inner join formationphp.reclamation a on e.id_reclam= a.id_reclam";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerReclamation($id_reclam){
		$sql="DELETE FROM reclamation where id_reclam= :id_reclam";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_reclam',$id_reclam);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierReclamation($reclamation,$id_reclam){
		$sql="UPDATE reclamation SET id_reclam=:id_reclamm, objet=:objet,date=:date,id_client=:id_client WHERE id_reclam=:id_reclam";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_reclamm=$reclamation->getId();
        $objet=$reclamation->getObjet();
        $date=$reclamation->getDate();
        $id_client=$reclamation->getIdclient();
		$datas = array(':id_reclamm'=>$id_reclamm, ':id_reclam'=>$id_reclam, ':objet'=>$objet,':date'=>$date,':id_client'=>$id_client);
		$req->bindValue(':id_reclamm',$id_reclamm);
		$req->bindValue(':id_reclam',$id_reclam);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_client',$id_client);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
		function recupererReclamation($id_reclam){
		$sql="SELECT * from reclamation where id_reclam=$id_reclam";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
 

function loginusers($mail, $mdp)
    {

        $sql = "SElECT * From user where username='" . $mail . "' and password='" . $mdp . "'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

?>