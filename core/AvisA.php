<?PHP
include "../config.php";
class AvisA {
function afficherAvi ($avis){
		echo "Id_avis: ".$avis->getIda()."<br>";
		echo "Avis: ".$avis->getavis()."<br>";
		echo "id_client: ".$avis->getIdclient()."<br>";
	}
	function ajoutAvis($avis){
		$sql="insert into avis (Id_avis,Avis,id_client) values (:Id_avis,:Avis,:id_client)"; 
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id_avis=$avis->getIda();
        $Avis=$avis->getavis();
        $id_client=$avis->getIdclient();
		$req->bindValue(':Id_avis',$Id_avis);
		$req->bindValue(':Avis',$Avis);
		$req->bindValue(':id_client',$id_client);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAvis(){
		//$sql="SElECT * From avis e inner join formationphp.avis a on e.Id_avis= a.Id_avis";
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerAvis($Id_avis){
		$sql="DELETE FROM avis where Id_avis= :Id_avis";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_avis',$Id_avis);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierAvis($avis,$Id_avis){
		$sql="UPDATE avis SET Id_avis=:Id_aviss, Avis=:Avis,id_client=:id_client WHERE Id_avis=:Id_avis";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Id_aviss=$avis->getIda();
        $Avis=$avis->getavis();
        $id_client=$avis->getIdclient();
		$datas = array(':Id_aviss'=>$Id_aviss, ':Id_avis'=>$Id_avis, ':Avis'=>$Avis,':id_client'=>$id_client);
		$req->bindValue(':Id_aviss',$Id_aviss);
		$req->bindValue(':Id_avis',$Id_avis);
		$req->bindValue(':Avis',$Avis);
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
		function recupererAvis($Id_avis){
		$sql="SELECT * from avis where Id_avis=$Id_avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
 
}

?>