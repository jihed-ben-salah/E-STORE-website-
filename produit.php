<?PHP
	class produit{
		private $idP = null;
        private $nomP = null;
        private $marqueP = null;
        private $modeleP = null;
        private $couleursP = null;
        private $tarifRP = null;
        private $tarifPP= null;
        private $tailleP= null;
        private $descriptifP= null;
        private $referenceP = null;
        private $imgP= null;
        private $categoriesP= null;
        private $equipe = null;

        
		
	}
        function __construct( string $nomP,string $marqueP ,string $modeleP ,string $couleursP ,float $tarifRP ,float $tarifPP,string $tailleP,string $descriptifP, string $referencePint ,string $imgP,string $categoriesP,string $equipe){
			
		
            $this->nomP=$nomP;
            $this->marqueP=$marqueP;
            $this->modeleP=$modeleP;
            $this->couleursP=$couleursP;
            $this->tarifRP=$tarifRP;
            $this->tarifPP=$tarifPP;
            $this->tailleP=$tailleP;
            $this->descriptifP=$descriptifP;
            $this->referenceP=$referenceP;
            $this->imgP=$imgP;
            $this->categoriesP=$categoriesP;
            $this->equipe=$equipe;
			
        }
        function getNomP() : string{
            return $this->nomP;
        }
        function getMarqueP() : string{
            return $this->marqueP;
        }
		function getEquipe(): string{
            return $this->equipe;
        }
		
		function getReferenceP() : string{
           return $this->referenceP;
        }
		
		function getModeleP() : string{
            return $this->modeleP;
        }
		function getCouleursP() : string{
            return $this->couleursP;
        }
		function getCategoriesP() : string{
            return $this->categoriesP;
        }
		function getTarifRP() : float{
            return $this->tarifRP;
        }
        function getTarifPP() : float{
            return $this->gettarifPP;
        }
 		function getTailleP() : string{
            return $this->rtailleP;
         }
		function getDescriptifP() : string{
            return $this->descriptifP;
        }
		
        function getImgP() : string{
            return $this->imgP;
        }
	
		
	?>