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
$referenceP=$_POST['referenceP'];
$imgP=$_POST['imgP'];
$categories=$_POST['categories'];
$equipe=$_POST['equipe'];
$produit=new produitC();
$produit->ajouterProduit( $nomP,$marqueP,$modeleP,$couleursP,$tarifRP,$tarifPP,$tailleP,$descriptifP,$referenceP,$imgP,$categories,$equipe);

header('Location:../back/tables-data.php');








?>