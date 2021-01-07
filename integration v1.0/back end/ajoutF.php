<?php
include_once "../controller/fournisseurC.php";

$login=$_POST['login'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$user=$_POST['user'];
$token="NULL";
$fournisseur=new fournisseurC();
$fournisseur->ajouterfournisseur( $login,$mail,$password,$user,$token);


//header('Location:../back/tables-data.php');
?>