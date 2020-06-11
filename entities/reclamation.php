<?PHP
class reclamation{
	private $id_reclam;
	private $objet;
	private $date;
	private $id_client;
	function __construct($id_reclam,$objet,$date,$id_client){

		$this->id_reclam=$id_reclam;
		$this->objet=$objet;
		$this->date=$date;
		$this->id_client=$id_client;
	}
	function getId(){
		return $this->id_reclam;
	}
	function getObjet(){
		return $this->objet;
	}
	function getDate(){
		return $this->date;
	}
	function getIdclient(){
		return $this->id_client;
	}
	function setId($id_reclam){
		$this->id_reclam=$id_reclam;
	}
	
	function setObjet($objet){
		$this->objet=$objet;
	}
	function setDate($date){
		$this->date=$date;
	}
		function setIdclient($id_client){
		$this->id_client=$id_client;
	}
}
?>