<?php

include_once "../config.php";
	include_once "../model/produit.php";


	class produitC {

		function ajouterProduit( $nomP ,$marqueP  ,$modeleP,$couleursP ,$tarifRP ,$tarifPP,$tailleP,$descriptifP ,$referenceP ,$imgP ,$categories,$equipe  ){
			$sql="INSERT INTO produit (nomP ,marqueP  ,modeleP,couleursP ,tarifRP ,tarifPP,tailleP,descriptifP ,referenceP ,imgP ,categories,equipe   ) 
			VALUES (:nomP ,:marqueP  ,:modeleP,:couleursP ,:tarifRP ,:tarifPP,:tailleP,:descriptifP ,:referenceP ,:imgP ,:categories,:equipe   )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([

					 'nomP' =>$nomP,
					 'marqueP' =>$marqueP,
					 'modeleP'=>$modeleP,
					 'couleursP'=>$couleursP,
					 'tarifRP'=>$tarifRP,
					 'tarifPP' =>$tarifPP,
					 'tailleP'=>$tailleP,
					 'referenceP'=>$referenceP,
					 'descriptifP'=>$descriptifP,
					 'imgP' =>$imgP,
					 'categories'=>$categories, 
					 'equipe'=>$equipe
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		 function afficherProduit(){

		$sql="SELECT * FROM produit";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
			}
		catch (Exception $e){
		die('Erreur: '.$e->getMessage());
			}	
		}


		 function supprimerProduit($idP)  {
		 	try{
		 	$db=config::getConnexion();
		 	$query=$db->prepare('DELETE FROM produit WHERE idP= :idP');
	 	$query->execute([
		 		'idP'=>$idP
		 	]);
		 	echo $query->rowCount() . "records DELETED successfully";
		 	 }catch(PDOException $e)
		 	  {$e->getMessage();}
		}



		
		 function modifierProduit($produit,$idP){
		 	try {
		 		$db = config::getConnexion();
		 		$query = $db->prepare(
		 			'UPDATE produit SET 
		 		   
		 		    nomP= :nomP,
		 			  marqueP= :marqueP,
		 			 modeleP= :modeleP,
		 			 couleursP= :couleursP,
					  tarifRP= :tarifRP,
		 			 tarifPP= :tarifPP,
		 			 tailleP= :tailleP,
					  descriptifP= :descriptifP,
					  referenceP= :referenceP,
					  imgP= :imgP,
		 			 categories= :categories,
					  equipe= :equipe
		 			WHERE idP = :idP'
				 );
			      $query->execute([	
					  
		 			'nomP'=>$produit->getNom(),
		 			 'marqueP'=>$produit->getMarqueP(),
		 			'modeleP'=>$produit->getModeleP(),
		 			'couleursP'=>$produit->getCouleursP(),
		 			'tarifRP'=>$produit->getTarifRP(),
		 			'tarifPP'=>$produit->getTarifPP(),
		 			'tailleP'=>$produit->getTailleP(),
					 'descriptifP'=>$produit->getDescriptifP(),
					 'referenceP'=>$produit->getReferenceP(),
		 			'imgP'=>$produit->getImgP(),
					 'categories'=>$produit->getCategoriesP(),
					 'equipe'=>$produit->getEquipe(),
					 'idP'=> $idP
		 		]);echo "balalalalallala";
		 		echo $query->rowCount() . " records UPDATED successfully <br>";
		 	} catch (PDOException $e) {
		 		$e->getMessage();
		 	}
		 }
	 function recupererProduit($idP){
	 	$sql="SELECT * from produit where idP=$idP";
	 	$db = config::getConnexion();
	 	try{
	 		$query=$db->prepare($sql);
				$query->execute();

	 		$produit=$query->fetch();
	 		return $produit;
	 	}
	 	catch (Exception $e){
	 		die('Erreur: '.$e->getMessage());
	 	}
	 }


	}
    ?>