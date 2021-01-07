<?PHP
require '../Controller/partenariatC.php';
$partenariat1C=new PartenariatC();
$listepartenariats=$partenariat1C->afficherpartenariatstri();




foreach($listepartenariats as $row)
{
	?>
	
  
								
    <div class="item">
   	
    <a href="#"><img src="image/<?=$row['image'] ?>" alt=""><?=$row['nom'] ?>
    
   </a> </div>
								
									
									<?php

}

?>
