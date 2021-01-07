<?PHP
require '../../front end/controller/actualiteC.php';
$Actualite1C=new ActualiteC();
$listeActualites=$Actualite1C->afficherActualitestri();



if(isset($_GET['recherche']))
{
foreach($listeActualites as $row)
{
	if(($_GET['recherche'] == $row['nom']))
	{
		
		?>


                                                                            <tr>
										<td><?=$row['id'] ?></td>
                                            <td><?=$row['nom'] ?></td>
											<td><?=$row['date'] ?></td>
											<td><?=$row['image'] ?></td>
											<td><?=$row['description'] ?></td>
											
											
											<td>	<span class='material-icons' ><a class="material" href="supprimerActualite.php?id=<?= $row['id']?>">delete</a></span>
										
										</td>
										<td>	<span class='material-icons' ><a class="material" href="modifierActualite.php?id=<?= $row['id']?>">modifier</a></span>
										
	</td>
																			
									</tr>
									
									
	

	<?php





}
}
}
else 
{
	foreach($listeActualites as $row)
{
	?>
	
  
									
	<tr>
									<td name="id"><?=$row['id'] ?></td>
										<td><?=$row['nom'] ?></td>
										<td><?=$row['date'] ?></td>
										<td><?=$row['image'] ?></td>
											<td><?=$row['description'] ?></td>
									<td>	<span class='material-icons' ><a class="material" href="supprimerActualite.php?id=<?= $row['id']?>">delete</a></span>
										
</td>
<td>	<span class='team-member-edit'><a href="forms-basic.php?id=<?= $row['id']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
										
</td>
									</tr>
									
									
									<?php

}
}
?>

