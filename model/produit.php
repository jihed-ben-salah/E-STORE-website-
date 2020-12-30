<?PHP
	class produit{
		private ?int $idP = null;
        private ?string $nomP = null;
        private ?string $marqueP = null;
        private ?string $modeleP = null;
        private ?string $couleursP = null;
        private ?float $tarifRP = null;
        private ?float $tarifPP= null;
        private ?string $tailleP= null;
        private ?string $descriptifP= null;
        private ?string $referenceP = null;
        private ?string $imgP= null;
        private ?string $categoriesP= null;
        private ?string $equipe = null;



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
         function getNom(): string{
            return $this->nomP;
        }
          function getMarqueP(): string{
            return $this->marqueP;
        }
        function getModeleP(): string{
            return $this->modeleP;
        }
        function getCouleursP(): string{
            return $this->couleursP;
        }
        function getTarifRP(): float{
            return $this->tarifRP;
        }
          function getTarifPP(): float{
            return $this->tarifPP;
        }
          function getTailleP(): string{
            return $this->tailleP;
         } 
        
    function getDescriptifP(): string{
     return $this->descriptifP;
 }

          function getReferenceP(): string{
           return $this->referenceP;
        }
        function getImgP(): string{
            return $this->imgP;
        }
          function getCategoriesP(): string{
            return $this->categoriesP;
          }
       

        function getEquipe(): string{
            return $this->equipe;
        }
    
	?>