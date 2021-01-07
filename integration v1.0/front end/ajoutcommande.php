<?PHP
include "../controller/CommandeC.php";
require_once '../model/Commande.php';
include "../controller/notificationC.php";
require_once '../model/notification.php';

if ((isset($_POST['ville'])) && (isset($_POST['rue']))	&& (isset($_POST['email_addr']))   ){
$ville=$_POST['ville'];
$rue=$_POST['rue'];
$email=$_POST['email_addr'];
$tel=$_POST['tel'];
$numc= 0;
$nomp='';
$montant=200.50;
$codes=0;
//Notifications
$name=$_POST['email_addr'];
$message="nv";
$status="unread";
$type="commande";
$Commande =new CommandeC();
$Commande-> ajouterCommande($ville,$rue,$email,$tel,$numc,$codes,$nomp,$montant);// constructeur
$notification =new notificationC();
$notification-> ajouterNotifications($name,$type,$message,$status,$date);// constructeurNotifications
//header('location: paiement.php');

}else{
	echo "vĂ©rifier les champs";
}
?>