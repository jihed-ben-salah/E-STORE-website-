
<?php
include_once '../config.php';
$bdd = config::getconnexion();
if(isset ($_GET['idP']) AND !empty ($_GET['idP'])){
    $getid =htmlspecialchars($_GET['idP']);
    $produits = $bdd->prepare('SELECT * FROM produit where idP = ?');
    $produits->execute(array($getid));
    $produits = $produits->fetch();
}
var_dump($produits);
?>
<!DOCTYPE>
<html>
<head>
<meta charset="utf-8/>">
</head>
<body>
<h2>Produit:</h2>

<P><?= $produits['descriptifP']?></p>
</body>
</html>



