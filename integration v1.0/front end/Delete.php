<?PHP
	include "../controller/produitC.php";

	$produitC=new produitC();
	
	if (isset($_POST["idP"])){
		$produitC->deleteProduit($_POST["idP"]);
		header('Location:afficherProduit.php');
	}

?>