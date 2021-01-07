<?PHP
require '../../front end/controller/partenariatC.php';
$partenariat1C=new PartenariatC();
$listepartenariats=$partenariat1C->afficherpartenariatstri();



if(isset($_GET['recherche']))
{
foreach($listepartenariats as $row)
{
	if(($_GET['recherche'] == $row['nom']))
	{
		
        ?>
        


                                    
		<tr>
                                           
										   <td><?=$row['id'] ?></td>
										   <td><?=$row['nom'] ?></td>
										   <td>
											   <div class="team-img ">
												   <img class="img-responsive" src="images/<?=$row['image'] ?>" alt="">
											   </div>                         
											   <?=$row['image'] ?></td>
											   <td>	<span class='material-icons' ><a class="material" href="tache_houssem/Views/supprimerPartenariat.php?id=<?= $row['id']?>">delete</a></span>
									   
									   </td>
									   <td>	<span class='team-member-edit'><a href="forms-basic.php?id=<?= $row['id']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
										
</td>
									   </tr>
									
	

	<?php





}
}
}
else 
{
	foreach($listepartenariats as $row)
{
	?>
	<tr>
                                           
                                            <td><?=$row['id'] ?></td>
                                            <td><?=$row['nom'] ?></td>
                                            <td>
                                                <div class="team-img ">
                                                    <img class="img-responsive" src="images/<?=$row['image'] ?>" alt="">
                                                </div>                         
												<?=$row['image'] ?></td>
												<td>	<span class='material-icons' ><a class="material" href="tache_houssem/Views/supprimerPartenariat.php?id=<?= $row['id']?>">delete</a></span>
										
										</td>
										<td>	<span class='team-member-edit'><a href="forms-basic.php?id=<?= $row['id']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
										
</td>
                                        </tr>
  
									
	
									
									
									<?php

}
}
?>

