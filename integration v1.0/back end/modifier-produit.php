<?php
	include_once "../controller/produitC.php";
	include_once '../Model/produit.php';

	$p= new produitC();

	if (
		isset($_POST["nomP"]) && 
        isset($_POST["equipe"])&&
        isset($_POST["referenceP"]) && 
        isset($_POST["modeleP"])&&
        isset($_POST["marqueP"]) && 
        isset($_POST["couleursP"])&&
        isset($_POST["categories"]) && 
        isset($_POST["tarifRP"])&&
        isset($_POST["tarifPP"]) && 
        isset($_POST["tailleP"])&&
        isset($_POST["imgP"]) && 
        isset($_POST["descriptifP"])


	){


            $produit=new produit($_POST["nomP"],$_POST["marqueP"],$_POST["modeleP"], $_POST["couleursP"],$_POST["tarifRP"], $_POST["tarifPP"], $_POST["tailleP"] ,$_POST["descriptifP"],$_POST["referenceP"],$_POST["imgP"],$_POST["categories"],$_POST["equipe"]);
            $p->modifierProduit($produit,$_GET['idP']);

            header('refresh:1;url=../back/tables-data.php');

        }
    ?>    
        <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome-all.css">
    <title>Gerer votre compte  </title>

</head>

<body>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <br>
                                <br>
                                <h2 class="pageheader-title"> MODIFIER  PRODUIT </h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Produit</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Entrer les données</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php
if (isset($_GET['idP'])){
    $produit=$p->recupererProduit($_GET['idP']);

                    ?>              
    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0"> produit </h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" action="" method="POST" novalidate="">
                                                <div class="row">
                                                <div class="mb-3">
                                                    <label for="id">id</label>
                                                    <div class="input-group">

                                                        <input type="text" name="idP" class="form-control" id="idP" placeholder="id " value="<?php echo $produit['idP']; ?>" disabled>

                                                    </div>
                                                </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="Equipe">Equipe</label>
                                                        <input type="text" name="equipe" class="form-control" id="equipe" placeholder="equipe" value="<?php echo $produit['equipe']; ?>"   >

                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="Name">Nom produit :</label>
                                                        <input type="text" name="nomP" class="form-control" id="Nom" placeholder="Nom" value="<?php echo $produit['nomP']; ?>" >

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="marque">Marque</label>
                                                    <div class="input-group">

                                                        <input type="text" name="marqueP" class="form-control" id="marque" placeholder="La marque " value="<?php echo $produit['marqueP']; ?>">

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="reference">Reference</label>
                                                    <div class="input-group">

                                                        <input type="text" name="referenceP" class="form-control" id="reference" placeholder="reference "value="<?php echo $produit['referenceP']; ?>" >

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="model">Modele </label>
                                                    <input type="email" name="modeleP" class="form-control" id="model" placeholder="Modele" value="<?php echo $produit['modeleP']; ?>" >

                                                </div>
                                                <div class="mb-3">
                                                    <label for="couleurs">Couleurs</label>
                                                    <input type="text" name="couleursP" class="form-control" id="couleurs" placeholder="les couleurs de ce produit" value="<?php echo $produit['couleursP']; ?>">

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">categories</label>
                                                        <select class="custom-select d-block w-100" name="categories" id="categories" value="<?php echo $produit['categories']; ?>" >
                                                            <option value="">Choisir...</option>

                                                            <option>Maillot</option>
                                                            <option>Jacket</option>
                                                            <option>Accessoir</option>
                                                            <option>Shows</option>
                                                            <option>Swimwear</option>

                                                        </select>

                                                    </div>


                                                </div>
                                                <div class="mb-3">
                                                    <label for="prix">tarif regulier(د.ت)</label>
                                                    <div class="input-group">

                                                        <input type="text" name="tarifRP" class="form-control" id="tarifR" placeholder="tarif " value="<?php echo $produit['tarifRP']; ?>" >

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="prix">tarif promo(د.ت)</label>
                                                        <div class="input-group">

                                                            <input type="text" name="tarifPP" class="form-control" id="tarifP" placeholder="tarif promo " value="<?php echo $produit['tarifPP']; ?>">

                                                        </div>
                                                <div class="mb-3">
                                                    <label for="taille">Taille <span class="text-muted"></span></label>
                                                    <input type="text" name="tailleP" class="form-control" id="taille" placeholder="Taille"value="<?php echo $produit['tailleP']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="descripif">descriptif <span class="text-muted"></span></label>
                                                    <input type="text" name="descriptifP" class="form-control" id="descriptif" placeholder="descriptif" value="<?php echo $produit['descriptifP']; ?>" >                                                </div>


                                                 <h4 class="mb-3">image </h4>
                                                <div class="col-md-3 mb-3">
                                                <input type = "texte" name = "imgP" value="<?php echo $produit['imgP']; ?>" ></div>
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Ajouter Maintenant</button>
                                            </form>
                                            <?php
}
?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js-->
    <script src="assets/libs/js/main-js.js"></script>
</body>


</html>