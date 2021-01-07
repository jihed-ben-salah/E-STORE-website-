<?PHP
include '../config2.php';
class PartenariatC {
function afficherpartenariat ($partenariat){
		echo "id: ".$partenariat->partenariatgetCin()."<br>";
		echo "nom: ".$partenariat->getNom()."<br>";
		echo "image: ".$partenariat->getPrenom()."<br>";
		
	}
	
	function ajouterpartenariat($partenariat){
		$sql="insert into partenariat (id,nom,image)
 values (:id,:nom,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$partenariat->getId();
        $nom=$partenariat->getNom();
        $image=$partenariat->getImage();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpartenariats(){
		//$sql="SElECT * From partenariat e inner join formationphp.partenariat a on e.cin= a.cin";
		$sql="SElECT * From partenariat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherpartenariatstri(){
		//$sql="SElECT * From partenariat e inner join formationphp.partenariat a on e.cin= a.cin";
		$sql="SElECT * From partenariat order by nom ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpartenariat($id){
		$sql="DELETE FROM partenariat where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpartenariat($partenariat,$id){
		$sql="UPDATE partenariat SET  nom=:nom , image=:image WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$partenariat->getId();
		$nom=$partenariat->getNom();
		$image=$partenariat->getImage();
        
        
		$datas = array(':id'=>$id, ':nom'=>$nom,':image'=>$image);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpartenariat($id){
		$sql="SELECT * from partenariat where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>
