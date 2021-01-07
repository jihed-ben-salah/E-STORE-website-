<?PHP
class Partenariat{
	private $id;
	private $nom;
	
	private $image;
	function __construct($nom,$image){
	
		$this->nom=$nom;
		$this->image=$image;
	
	}


	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getImage(){
		return $this->image;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	

	function setImage($image){
		$this->image=$image;
	}
	
}

?>