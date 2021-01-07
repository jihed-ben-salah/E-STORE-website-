<?PHP
  include "../model/notification.php";

	class notificationC {
		
		function ajouterNotifications($name,$type,$message,$status,$date){
			$sql="INSERT INTO notifications (name,type,message,status,date)
			VALUES (:name,:type,:message,:status,:date)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
			     	'name' => $name,
					'type' => $type,
					'message' => $message,
					'status' => $status,
					'date' => $date,
             

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherNotifications(){
			
			$sql="SELECT * FROM notifications";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		 
	      function supprimerNotifications() {
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
 
   
	
		function recupererNotifications($id){
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