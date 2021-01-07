<?PHP
	include "../config2.php";
    include "../model/Commande.php";

	class CommandeC {
		
		function ajouterCommande($ville,$rue,$email,$tel,$numc,$codes,$nomp,$montant){
			$sql="INSERT INTO commande (ville,rue,email,tel,numc,codes,nomp,montant)
			VALUES (:ville,:rue,:email,:tel,:numc,:codes,:nomp,:montant)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
			     	'ville' => $ville,
					'rue' => $rue,
					'email' => $email,
					'tel' => $tel,
					
					'numc' => $numc,
					'codes' => $codes,
					'nomp' => $nomp,
					'montant' =>$montant,
             

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCommande(){
			
			$sql="SELECT * FROM commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		 
	      function supprimerCommande() {
           try
{
 $db = config::getConnexion();  
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 
// Suppression du message à l'aide d'une requête préparée

$req = $db->prepare('DELETE FROM commande WHERE id= ?');
$req->execute(array($_POST['id']));
$req->closeCursor();
		  }
 
   
	
		function recupererCommande($id){
			$sql="SELECT * from Commande where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
		
	}

?>