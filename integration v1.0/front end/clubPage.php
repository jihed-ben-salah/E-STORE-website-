<?php
include_once '../controller/produitC.php';
include_once '../controller/PanierC.php';
include '../model/produit.php';
include  '../model/db.php';
$produitC= new produitC();
$produitt= new Produit();
$produits= $produitC->afficherProduit();
$DB = new DB();
$panier=new panier($DB);
//$getId = $produitt->getIdP();
$getId = htmlspecialchars($produitt->getIdP());
$bdd = new PDO("mysql:host=localhost;dbname=projet1","root", "",
  [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
$commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_produit= ?');
$commentaires->execute(array($getId));
if(isset($_POST['submit_commentaire'])){
  if(isset($_POST['pseudo'], $_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire']) ){
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $commentaire = htmlspecialchars($_POST['commentaire']);
   
   if(strlen($pseudo < 25))
   {
     $ins = $bdd->prepare('INSERT INTO commentaires (pseudo,commentaire,id_produit) VALUES(?,?,?)');
     $ins->execute(array($pseudo,$commentaire,''));
     $c_erreur ="Votre commentaire a bien été posté";
   }
   else{echo "ERREUR:le pseudo doit contenir moins de 25 caractéres";}
  }else{
    $c_erreur = "tous les champs doivent etre complétés";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>club Africain E-Store</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/internal.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/categories.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="customer-account-index customer-account inner-page">
<div id="page"> 
  <!--header-->
  <?php include_once'header.php'?>
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div>
      <aside class="col-right sidebar col-sm-3">
        <div>
        <div class="main-text">Bienvenue chez Club Africain E-STORE</div>
        <div class="block-content">
         <img class="main-image" alt="image club affricain" src="assets/images/africain.jpg">
        </div>
      </div>
    </div>
    </aside>
    </div>
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="my-account">
            <div class="page-title">
              <h1>Produits</h1>
            </div>
            <div class="my-wishlist">
              <form method="post" action="#" id="wishlist-view-form">
                <fieldset>
                  <input type="hidden" value="ROBdJO5tIbODPZHZ" name="">
                  <div class="table-responsive">
                    <table id="wishlist-table" class="clean-table linearize-table data-table">
                      <thead>
                        <tr class="first last">
                          <th class="customer-wishlist-item-image"></th>
                          <th class="customer-wishlist-item-info">Nom</th>
                          <th class="customer-wishlist-item-quantity"></th>
                          <th class="customer-wishlist-item-price">Prix</th>
                          <th class="customer-wishlist-item-cart">Action</th>
                          <th class="customer-wishlist-item-remove"></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       foreach($produits as $produit){
                      ?>
                        <tr id="item_31" class="first odd">
                          <td class="wishlist-cell0 customer-wishlist-item-image"><a title="Softwear Women's Designer" href="#" class="product-image"><img width="150" height="150" alt="imageP" src="assets/images/<?php echo $produit['imageP'] ?>"></a></td>
                          <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a title="Softwear Women's Designer" href="#"> <?php echo $produit['nomP'];?></a></h3>
                           
                          <td data-rwd-label="Quantity" class="wishlist-cell2 customer-wishlist-item-quantity"><div class="cart-cell">
                             
                            </div></td>
                          <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price"><div class="cart-cell">
                              <div class="price-box"> <span class="regular-price"> <span class="price"> <?php echo $produit['tarifRP'];?></span> </span> </div>
                              <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                              <a class="button btn-cart" title="ajouter au panier" type="button" href="productDetails.php?idP=<?php echo $produit['idP']; ?>"><span><span>voir</span></span></a>
                              </form>
                            
                            </div>
                         
                             <?php }?>
                             </div>
                              </td>
                           
                         
                            </div>
                           
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </fieldset>
              </form>
            </div>
            <div class="buttons-set">
              <p class="back_link"><a href="#"><small>« </small>Back</a></p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <!-- Main Container End --> 
  
<br>

 
</div>
<?php
 include_once 'footer.php'
?>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>

</body>
</html>