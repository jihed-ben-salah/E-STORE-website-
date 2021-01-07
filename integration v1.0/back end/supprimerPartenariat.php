<?PHP
include "../Controller/partenariatC.php";
$partenariatC=new PartenariatC();
if (isset($_GET["id"])){
	$partenariatC=new PartenariatC();
	$partenariatC->supprimerpartenariat($_GET["id"]);
	header('Location: ../../tables-basic.php');
}

?>