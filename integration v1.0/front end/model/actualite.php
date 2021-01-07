<?PHP
class actualite{
	private $id;
	private $nom;
	
	private $date;
	private $image;
	private $description;

	function __construct($nom,$date,$image,$description){
	
		$this->nom=$nom;
		$this->description=$description;
		$this->image=$image;
		$this->date=$date;
	
	}

	function getImage(){
		return $this->image;
	}
	function getDescription(){
		return $this->description;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDate(){
		return $this->date;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	

	function setDate($date){
		$this->date=$date;
	}
	function setImage($image){
		$this->image=$image;
	}
	

	function setDescription($description){
		$this->description=$description;
	}
	
}

?>