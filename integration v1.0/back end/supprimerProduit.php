<?php
	include "../controller/produitC.php";

$produitC=new produitC();

if (isset($_POST["idP"])){
    $produitC->supprimerProduitfournisseur($_POST["idP"]);
    header('Location: ../../back end/views/tables-data.php');
}
?>