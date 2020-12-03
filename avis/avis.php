<?php
class avis {
    public $id;
public $etoile;
public $commentaire;
}

function getdatabaseAvisConnexion(){
try{
$user ="root";
$pass ="";
$pdo = new PDO('mysql:host=localhost;dbname=avis', $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;

}catch(PDOException $e){
echo 'Erreur :'. $e->getMessage();
die();
}
}
function getAllAvis(){
$con = getdatabaseAvisConnexion();
$requete = 'SELECT * FROM avis ';
$rows = $con->query($requete);
return $rows;

}

function readAvis($id){


}
function updateAvis($id, $etoile, $commentaire){


}
function deleteAvis($id){


}



?>