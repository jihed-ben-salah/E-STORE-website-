<?php
	include "../controller/produitC.php";

$produitC=new produitC();

if (isset($_POST["idP"])){
    $produitC->supprimerProduit($_POST["idP"]);
    header('Location:../views/tables-data.php');
}
?>