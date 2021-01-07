<?PHP
	include "../controller/CommandeC.php";

	$commandeC=new CommandeC();
	
	if (isset($_POST["id"])){
		$commandeC->supprimerCommande($_POST["id"]);
		header('Location:tables-basic.php');
	}

?>