<?php  


require '../../front end/controller/actualiteC.php';

if(isset($_POST['id']))
{

	$actualite1C=new ActualiteC();
    if(!empty($_POST['id '])&& !empty($_POST['nom']) && !empty($_POST['date']) )
    

    {
		$actualite1=new actualite($_POST['nom'],$_POST['date']);
		$actualite1C->modifierActualite($actualite1,$id);
      
    
       
    
        header('Location:afficherActualiter1.php'); 
    }
    
}
else {
	echo 'verifier le champs';
}