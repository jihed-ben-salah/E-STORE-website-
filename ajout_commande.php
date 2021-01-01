<?php
include_once "../controller/notificationsC.php";
$id=$_POST['securite'];
$name=$_POST['email_addr'];
$status="unread";
$date="CURRENT_TIMESTAMP";
$notifications=new notificationsC();
$notifications->ajouterNotifications($id,$name,$date,$status);

header('Location:../views/formulaire.php');


?>