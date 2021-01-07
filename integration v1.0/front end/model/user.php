<?php 
include '../config.php';
class User{
	private $login;
    private $pwd;
	private $role;
    public $conn;	

	public function __construct($login,$pwd,$conn,$role)
	{$this->role=$role;
		$this->login=$login;
		$this->pwd=$pwd;
		$this->conn = getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from utilisateur where email='$login' && password='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>