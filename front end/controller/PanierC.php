<?php
 require_once '../config.php';
class panierC{
   
    function supprimerProduit($idP)  {
        try{
        $pdo=getConnexion();
        $query=$pdo->prepare('DELETE FROM produit WHERE idP= :idP');
        $query->execute([
            'idP'=>$idP
        ]);
        echo $query->rowCount() . "records DELETED successfully";
         }catch(PDOException $e)
          {$e->getMessage();}
   }
}