<?php


include_once "../config.php";
include_once "../model/equipe.php";


	class equipeC {

		function ajouterequipe($nom_equipe){
			$sql="INSERT INTO equipe (nom_equipe) 
			VALUES (:nom_equipe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([

					 'nom_equipe' =>$nom_equipe,
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		 function afficherequipe(){

		$sql="SELECT * FROM equipe";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
			}
		catch (Exception $e){
		die('Erreur: '.$e->getMessage());
			}	
		}


		 function supprimerequipe($id)  {
		 	try{
		 	$db=config::getConnexion();
		 	$query=$db->prepare('DELETE FROM equipe WHERE id= :id');
	 	$query->execute([
		 		'id'=>$id
		 	]);
		 	echo $query->rowCount() . "records DELETED successfully";
		 	 }catch(PDOException $e)
		 	  {$e->getMessage();}
		}



		
	
	 function recupererequipe($id){
	 	$sql="SELECT * from equipe where id=$id";
	 	$db = config::getConnexion();
	 	try{
	 		$query=$db->prepare($sql);
				$query->execute();

	 		$equipe=$query->fetch();
	 		return $equipe;
	 	}
	 	catch (Exception $e){
	 		die('Erreur: '.$e->getMessage());
	 	}
	 }
     function afficherProduit($id)
     {
       try {
      $pdo = getConnexion();
      $query= $pdo->prepare(
         'SELECT * FROM produit1 where equipe= :id'
         );
          $query->execute([
         'id'=> $id
      ]);
          return $query->fetchAll();
         }catch (PDOException $e){
         $e->getMessage();
        }
     }
 

	}
    


?>