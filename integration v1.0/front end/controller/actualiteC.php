<?PHP
include '../config1.php';
class ActualiteC {
function afficherActualite ($actualite){
		echo "id: ".$actualite->$actualitegetCin()."<br>";
		echo "nom: ".$actualite->getNom()."<br>";
		echo "date: ".$actualite->getPrenom()."<br>";
		
	}
	
	function ajouterActualite($actualite){
		$sql="insert into actualite (id,nom,date,image,description)
 values (:id,:nom,:date,:image,:description)";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);
       $id=$actualite->getId();
        $nom=$actualite->getNom();
		$date=$actualite->getDate();
		$image=$actualite->getImage();
	$description=$actualite->getDescription();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherActualites(){
		//$sql="SElECT * From actualite e inner join formationphp.actualite a on e.cin= a.cin";
		$sql="SElECT * From actualite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherActualitestri(){
		//$sql="SElECT * From actualite e inner join formationphp.actualite a on e.cin= a.cin";
		$sql="SElECT * From actualite order by nom ASC";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerActualite($id){
		$sql="DELETE FROM actualite where id= :id";
		$db = config1::getConnexion();
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
	function modifierActualite($actualite,$id){
		$sql="UPDATE actualite SET  nom=:nom , date=:date WHERE id=:id";
		
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$actualite->getId();
		$nom=$actualite->getNom();
		$date=$actualite->getDate();
        
        
		$datas = array(':id'=>$id, ':nom'=>$nom,':date'=>$date);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererActualite($id){
		$sql="SELECT * from actualite where id=$id";
		$db = config1::getConnexion();
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
