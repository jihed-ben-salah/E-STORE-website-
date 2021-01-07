<?php
    require_once '../config.php';
    require_once '../../front end/config2.php';
    class produitC {
       public function afficherProduit() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherProduitFournisseur() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit_fournisseur'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function supprimerProduit($idP) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE  FROM produit WHERE idP = :idP'
                );
                $query->execute([
                    'idP' => $idP
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function supprimerProduitFournisseur($idP) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE  FROM produit_fournisseur WHERE idP = :idP'
                );
                $query->execute([
                    'idP' => $idP
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherProduitByFou($id_fournisseur){
            try{
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit where id_fournisseur = :id_fournisseur '
                );
               $query->execute([
                   'id_fournisseur' => $id_fournisseur
               ]);
               return $query->fetchall();
            }catch(PDOException $e){
                $e->getMessage();
            }
          }
      /*  function supprimerProduit($idP)  {
            try{
            $pdo=getConnexion();
            $query=$pdo->prepare('DELETE FROM commentaires WHERE idP= :idP');
        $query->execute([
                'idP'=>$idP
            ]);
            echo $query->rowCount() . "records DELETED successfully";
             }catch(PDOException $e)
              {$e->getMessage();}
       }*/

        public function afficherProduitById($idP) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE idP = :idP'
                );
                $query->execute([
                    'idP' => $idP
                ]);
                return $query->fetchall();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function ajouterProduit( $nomP ,$marqueP  ,$modeleP,$couleursP ,$tarifRP ,$tarifPP,$tailleP,$descriptifP ,$refP ,$imageP ,$categoriesP,$equipe  ){
			$sql="INSERT INTO produit_fournisseur (nomP ,marqueP  ,modeleP,couleursP ,tarifRP ,tarifPP,tailleP,descriptifP ,refP, imageP ,categoriesP,equipe   ) 
			VALUES (:nomP ,:marqueP  ,:modeleP,:couleursP ,:tarifRP ,:tarifPP,:tailleP,:descriptifP ,:refP ,:imageP ,:categoriesP,:equipe  )";
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
					 'refP'=>$refP,
					 'descriptifP'=>$descriptifP,
					 'imageP' =>$imageP,
					 'categoriesP'=>$categoriesP, 
					 'equipe'=>$equipe
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
     /*   function afficherProduit(){

            $sql="SELECT * FROM produit ";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
                }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
                }	
            }*/
      /*  public function getAlbumByTitle($title) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM album WHERE titre = :title'
                );
                $query->execute([
                    'title' => $title
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addAlbum($album) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO album (titre, prix, image, genre) 
                VALUES (:titre, :prix, :image, 1)'
                );
                $query->execute([
                    'titre' => $album->getTitre(),
                    'prix' => $album->getPrix(),
                    'image' => $album->getImage()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateAlbum($album, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE album SET titre = :titre, prix = :prix, image = :image WHERE idAlbum = :id'
                );
                $query->execute([
                    'titre' => $album->getTitre(),
                    'prix' => $album->getPrix(),
                    'image' => $album->getImage(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        

        public function rechercherAlbum($title) {            
            $sql = "SELECT * from album where titre=:title"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'titre' => $album->getTitre(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        */
    }