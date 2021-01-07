<?PHP
include "../../front end/controller/actualiteC.php";
$actualiteC=new ActualiteC();
if (isset($_GET["id"])){
	$actualiteC=new ActualiteC();
	$actualiteC->supprimerActualite($_GET["id"]);
	header('Location:afficherActualite1.php');
}

?>