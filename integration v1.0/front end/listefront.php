<?PHP
require __DIR__.'/../Controller/actualiteC.php';
$Actualite1C=new ActualiteC();
$listeActualites=$Actualite1C->afficherActualitestri();




foreach($listeActualites as $row)
{
	?>
	
  
								
    <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="assets/products-images/actualite/<?=$row['image'] ?>"> </a>
                  <div class="new-label new-top-left">new</div>
                  <div class="box-timer">
                      <div class="countbox_2 timer-grid"></div>
                    </div>
                  <div class="actions">
                    <p data-original-title="Out of Stock" title="" data-placement="right" data-toggle="tooltip" class="availability out-of-stock"><span class="ava-out-of-stock">Out of stock</span></p>
                  </div>
                  
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="jacket EST" href="#"> <?=$row['nom'] ?> </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price"><?=$row['description'] ?></span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
								
									
									<?php

}

?>