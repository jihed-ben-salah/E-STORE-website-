<?PHP
include "../../front end/Model/actualite.php";
include  "../../front end/controller/actualiteC.php";

if ( isset($_GET['nom']) and isset($_GET['date'])and isset($_GET['image']) and isset($_GET['description']) ){
$actualite1=new actualite($_GET['nom'],$_GET['date'],$_GET['image'],$_GET['description']);

$actualite1C=new ActualiteC();
$actualite1C->ajouterActualite($actualite1);
header('Location:afficherActualite.php');
	
}else{
	echo "vérifier les champs";
}


?>