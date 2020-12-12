<?PHP
	include "../controller/produitC.php";

	$produitC=new produitC();
	
	if (isset($_POST["idP"])){
		$produitC->supprimerProduit($_POST["idP"]);
		header('Location:../back/tables-data.php');
	}

?>