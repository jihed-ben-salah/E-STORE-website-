<?PHP
	class fournisseur{
		private ?int $id ;
        private ?string $login ;
        private ?string $mail ;
        private ?string $password ;
        private ?string $user ;
        private ?string $token ;




	}
          function __construct( string $login , string $mail ,string $password ,string $user , string $token){


            $this->login=$login;
            $this->mail=$mail;
            $this->password=$password;
            $this->user=$user;
            $this->token=$token;

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