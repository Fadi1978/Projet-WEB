<?PHP
class avis{
	private $Id_avis;
	private $Avis;
	private $id_client;
	function __construct($Id_avis,$Avis,$id_client){

		$this->Id_avis=$Id_avis;
		$this->Avis=$Avis;
		$this->id_client=$id_client;
	}
	function getIda(){
		return $this->Id_avis;
	}
	function getavis(){
		return $this->Avis;
	}
	function getIdclient(){
		return $this->id_client;
	}
	function setIda($Id_avis){
		$this->Id_avis=$Id_avis;
	}
	function setavis($Avis){
		$this->Avis=$Avis;
	}
		function setIdclient($id_client){
		$this->id_client=$id_client;
	}
}
?>