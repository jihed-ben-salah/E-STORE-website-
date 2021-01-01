<?php
include_once "../controller/equipeC.php";

$nom_equipe=$_POST['nom_equipe'];
$equipe=new equipeC();
$equipe->ajouterequipe($nom_equipe);

header('Location:../views/tables-data.php');
?>