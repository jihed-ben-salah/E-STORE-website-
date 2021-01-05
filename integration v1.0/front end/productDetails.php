<?php
include_once '../controller/produitC.php';
include '../model/produit.php';
$produitC= new produitC();
$produitt= new produit();
$produits= $produitC-> afficherProduitById($_GET['idP']);
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
     $ins->execute(array($pseudo,$commentaire,$getId));
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
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>Superb premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="inner-page">
<div id="page"> 
                  <?php
  include_once 'header.php';
  ?>   
  <!-- Main Container -->
  <section class="main-container col1-layout wow bounceInUp animated">
  <?php 
                    foreach($produits as $produit){
                  ?>
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-sm-4 col-xs-12">
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <a href="products-images/product.jpg" class="cloud-zoom" id="zoom1"> <img src="assets/images/<?PHP echo $produit['imageP']; ?>" alt="product image"> </a> </div>
    
                  </div>
                  <!-- end: more-images --> 
                </div>
                <div class="product-shop col-sm-8 col-xs-12">
                  <div class="product-name">
                  
                    <h1><?PHP echo $produit['nomP']; ?></h1>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Donner votre avis</a> </p>
                  </div>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="special-price"> <span class="price-label">prix</span> <span id="product-price-48" class="price"><?PHP echo $produit['tarifPP']; ?></span> </p>
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?PHP echo $produit['tarifRP']; ?></span> </p>
                    </div>
                    <p class="availability in-stock pull-right"><span>Disponible</span></p>
                  </div>
                  <div class="short-description">
                    <h2>Description</h2>
                    <p><?PHP echo $produit['descriptifP']; ?> </p>
                    <?php
                    }
                    ?>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                        </div>
                      </div>
                      <a class="button btn-cart addPanier" title="panier" type="button" href="addPanier.php?idP=<?php echo $produit['idP']; ?>"><span>ajouter au panier</span></a>
                    </div>
                    <div class="email-addto-box">
                      <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                        <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
                        </ul>
                       
                    </div>
                  </div>
                 </div>
                 
              </form>
           
            <div class="product-collateral col-lg-12 col-sm-12 col-xs-12 bounceInUp animated">
              <div class="add_info">
              <div>
                        <h1>Commentaire:</h1>
                              <form method="POST">
                              <input type="text" name="pseudo" placeholder="votre pseudo"/><br>
                              <textarea name="commentaire" placeholder="votre commantaire..."></textarea><br>
                              <input type="submit" value="poster mon commentaire" name="submit_commentaire"/>
                              <br>
                             </form>
                             <?php
                              if(isset($c_erreur)){ echo $c_erreur; }
                              ?>
                            </div>
                            <div><?php while($c = $commentaires->fetch()){ ?>
                             <b><?=  $c['pseudo'];?></b>:<?= $c['commentaire'];?>
                             <br>
                             <?php }?>
                      
                    </div>
            </div> 
              </div>         
             </div>
      
  </section>
  <!-- Main Container End --> 
  
  <!-- Brand logo starts  -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            
            <div class="item"><a href="#"><img src="assets/images/b-logo3.png" alt="Image"></a> </div>
             
            
          
            <div class="item"><a href="#"><img src="assets/images/b-logo2.png" alt="Image"></a> </div>
             
            
          
            <div class="item"><a href="#"><img src="assets/images/b-logo1.png" alt="Image"></a> </div>
            
            
           
            <div class="item"><a href="#"><img src="assets/images/b-logo4.png" alt="Image"></a> </div>
             
            
           
            <div class="item"><a href="#"><img src="assets/images/b-logo5.png" alt="Image"></a> </div>
             
            
            
            <div class="item"><a href="#"><img src="assets/images/b-logo6.png" alt="Image"></a> </div>
          
            
            
            <div class="item"><a href="#"><img src="assets/images/b-logo1.png" alt="Image"></a> </div>
            
            
            
            <div class="item"><a href="#"><img src="assets/images/b-logo4.png" alt="Image"></a> </div>
           
                            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo ends  --> 
  <?php
  include_once 'footer.php';
  ?>
 
<!-- JavaScript --> 
<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/parallax.js"></script> 
<script type="text/javascript" src="assets/js/common.js"></script> 
<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="assets/js/cloud-zoom.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/app1.js"></script>
</body>
</html>