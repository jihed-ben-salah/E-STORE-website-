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
                                <h2 class="pageheader-title"> AJOUTER DES PRODUITS </h2>

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
                                            <form class="needs-validation" action="ajoutP.php" method="POST" novalidate="">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="equipe">equipe</label>
                                                        <select class="custom-select d-block w-100" name="equipe" id="equipe" value="equipe">
                                                            <option value="">Choisir...</option>

                                                            <option>CA</option>
                                                            <option>EST</option>
                                                            <option>CSS</option>
                                                            <option>ESS</option>
                                                            <option>autre</option>

                                                        </select>

                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="Name">Nom produit :</label>
                                                        <input type="text" name="nomP" class="form-control" id="Nom" placeholder="Nom"  required="">

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="marque">Marque</label>
                                                    <div class="input-group">

                                                        <input type="text" name="marqueP" class="form-control" id="marque" placeholder="La marque "  required="">

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="reference">Reference</label>
                                                    <div class="input-group">

                                                        <input type="text" name="referenceP" class="form-control" id="reference" placeholder="reference "  required="">

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="model">Modele </label>
                                                    <input type="email" name="modeleP" class="form-control" id="model" placeholder="Modele">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="couleurs">Couleurs</label>
                                                    <input type="text" name="couleursP" class="form-control" id="couleurs" placeholder="les couleurs de ce produit"  required="">

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">categories</label>
                                                        <select class="custom-select d-block w-100" name="categories" id="categories"  required="">
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

                                                        <input type="text" name="tarifRP" class="form-control" id="tarifR" placeholder="tarif "  required="">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="prix">tarif promo(د.ت)</label>
                                                        <div class="input-group">

                                                            <input type="text" name="tarifPP" class="form-control" id="tarifP" placeholder="tarif promo " >

                                                        </div>
                                                <div class="mb-3">
                                                    <label for="taille">Taille <span class="text-muted"></span></label>
                                                    <input type="text" name="tailleP" class="form-control" id="taille" placeholder="Taille" >
                                                </div>
                                                <div class="mb-3">
                                                    <label for="descripif">descriptif <span class="text-muted"></span></label>
                                                    <input type="text" name="descriptifP" class="form-control" id="descriptif" placeholder="" value="" required="">                                                </div>


                                                 <h4 class="mb-3">image </h4>
                                                <div class="col-md-3 mb-3">
                                                <input type = "file" name = "imgP" ></div>
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Ajouter Maintenant</button>
                                            </form>
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