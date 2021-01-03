<?PHP
	class Commande{
		private ?int $id= null;
		private ?string $ville = null;
		private ?string $rue = null;
		private ?string $email = null;
        private ?string $tel = null;
		private ?string $choix = null;
        private ?int $numc = null;
		private ?int $codes = null;
        private ?string $nomp = null;
       private ?float $montant = null;
	    private ?string $etat = null;


		
		function __construct(string $ville, string $rue, string $email,string $tel,string $choix,int $numc,int $codes,string $nomp,float $montant,string $etat){
	
			$this->ville=$ville;
			$this->rue=$rue;
			$this->email=$email;
			$this->tel=$tel;
			$this->choix=$choix;
			$this->numc=$numc;
			$this->codes=$codes;
			$this->nomp=$nomp;
            $this->montant=$montant;
			$this->etat=$etat;

			
		}
		
		function getId(): int{
			return $this->id;
		}
		function getVille(): string{
			return $this->ville;
		}
		function getRue(): string{
			return $this->rue;
		}
		function getEtat(): string{
			return $this->etat;
		}
		function getMontant(): int{
			return $this->montant;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getTel(): int{
			$this->tel=$tel;
		}
		function getChoix(): string{
			$this->choix=$choix;
		}
			function getnumC(): int{
			$this->numc=$numc;
		}
		function getCodes(): int{
			$this->codes=$codes;
		}
		function getNomp(): string{
			$this->nomp=$nomp;
		}
		
		function setId(int $id): string{
			return $this->id;
		}
		function setVille(string $ville): string{
			return $this->ville;
		}
		
		function setTel(int $tel): int{
			$this->tel=$tel;
		}
			function setRue(int $rue): int{
			$this->rue=$rue;
		}
		function setEmail(string $email): string{
			return $this->email;
		}
		
		function setChoix(string $choix): string{
			$this->choix=$choix;
		}
			function setnumC(int $numc): int{
			$this->numc=$numc;
		}
		
		function setCodes(int $codes): int{
			$this->codes=$codes;
		}
		function setNomp(string $nomp): string{
			$this->nomp=$nomp;
		}
		function setEtat(string $etat): string{
			$this->etat=$etat;
		}
	}
?>