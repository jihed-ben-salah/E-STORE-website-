<?php
include_once "../controller/produitC.php";

$nomP=$_POST['nomP'];
$marqueP=$_POST['marqueP'];
$modeleP=$_POST['modeleP'];
$couleursP=$_POST['couleursP'];
$tarifRP=$_POST['tarifRP'];
$tarifPP=$_POST['tarifPP'];
$tailleP=$_POST['tailleP'];
$descriptifP=$_POST['descriptifP'];
$refP=$_POST['refP'];
$imageP =$_POST['imageP'];
$categoriesP=$_POST['categoriesP'];
$equipe=$_POST['equipe'];
$produit=new produitC();
$produit->ajouterProduit( $nomP,$marqueP,$modeleP,$couleursP,$tarifRP,$tarifPP,$tailleP,$descriptifP,$refP,$imageP,$categoriesP,$equipe);

header('Location:../views/tables-data.php');
?>