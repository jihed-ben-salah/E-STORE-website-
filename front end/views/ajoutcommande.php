<?PHP
include "../controller/CommandeC.php";
require_once '../model/Commande.php';
if ((isset($_POST['ville'])) && (isset($_POST['rue']))	&& (isset($_POST['email_addr'])) && (isset($_POST['choix'])) && (isset($_POST['numero_de_carte']) && (isset($_POST['securite'])&& (isset($_POST['nom_porteur'])  )))){
$ville=$_POST['ville'];
$rue=$_POST['rue'];
$email=$_POST['email_addr'];
$tel=$_POST['tel'];
$choix=$_POST['choix'];
$numc=$_POST['numero_de_carte'];
$codes=$_POST['securite'];
$nomp=$_POST['nom_porteur'];
$montant=200.50;

$Commande =new CommandeC();
$Commande-> ajouterCommande($ville,$rue,$email,$tel,$choix,$numc,$codes,$nomp,$montant,$etat);// constructeur
header('Location: formulaire.php');

}else{
	echo "vĂ©rifier les champs";
}
?>