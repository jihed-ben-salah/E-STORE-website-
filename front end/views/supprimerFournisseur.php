<?php
	include "../controller/fournisseurC.php";

$fournisseurC=new fournisseurC();

if (isset($_POST["id"])){
    $fournisseurC->supprimerfournisseur($_POST["id"]);
    header('Location:../back/tables-data.php');
}
?>