<?PHP
	class produit{
		private ?int $idP = null;
        private ?string $login = null;
        private ?string $mail = null;
        private ?string $password = null;
        private ?string $user = null;
        



	}
          function __construct( string $login,string $mail ,string $password ,string $user){


            $this->login=$login;
            $this->mail=$mail;
            $this->password=$password;
            $this->user=$user;

        }
         function getNom(): string{
            return $this->login;
        }
          function getmail(): string{
            return $this->mail;
        }
        function getpassword(): string{
            return $this->password;
        }
        function getuser(): string{
            return $this->user;
        }
       
	?>