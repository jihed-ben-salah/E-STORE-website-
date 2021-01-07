<?PHP
include "../controller/notificationC.php";
require_once '../model/notification.php';
if (isset($_POST['email_addr'])){
$name=$_POST['email_addr'];
$message="nv";
$status="unread";
$type="commande";


$notification =new notificationC();
$notification-> ajouterNotifications($name,$type,$message,$status,$date);// constructeur
header('Location: formulaire.php');

}else{
	echo "vĂ©rifier les champs";
}
?>