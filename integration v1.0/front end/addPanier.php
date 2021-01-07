<?php
session_start();
include '../model/db.php';
include '../controller/panierC.php';
include_once '../model/produit.php';

    $DB=new DB();
$panier = new panier($DB);
$produit = new Produit();
$json = array('error' => true);
if(isset($_GET['idP'])){
    $produit = $DB->query('SELECT idP FROM produit WHERE idP=:idP',array('idP'=> $_GET['idP']));
if(empty($produit)){
    $json['message']= "ce produit n'existe pas";
}
$panier->add($produit[0]->idP);
$json['error'] = false;
$json['message']= 'le produit a bien ete ajoute a votre panier';
}else{
    die("Vous n avez pas selectionne de produit a ajouter au panier");
}
echo json_encode($json);

?>