<?php
include '../config.php';
class categoriesC{
 
public function afficherCategories() {
    try {
        $pdo = getConnexion();
        $query = $pdo->prepare(
            'SELECT * FROM categoriesp'
        );
        $query->execute();
       return $query->fetchall();
     }catch(PDOException $e){
         $e->getMessage();
     }
}
}
?>